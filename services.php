<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:title" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:description" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:image" content="https://beautyzone.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	<!-- PAGE TITLE HERE -->
	<title>SOEZI Nail Hub </title>
	
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
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>

    <!-- header -->
    <?php include'header.php'?>
	<?php
		include 'connection.php';
	  ?>
			<div class="dlab-bnr-inr  overlay-primary " style="background-image:url(wallpaper/aboutbanner.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
				<br>
                    
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
		
			<!-- Why Chose Us -->
			<!-- Our Pricing -->
			<div class="section-full content-inner bg-blue-light" style="background-image:url(images/background/bg7.jpg); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Pricing</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Beauty shouldn’t come at a high price. We offer expert nail care with flawless results.
						   Stylish nails, stunning finish – always worth the price.</p>
					</div>
					<?php
						$str="select * from service";
						$results=mysqli_query($conn,$str);
					   ?>
					<div class="row">
					
						<?php while($row=mysqli_fetch_assoc($results)) {?>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<a href="booking.php"><h4 class="text-primary"><?php echo $row['s_name'];?></h4></a>
								</div>
								
								<div class="price-val align-self-center">
									<h3 class="text-secondry">₹ <?php echo $row['s_price'];?> </h3>
								</div>
							</div>
						</div>
						
						<?php } ?>
				
					</div>
				</div>
			</div>
			<!-- Our Pricing -->
			<!-- Our Professional Team -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Skilled, friendly, and passionate – our team ensures your nails always look flawless and stylish.</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="wallpaper/prof3.jpg" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Jeel Bhalodia</h6>
									<p class="m-b0">She brings nail art to life with passion and skill.
													From elegant to bold, her designs always stand out beautifully.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="wallpaper/prof2.jpg" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Vishwa Mehta</h6>
									<p class="m-b0">With expertise in nail shaping and care, she enhances natural beauty.
													Her focus is on precision, health, and long-lasting elegance.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="wallpaper/prof4.jpg" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Janvi Modi</h6>
									<p class="m-b0">She applies polish with perfection and helps you pick the right color.
													Every shade she suggests enhances your look and the occasion.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="wallpaper/prof1.jpg" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Vrushti Mehta</h6>
									<p class="m-b0">She excels in manicure and pedicure, focusing on detail and relaxation.
													Your hands and feet get the perfect blend of care and style.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Professional Team -->
			<!-- Testimonials Of Our Clients -->
			<div class="section-full content-inner" style="background-image:url(images/background/bg4.jpg); background-position: bottom; background-size:cover;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Happy clients are our biggest inspiration.
						   Read their experiences and see why they trust us with their nails.</p>
					</div>
					<div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust4.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Soezi never disappoints! The nail art is always on-trend, and the shaping is just perfect every time.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Priya G.</strong> <span class="testimonial-position">Housewife</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I absolutely love my nails! The team at Soezi is so professional and creative. Every visit feels like a little luxury.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Nikitha Patel</strong> <span class="testimonial-position">Model</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Soezi is my happy place! Whether it’s a simple manicure or detailed nail art, they always exceed expectations</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Vishwa N.</strong> <span class="testimonial-position">Ceo</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust7.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>The staff is so friendly and professional. My manicure lasted weeks and still looked fresh.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Archana Hitesh</strong> <span class="testimonial-position">Housewife</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust6.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I love how they suggest the right colors for every occasion. My nails always get compliments now!</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Chandni M.</strong> <span class="testimonial-position">Housewife</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust5.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>The pedicure was so relaxing, and my feet feel soft and beautiful. Can’t wait for my next appointment</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Dipali Bhavin</strong> <span class="testimonial-position">Photographer</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="wallpaper/cust1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Soezi is not just a nail hub, it’s an experience. The team makes me feel pampered and confident every single time.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Hetvi Patel</strong> <span class="testimonial-position">Bachelor</span> </div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- Testimonials Of Our Clients -->
			<!-- Our Latest Blog -->
			<div class="section-full content-inner overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Latest Blog</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Curious about the latest in nail fashion?
						   Dive into our blog and get inspired by new styles and ideas.</p>
					</div>
					<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"><img src="wallpaper/blog1.jpg" alt=""></div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">July 20, 2025</li>
											<li class="post-comment">5k</li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20">7 Minimalist ’90s Nail Designs Making a Comeback</h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html"><img src="wallpaper/blog2.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">January 1, 2025</li>
											<li class="post-comment">100k</li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20">Nail Care Secrets: Keep Your Nails Healthy & Strong</h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="15 Tips for Healthy, Strong Nails - The Best Nail Care Tips.php" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html"><img src="wallpaper/blog3.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">August 18, 2022</li>
											<li class="post-comment"><a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html">10k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html">How to Choose the Perfect Nail Color for Every Occasion</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html"><img src="wallpaper/blog4.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">May 16, 2025</li>
											<li class="post-comment"><a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html">122k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html">Step-by-Step Manicure & Pedicure at Home</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="https://beautyzone.dexignzone.com/xhtml/blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- Our Latest Blog -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <?php include 'footer2.php';?>