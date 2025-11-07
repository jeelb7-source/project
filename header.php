<?php session_start(); ?>

    <header class="site-header header mo-left style-1">
		<div class="top-bar bg-white text-black">
			<div class="container">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="logo-header">
						<a href="index.php" class="dez-page"><img src="images/logo.png" alt=""></a>
					</div>
					
					<div class="dlab-topbar-left">
						<div class="widget widget_getintuch">
                            <ul class="d-flex align-items-center">
                                <li><i class="ti-location-pin"></i><strong>Our Location</strong>Soezi Nail Hub, Vesu, Surat</li>
                                <li><i class="ti-mobile"></i><strong>Phone Number</strong>942 800 4220</li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg ">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix style-1">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index-11.php" class="dez-page"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="index.php">Home <i></i></a>
								
							</li>
							
							</li>
							<li><a href="javascript:void(0);">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
									
									<li><a href="about-us.php" class="dez-page">About Us</a></li>
									<li><a href="booking.php" class="dez-page">Booking</a></li>
									<li><a href="team.php" class="dez-page">Our Team</a></li>
									<li><a href="coming-soon.php" class="dez-page">Coming Soon</a></li>						
									<li><a href="contact.php" class="dez-page">Contact Us</a></li>
								</ul>
							</li>
							<li><a href="services.php">Our Service <i></i></a>
								
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<?php if(!isset($_SESSION['email'])) {?>
							<li><a href="login.php">Login<i ></i></a>/</li>
							<li><a href="register.php">Register <i></i></a>
							<?php } else {?>
								<li><a href="logout.php">Logout <i></i></a>
							<?php } ?>
		                </ul>
                     
                    </div>
					<div class="dz-nav-button">
						<a href="booking.php" class="site-button style-1 radius-no">Book Now</a>
					</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
