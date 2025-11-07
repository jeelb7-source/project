<?php include 'connection.php'; ?>


<html>
	<head>
		<title>Bookings</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="booking.css"rel="stylesheet">
		
	</head>
<body style="background-color:#f8f8f8;">

<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->

	<?php include 'header.php'; ?>
	<?php 
	if(!isset($_SESSION['email'])) 
	{
		header('location:login.php');
	}	
	if(!isset($_SESSION['emp_name']))
	{
			$_SESSION['emp_name']="";
	}
	if(!isset($_SESSION['cid']))
	{
		$_SESSION['cid']="";
	}
	if(!isset($_SESSION['app_date']))
	{
		$_SESSION['app_date']="";
	}
	

	
	
?>

	
	<br><br>
  <div class="step-tabs">
    <div class="step active" style="color:white;" >Service</a></div>
    <div class="step " style="color:black;" >Time</a></div>
    <div class="step " style="color:black;" >Details</a></div>
    <div class="step " style="color:black;" >Payment</a></div>
    <div class="step">Done</div>
  </div>
  <form method="POST" >
	<div class="form-box">
		<h3>Please select service:</h3>

		<div class="form-row">
		  <div>
			<label>Select category</label>
			<select id="category" name="cid" required>
				<?php
					$result= mysqli_query($conn,"select * from category");
						
					?>
					<option value=""  hidden selected>Select Category</option>
					<?php while($row=mysqli_fetch_array($result)){
						?>
						<option value="<?php echo $row['cid'];?>" <?php if($_SESSION['cid']== $row['cid']) { echo 'selected';}?>><?php echo $row['cname'];?></option>
						
					<?php
					}
					?>
					
			</select>
		  </div>
      <div>
					<label >Select Service</label><br>
						<select id="service12" name="service_id" required>
							<option value=""  hidden selected>Select Service</option>
							 <?php
							  // Preload services if category is already selected
							  if(isset($_SESSION['cid'])){
								$c_id = $_SESSION['cid'];
								$result = mysqli_query($conn,"SELECT * FROM service WHERE c_id='$c_id'");
								while($row=mysqli_fetch_array($result)){
								  $selected = (isset($_SESSION['service_id']) && $_SESSION['service_id'] == $row['s_id']) ? "selected" : "";
								  echo "<option value='{$row['s_id']}' $selected>{$row['s_name']}</option>";
								}
							  }
							?>
						</select>
					
      </div>
    </div>
	
	<div class="form-row">
      <div>
        <?php
				  // today’s date
				  $today = date("Y-m-d");
				  // previously selected date from session (if exists)
				  $savedDate = $_SESSION['app_date'] ?? '';
				?>
				<label>I'm available on or after</label>
				<input 
				  name="date" 
				  type="date" 
				  required 
				  min="<?php echo $today; ?>" 
				  value="<?php echo $savedDate; ?>">

      </div>
      
    </div>
    <div class="form-row">
      <div>
        <label>Employee</label>
        <select name="emp_name" required>
          <option value=""  hidden selected>If any</option>
          <option <?php if($_SESSION['emp_name']=="Jeel Bhalodia") { echo 'selected';}?>>Jeel Bhalodia</option>
          <option <?php if($_SESSION['emp_name']=="Vishwa Mehta") { echo 'selected';}?>>Vishwa Mehta</option>
          <option <?php if($_SESSION['emp_name']=="Janvi Modi") { echo 'selected';}?>>Janvi Modi</option>
          <option <?php if($_SESSION['emp_name']=="Vrushti Patel") { echo 'selected';}?>>Vrushti Patel</option>
        </select>
      </div>
    </div>

    <div class="form-buttons ">
    
      <button style="background-color:#ff4081;margin-left:880px;color:white" name="btnAdd" type="submit" >Next</button>
    </div>
	
  </div>
  </form>


<?php
				if(isset($_POST['btnAdd']))
				{
					
						$_SESSION['app_date']=$_POST['date'];
						$_SESSION['emp_name']=$_POST['emp_name'];
						$_SESSION['service_id']=$_POST['service_id'];
						$_SESSION['cid']=$_POST['cid'];
						
						/* echo "<pre>";
						print_r($_SESSION);
						die; */
						//$str="insert into appointment values(NULL,'".$_POST['date']."','".$_POST['name']."','".$_POST['desc']."')";
						//$results=mysqli_query($conn,$str);
						echo "<script>window.location.href = 'booktime.php';</script>";
						//echo"<h1>Record added</h1>";
					
				}
			?>
			
  <?php include "footer.php"?>
  <script>
						$(document).ready(function(){
							$('#category').change(function(){
								var c_id = $(this).val();
								//alert(c_id);
								// Reset dropdown while loading
								$('#service12').html('<option hidden selected>Loading…</option>');

								if(c_id != ""){
									$.ajax({
										url: 'get_service.php',
										type: 'POST',
										data: { c_id: c_id },
										success: function(response){
											// Insert returned <option> tags
											$('#service12').html(response);
										}
									});
								} else {
									$('#service12').html('<option hidden selected value="">Select Service</option>');
								}
							});
						});

					</script>
</body>
</html>
