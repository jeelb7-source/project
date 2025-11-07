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

    .form-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .form-buttons button {
      padding: 12px 30px;
      font-size: 16px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .form-buttons button:hover {
      background-color: #0097a7;
    }
  </style>
</head>
<body style="background-color:#f8f8f8;">
  <?php include 'header.php'; ?>
  
  <br><br>
  <div class="step-tabs">
    <div class="step"><a style="color:black;" href="booking.php">Service</a></div>
    <div class="step active"><a style="color:white;" href="bookservice.php">Time</a></div>
    <div class="step"><a style="color:black;" href="bookdetails.php">Details</a></div>
    <div class="step"><a style="color:black;" href="bookpay.php">Payment</a></div>
    <div class="step">Done</div>
  </div>
  <?php
				if(isset($_POST['btnTime']))
				{
					
						$_SESSION['selected_time']=$_POST['selected_time'];
						echo "<script>window.location.href = 'bookdetails.php';</script>";
						//echo"<h1>Record added</h1>";
					
				}
			?>
  <form class="form-box" method="POST">
    <h2>Booking Time</h2>
    <div class="grid">
      <?php
        $start_time = strtotime("9:30 am");
        $end_time   = strtotime("7:00 pm");
        $selected_time = $_POST['selected_time'] ?? '';

        for ($time = $start_time; $time <= $end_time; $time += 30 * 60) {
          $formatted_time = date("g:i a", $time);
          $id = md5($formatted_time);
          $checked = ($selected_time === $formatted_time) ? 'checked' : '';

          echo "<div class='slot'>";
          echo "<input type='radio' name='selected_time' id='$id' value='$formatted_time' class='slot-input' $checked>";
          echo "<label for='$id' class='slot-label'>$formatted_time</label>";
          echo "</div>";
        }
      ?>
    </div>

    <div class="form-buttons">
      <button type="button"><a style="color:white;text-decoration:none;" href="booking.php">Previous</a></button>
      <button type="submit" name="btnTime">Next</button>
    </div>
  </form>
  
  <?php include "footer.php" ?>
</body>
</html>
