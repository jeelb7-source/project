<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	<!-- PAGE TITLE HERE -->
	
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/styleSwitcher.css">
	<link rel="stylesheet" type="text/css" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	
</head>
<style>
	.DZ-bt-buy-now,.DZ-theme-btn {
		  display: none !important;
		}
	
	</style>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>

    <!-- header -->
   <?php include 'header.php'?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="home.php">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<!-- right part start -->
					<div class="col-lg-4 col-md-6 d-flex">
                        <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
							<h4 class="m-b10">Quick Contact</h4>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-location-pin"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                        <p>SOEZI Nail Hub, near VR Mall</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-email"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>soezi.in</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-mobile"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                        <p>+91 9428004220</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dlab-social-icon dlab-social-icon-lg">
									<li><a target="_blank" href="https://www.facebook.com/itssoezi/" class="fa fa-facebook bg-primary"></a></li>
									<li><a target="_blank" href="https://www.instagram.com/itssoezi/?hl=en" class="fa fa-instagram bg-primary"></a></li>
									<li><a target="_blank" href="https://www.soezi.in/" class="fa fa-google-plus bg-primary"></a></li>
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
					<div class="col-lg-4 col-md-6 m-b30">
                        <div class="p-a30 bg-gray clearfix">
							<h4>Send Message Us</h4>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="https://beautyzone.dexignzone.com/xhtml/script/contact_smtp.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<div class="col-lg-4 col-md-12 d-flex m-b30">
						<iframe
						  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.9419874801985!2d72.75113531502414!3d21.145614785711965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396fbc62a7bc31c3%3A0xb0c5c8e77a2d73ca!2sVR%20Mall%2C%20Surat!5e0!3m2!1sen!2sin!4v1695640000000"
						  class="align-self-stretch"
						  style="border:0; width:100%; height:100%;"
						  allowfullscreen>
						</iframe>

					</div>
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include 'footer.php'?>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
</body>
</html>
