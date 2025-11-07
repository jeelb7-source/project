<?php include 'connection.php'; ?>
<?php include 'header.php'; ?>
<html>
<head>
	<title>Bookings</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="booking.css"rel="stylesheet">
		
  <style>
  :root{
    --green:#20b34f;   /* circle & tick */
    --card:#ffffff;    /* card bg */
    --border:#eee;     /* card border */
  }

  
 

  .check-icon{
    display:block;
    width:min(48vw,240px);
    height:auto;
    margin:0 auto 18px;
  }

  h2{
    margin:15px 0 0;
    font-size: clamp(26px, 4.5vw, 38px);
    font-weight: 700;
    color:#333;
  }

  .circle, .tick{
    fill:none;
    stroke:var(--green);
    stroke-width:6;
    stroke-linecap:round;
    stroke-linejoin:round;
  }
  .circle{
    stroke-dasharray:301.59;
    stroke-dashoffset:301.59;
    animation: draw .8s ease-out forwards;
  }
  .tick{
    stroke-dasharray:96;
    stroke-dashoffset:96;
    animation: draw .6s .55s ease-out forwards;
  }
  @keyframes draw { to { stroke-dashoffset: 0; } }
  </style>
  <style>
	.DZ-bt-buy-now,.DZ-theme-btn {
		  display: none !important;
		}
	
	</style>
</head>
<body  style="background-color:#f8f8f8;">
<br><br>
  <!-- Steps -->
  <div class="step-tabs">
    <div class="step " style="color:black;" >Service</a></div>
    <div class="step " style="color:black;" >Time</a></div>
    <div class="step " style="color:black;" >Details</a></div>
    <div class="step " style="color:black;" >Payment</a></div>
    <div class="step active" style="color:white;">Done</div>
  </div>

  <!-- Success Card -->
  <div class="form-box" role="status" aria-live="polite">
    <svg class="check-icon" viewBox="0 0 120 120" aria-hidden="true">
      <circle class="circle" cx="60" cy="60" r="48"/>
      <polyline class="tick" points="38,60 54,76 82,46"/>
    </svg>
    <h2><center>Successful</center></h2>
  </div>

<?php include 'footer.php'; ?>
</body>
</html>
