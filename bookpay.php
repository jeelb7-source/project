<?php include 'connection.php';
 ?>
<html>
<head>
  <link href="booking.css" rel="stylesheet">
  <title>Payment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fbe1ee;
      padding: 20px;
    }

 
    .payment-info {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      padding: 20px;
      background: #f9f9f9;
      border: 2px dashed #f06292;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .form-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .form-buttons button {
      padding: 12px 30px;
      font-size: 16px;
      background-color: #00bcd4;
      color: white;
      border: none;
      
      cursor: pointer;
    }

   
	.mybtn{
		padding: 10px 20px;
    border: none;
    color: white;
    background-color: #008CBA;
    cursor: pointer;
	}
  </style>
  
</head>
<body style="background-color:#f8f8f8;">
   <?php include 'header.php'; ?>
  <br><br>
  <div class="step-tabs">
    <div class="step " style="color:black;" >Service</a></div>
    <div class="step " style="color:black;" >Time</a></div>
    <div class="step " style="color:black;" >Details</a></div>
    <div class="step active" style="color:white;" >Payment</a></div>
    <div class="step">Done</div>
  </div>

  <form class="form-box" method="POST" >
    <h2><center>Payment</center></h2>
	
    <div class="payment-info">
     <?php
/* 	 echo "<pre>";
	 print_r($_SESSION); */
						$str = "SELECT * FROM service WHERE s_id=" . $_SESSION['service_id'];
						//echo $str;
						$results=mysqli_query($conn,$str);
						$row=mysqli_fetch_assoc($results);
					   ?>
	  <?php if (isset($_SESSION['service_id'])) { ?>
       
		You selected to book <span style="color:#f06292;"><?php echo $row['s_name']; ?></span> 
		
        by <span style="color:#f06292;"><?php echo $_SESSION['emp_name']; ?></span> 
        at <span style="color:#f06292;"><?php echo $_SESSION['selected_time']; ?></span> 
        on <span style="color:#f06292;"><?php echo $_SESSION['app_date']; ?></span>.
		Price for the service is <span style="color:#f06292;">₹ <?php echo $row['s_price'];?></span>.
		
		<?php } else { ?>
        No booking details found.
      <?php } ?>
    </div>
	<center> <span style="color:#f06292;">Cash on Service</span>.<br>
      Please pay directly at the salon after your service.</center>
    <div class="form-buttons">
      
        <a style="text-decoration:none;color:white;" href="bookdetails.php" class="mybtn">Previous</a>
      
      <button type="submit" name="btnAdd" >Confirm Booking</button>
    </div>
  </form>
	<?php
						if(isset($_POST['btnAdd']))
						{
							//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
							$user_id = $_SESSION['user_id'];   // ✅ user_id from session
							$app_date = $_SESSION['app_date'];
							$emp_name = $_SESSION['emp_name'];
							$service_id = $_SESSION['service_id']; 
							
							//$selected_time = $_SESSION['selected_time'];
							$selected_time = date("H:i:s", strtotime($_SESSION['selected_time'])); 
							$sql = "INSERT INTO appointment VALUES (NULL, '$user_id','$app_date','$emp_name', '$selected_time','$today', '$service_id', 'Not Paid')";
							mysqli_query($conn,$sql);	
							echo "<script>window.location.href = 'done.php';</script>";
								//echo $sql;
							//die;
						}
			?>

  <?php include "footer.php"; ?>
</body>
</html>
