

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
 
    <link rel="stylesheet" type="text/css" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
</head>
<body id="bg">
<div class="page-wraper">
   <?php include 'header.php'?>
   <?php
//session_start();
include 'connection.php'; 

	if (isset($_POST['btnLogin'])) 
	{
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		$query = "SELECT * FROM user WHERE user_email = '$username' && user_password= '$password' ";
		//echo $query;
		$result = mysqli_query($conn, $query);

		if ($result && mysqli_num_rows($result) > 0) 
		{
				//echo "iff";die;
				$row = mysqli_fetch_assoc($result);
				$_SESSION['email'] = $row['user_email'];
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['name']  = $row['user_name'];
				$_SESSION['user_contact']  = $row['user_contact'];
				header("Location: index.php");
				exit;
		}
		else 
		{
			echo "<script>alert('Invalid Email or Password');</script>";
			header("Location: register.php");
		}
		//die;
	}

?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url(images/gallery/nails/banner.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Login</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Login</li>
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
						<h3 class="font-weight-700 m-t0 m-b20">Login Your Account</h3>
					</div>
				</div>
                <div>
					<div class="max-w500 m-auto m-b30">
						<div class="p-a30 border-1 seth">
							<div class="tab-content nav">
								<form id="login" class="tab-pane active col-12 p-a0 " method="POST">
									<h4 class="font-weight-700">LOGIN</h4>
									<p class="font-weight-600">If you have an account with us, please log in.</p>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input  required class="form-control" placeholder="Your Email Id" type="email" name="username">
									</div>
									<div class="form-group">
										<label class="font-weight-700">PASSWORD *</label>
										<input required class="form-control " placeholder="Type Password" type="password" name="password">
									</div>
									<div class="text-left">
										<button class="site-button m-r5 button-lg radius-no" name="btnLogin" type="submit">login</button>
										
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
	<?php include 'footer2.php'?>
    <button class="scroltop fa fa-chevron-up" ></button>
</div>

</body>
</html>
