<?php include 'connection.php'?>
<html lang="en">
<head>
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/styleSwitcher.css">
	<link rel="stylesheet" type="text/css" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	
</head>
<body id="bg">
<div class="page-wraper">

   <?php include 'header.php' ?> 
   <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url(images/gallery/nails/banner.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Register</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Register</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Create An Account</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" class="tab-pane active" method="POST">
									<h4 class="font-weight-700">PERSONAL INFORMATION</h4>
									<p class="font-weight-600">If you have an account with us, please log in.</p>
									<div class="form-group">
										<label class="font-weight-700">First Name</label>
										<input  required class="form-control" placeholder="First Name" type="text" name="name">
									</div>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL</label>
										<input required class="form-control" placeholder="Your Email Id" type="email" name="email">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Contact No</label>
										<input required class="form-control" placeholder="Contact No" type="tel" name="contact">
									</div>
									<div class="form-group">
										<label class="font-weight-700">PASSWORD</label>
										<input required class="form-control " placeholder="Type Password" type="password" name="password">
									</div>
									<div class="text-left">
										<button class="site-button button-lg radius-no outline outline-2" name="btnAdd" type="submit">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		
    </div>
	<?php
						//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
						if(isset($_POST['btnAdd']))
						{
							$str="insert into user values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['password']."')";
							mysqli_query($conn,$str);
							//echo "<script>window.location.href = 'login.php';</script>";
							echo "<script>
								alert('Register Successful!');
								window.location.href = 'login.php';
							  </script>";
						}
			?>
    <!-- Content END-->
   <?php include 'footer2.php'?>
  
</div>

</body>
</html>
