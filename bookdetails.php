<html>
	<head>
		<title>Bookings</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="booking.css"rel="stylesheet">
		<style>
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
	<?php include 'header.php'; 
	//echo "<pre>";
	//print_r($_SESSION);
	?>
	<br><br>
   <div class="step-tabs">
    <div class="step " style="color:black;" >Service</a></div>
    <div class="step " style="color:black;" >Time</a></div>
    <div class="step active" style="color:white;" >Details</a></div>
    <div class="step " style="color:black;" >Payment</a></div>
    <div class="step">Done</div>
  </div>
  
 <form class="form-box" method="post">
<div style="max-width: 800px; margin: 0 auto; font-family: Arial, sans-serif;">
  <h3>Details</h3>
  <p>Please provide your details in the form below to proceed with booking.</p>

  <div style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 24px;
    ">
    <div style="display: flex; flex-direction: column;">
        <label for="name" style="margin-bottom: 6px; font-weight: 500;">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo $_SESSION['name'];?>" required style="
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
        ">
      </div>

      <div style="display: flex; flex-direction: column;">
        <label for="phone" style="margin-bottom: 6px; font-weight: 500;">Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone No." value="<?php echo $_SESSION['user_contact'];?>" required style="
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
        ">
      </div>

      <div style="display: flex; flex-direction: column;">
        <label for="email" style="margin-bottom: 6px; font-weight: 500;">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>" placeholder="example@email.com" required style="
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
        ">
      </div>
</div>

    <!-- Hidden Inputs to carry forward booking info -->
    <input type="hidden" name="service" value="{{serviceName}}">
    <input type="hidden" name="staff" value="{{staffName}}">
    <input type="hidden" name="time" value="{{selectedTime}}">
    <input type="hidden" name="date" value="{{selectedDate}}">
    <input type="hidden" name="price" value="{{price}}">

    
  
    <div class="form-buttons">
      <a style="text-decoration:none;color:white;" href="booktime.php" class="mybtn">Previous</a>
      <a style="color:white;" href="bookpay.php"><button type="button">Next</button></a>
     </div>
    </form>
</div>

  </div>
  </div>
  </div>
</div>
  <?php include "footer.php"?>
</body>
</html>
