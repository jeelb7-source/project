<?php
$selected_time = $_POST['time'] ?? '';
?>
<html>
<head>
  <link href="booking.css" rel="stylesheet">
  <title>Booking Time</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }
	
		.mybtn{
		padding: 10px 20px;
    border: none;
    color: white;
    background-color: #008CBA;
    cursor: pointer;
	}
	
    .grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr); /* 5 equal columns */
      gap: 10px;
    }

    .slot-label {
      display: block;
      margin-bottom: 8px;
      padding: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #f9f9f9;
      cursor: pointer;
      font-weight: 500;
      text-align: center;   /* ✅ Centered text */
    }

    input[type="radio"]:checked + .slot-label {
      background-color: #f06292;
      color: white;
      border: 2px solid #c2185b;
    }

    .slot-input {
      display: none;
    }

   
	   /* 🔴 Error Message Styling */
    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      display: none;
    }
	/* Disabled (booked) slot */
	.slot-input:disabled + .slot-label {
	  background-color: #85979d; /* keep same base */
	  color: white;               /* lighter text */
	  border-color: #ddd;         /* softer border */
	  cursor: not-allowed;
	}
  </style>
  <style>
	.DZ-bt-buy-now,.DZ-theme-btn {
		  display: none !important;
		}
	
	</style>
</head>
<body style="background-color:#f8f8f8;">
  <?php include 'header.php'; ?>
  <?php
		include 'connection.php';
	  ?>
  
  <br><br>
    <div class="step-tabs">
    <div class="step " style="color:black;" >Service</a></div>
    <div class="step active" style="color:white;" >Time</a></div>
    <div class="step " style="color:black;" >Details</a></div>
    <div class="step " style="color:black;" >Payment</a></div>
    <div class="step">Done</div>
  </div>
  <?php
				//$sql="select * from appointment where app_date='".$today."' and app_time=";
				if(isset($_POST['btnTime']))
				{
					
						$_SESSION['selected_time']=$_POST['selected_time'];
						echo "<script>window.location.href = 'bookdetails.php';</script>";
						//echo"<h1>Record added</h1>";
					
				}
			?>
  <form class="form-box" method="POST"id="timeForm">
    <h2>Booking Time</h2>
  <div class="grid">
  <?php
    //include 'connection.php'; // your DB connection

    $selected_date = $_SESSION['app_date'] ?? ''; // appointment date
    $selected_time = $_POST['selected_time'] ?? '';
	$selected_employee = $_SESSION['emp_name'] ?? '';   // employee selected
	 
    // fetch already booked slots for that date
    $booked_slots = [];
    $sql = "SELECT app_time FROM appointment WHERE app_date = '$selected_date' AND employee = '$selected_employee'";
	//echo $sql;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $booked_slots[] = date("g:i a", strtotime($row['app_time']));
			
        }
    }
	//echo "<pre>";
	//print_r($booked_slots);
    // define working hours
    $start_time = strtotime("9:30 am");
    $end_time   = strtotime("7:00 pm");

    for ($time = $start_time; $time <= $end_time; $time += 30 * 60) {
        $formatted_time = date("g:i a", $time);
		//echo $formatted_time;
        $id = md5($formatted_time);
        $checked = ($selected_time === $formatted_time) ? 'checked' : '';
        
        // disable if already booked
        $disabled = in_array($formatted_time, $booked_slots) ? 'disabled' : '';

        echo "<div class='slot'>";
        echo "<input type='radio' name='selected_time' id='$id' value='$formatted_time' class='slot-input' $checked $disabled>";
        echo "<label for='$id' class='slot-label'>$formatted_time</label>";
        echo "</div>";
    }
  ?>
</div>

<!-- 🔴 Error message for time slots -->
    <div id="timeError" class="error-message">⚠ Please select a booking time before proceeding.</div>
    <div class="form-buttons">
       <a style="text-decoration:none;color:white;" href="booking.php" class="mybtn">Previous</a>
      <button type="submit" name="btnTime">Next</button>
    </div>
  </form>
  
  <?php include "footer.php" ?>
    <script>
    $(document).ready(function(){
      $("#timeForm").on("submit", function(e){
        if (!$("input[name='selected_time']:checked").val()) {
          e.preventDefault(); // stop form submit
          $("#timeError").fadeIn(); // show error
          $('html, body').animate({
            scrollTop: $("#timeError").offset().top - 100
          }, 200); // scroll to error
        } else {
          $("#timeError").hide();
        }
      });
    });
  </script>
</body>
</html>
