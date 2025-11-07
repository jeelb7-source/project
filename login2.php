<?php
			session_start();
			$conn=mysqli_connect('127.0.0.1','root','','project') or die('DB NOT CONNECTED');
?>
<?php 
				if (isset($_POST['btnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepared statement
    $stmt = $conn->prepare("SELECT user_name, user_email, user_password FROM user WHERE user_email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Compare plain text password (since your DB is not hashed yet)
        if ($password === $row['user_password']) {
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['name']  = $row['user_name'];

            header("Location: home.php");
            exit;
        } else {
            echo "<script>alert('Invalid Email or Password');</script>";
        }
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
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
<div id="loading-area"></div>
   <?php include 'header.php'?>
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
							<li><a href="home.php">Home</a></li>
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
										<button class="site-button m-r5 button-lg radius-no">login</button>
										<a data-toggle="tab" href="login.html#forgot-password" class="m-l5"><i class="fa fa-unlock-alt"></i> Forgot Password</a> 
									</div>
								</form>
								<form id="forgot-password" class="tab-pane fade  col-12 p-a0">
									<h4 class="font-weight-700">FORGET PASSWORD ?</h4>
									<p class="font-weight-600">We will send you an email to reset your password. </p>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
									</div>
									<div class="text-left"> 
										<a class="site-button outline gray button-lg radius-no" data-toggle="tab" href="login.html#login">Back</a>
										<button class="site-button pull-right button-lg radius-no">Submit</button>
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
