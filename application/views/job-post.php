<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- meta tag -->
	<meta charset="utf-8" />
	<title>GetMeDesk - Post Job</title>
	<meta name="description" content="" />
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<!-- flaticon css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/fonts/flaticon.css" />
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/animate.css" />
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/owl.carousel.css" />
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/off-canvas.css" />
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/magnific-popup.css" />
	<!-- Main Menu css -->
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/rsmenu-main.css" />
	<!-- nivo slider CSS -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('assets') ?>/inc/custom-slider/css/nivo-slider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/inc/custom-slider/css/preview.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/globalStyle.css" />
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/rs-spacing.css" />
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/responsive.css" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7D54H61N3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-G7D54H61N3");
	</script>
</head>

<body class="home-blue-color">
	<div class="offwrap"></div>

	<!-- Preloader start here-->
	<div id="pre-load">
		<div id="loader" class="loader">
			<div class="loader-container">
				<div class="loader-icon">
					<img src="assets/images/fav.png" alt="Bizup Consulting Business" />
				</div>
			</div>
		</div>
	</div>
	<!--Preloader area end here -->

	<!-- Main content Start -->
	<div class="main-content">
		<!--Full width header Start-->
		<div class="full-width-header">
			<!--Header Start-->
			<header id="rs-header" class="rs-header style3">
				<!-- Topbar Area Start -->
				<div class="topbar-area style2">
					<div class="container custom">
						<div class="row-table">
							<div class="col-cell">
								<div class="header-logo">
									<div class="logo-area">
										<a href="index.html">
											<img class="normal-logo" src="assets/images/logo-dark2.png" alt="logo" />
											<img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-cell">
								<div class="header-quote">
									<ul class="rs-address-area">
										<li class="address-list">
											<div class="info-icon">
												<i class="flaticon-location"></i>
											</div>
											<div class="info-content">
												<div class="info-title"><a href="#">Location</a></div>
												<div class="info-des">
													Hinjewadi, Pune, MH 411045, IND
												</div>
											</div>
										</li>
										<li class="address-list">
											<div class="info-icon">
												<i class="flaticon-email"></i>
											</div>
											<div class="info-content">
												<div class="info-title"><a href="#">Mail us</a></div>
												<div class="info-des">
													<a href="mailto:info@getmedesk.com">info@getmedesk.com</a>
												</div>
											</div>
										</li>
										<li class="address-list">
											<div class="info-icon">
												<i class="flaticon-call"></i>
											</div>
											<div class="info-content">
												<div class="info-title"><a href="#">Call us</a></div>
												<div class="info-des">
													<a href="tel:(+191)8390380888">
														(+191) 8390 380 888</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Topbar Area End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container custom box-layout">
						<div class="row-table">
							<div class="col-cell header-logo">
								<div class="logo-area">
									<a href="index.html">
										<img src="assets/images/logo-dark.png" alt="logo" />
									</a>
								</div>
							</div>
							<div class="col-cell menu-responsive">
								<div class="rs-menu-area">
									<div class="main-menu">
										<nav class="rs-menu hidden-md">
											<ul class="nav-menu">
												<li><a href="<?= base_url('home') ?>">Home</a></li>
												<li><a href="<?= base_url('home') ?>#rs-about">About</a></li>
												<li><a href="<?= base_url('home') ?>#rs-services">Services</a></li>
												<li><a href="<?= base_url('home') ?>#rs-project">Clients</a></li>
												<li><a href="<?= base_url('home') ?>#rs-contact">Contact</a></li>
												<li><a href="<?= base_url('job_list') ?>">Jobs</a></li>
											</ul>
											<!-- //.nav-menu -->
										</nav>
									</div>
									<!-- //.main-menu -->
								</div>
							</div>
							<div class="col-cell rightbar-menu">
								<div class="expand-btn-inner">
									<ul>
										<li class="search-parent">
											<a class="hidden-xs rs-search" data-bs-toggle="modal"
												data-bs-target="#searchModal" href="#">
												<i class="flaticon-search"></i>
											</a>
										</li>
										<li class="humburger">
											<a id="nav-expander" class="nav-expander bar" href="#">
												<div class="bar">
													<span class="dot1"></span>
													<span class="dot2"></span>
													<span class="dot3"></span>
													<span class="dot4"></span>
													<span class="dot5"></span>
													<span class="dot6"></span>
													<span class="dot7"></span>
													<span class="dot8"></span>
													<span class="dot9"></span>
												</div>
											</a>
										</li>
									</ul>
									<div class="toolbar-sl-share">
										<ul>
											<li>
												<a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true"><i
														class="fa fa-linkedin"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
				<!-- Canvas Menu start -->
				<nav class="right_menu_togle hidden-md">
					<div class="close-btn">
						<a id="nav-close" class="nav-close">
							<div class="line">
								<span class="line1"></span>
								<span class="line2"></span>
							</div>
						</a>
					</div>
					<div class="canvas-logo">
						<a href="index.html"><img src="assets/images/logo.png" alt="logo" /></a>
					</div>
					<div class="offcanvas-text">
						<p>
							We denounce with righteous indig nation in and dislike men who
							are so beguiled and to demo realized, that they data forest see
							best business consulting wordpress theme 2021.
						</p>
					</div>
					<div class="media-img">
						<img src="assets/images/off2.jpg" alt="Images" />
					</div>
					<div class="canvas-contact">
						<div class="address-area">
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-location"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Address</h4>
									<em>05 kandi BR. New York</em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-email"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Email</h4>
									<em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-call"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Phone</h4>
									<em>+019988772</em>
								</div>
							</div>
						</div>
						<ul class="social">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- Canvas Menu end -->

				<!-- Canvas Mobile Menu start -->
				<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					<div class="close-btn">
						<a id="nav-close2" class="nav-close">
							<div class="line">
								<span class="line1"></span>
								<span class="line2"></span>
							</div>
						</a>
					</div>
					<ul class="nav-menu onepage-menu onpage-ul">
						<li class="current-menu-item"><a href="#rs-header">Home</a></li>
						<li><a href="#rs-about">About</a></li>
						<li><a href="#rs-services">Services</a></li>
						<li><a href="#rs-project">Portfolios</a></li>
						<li><a href="#rs-blog">Blog</a></li>
						<li><a href="#rs-contact">Contact</a></li>
					</ul>
					<!-- //.nav-menu -->
					<div class="canvas-contact">
						<div class="address-area">
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-location"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Address</h4>
									<em>05 kandi BR. New York</em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-email"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Email</h4>
									<em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-call"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Phone</h4>
									<em>+019988772</em>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- Canvas Mobile Menu end -->
			</header>
			<!--Header End-->
		</div>
		<!--Full width header End-->
	</div>
	<!-- Main content End -->

	<section class="job-post ptb-100">
		<div class="container" style="max-width: 1172px">
			<div class="card job-post-card">
				<h3>Job Information</h3>
				<form action="<?php echo base_url('create_jobs') ?>" method="POST">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Job title*</label>
								<input class="form-control" type="text" name="title" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Job Description*</label>
								<textarea name="description" class="form-control" rows="5"></textarea>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Category*</label>
								<select class="form-select category-select" name="category">
									<option>UX/UI Designer</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Software Developer</option>
									<option>SEO</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Role</label>
								<select class="form-select job-select" name="role">
									<option>Developer</option>
									<option>Support</option>
									<option>Watchmen</option>

								</select>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Job Types*</label>
								<select name="job_type" class="form-select job-select">
									<option>Full Time</option>
									<option>Part Time</option>
									<option>Contract</option>
									<option>Internship</option>
									<option>Office</option>
								</select>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Application Deadline</label>
								<div class="input-group date" id="datetimepicker">
									<input type="date" class="form-control" name="deadline" />
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Minimum Experience</label>
								<input class="form-control" type="number" name="min_experience"
									placeholder="In Years" />
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Maximum Experience</label>
								<input class="form-control" type="number" name="max_experience"
									placeholder="In Years" />
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Minimum Salary</label>
								<input class="form-control" type="number" name="min_salary" placeholder="₹" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Maximum Salary</label>
								<input class="form-control" type="number" name="max_salary" placeholder="₹" />
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Qualification</label>
								<select name="qualification" class="form-select job-select">
									<option>Graduate</option>
									<option>Post Graduate</option>
									<option>Diploma</option>

								</select>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Skills</label>
								<input class="form-control" type="text" name="skills" placeholder="Skills" />
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-select job-select" name="gender">
									<option>Any</option>
									<option>Male</option>
									<option>Female</option>
									<option>LGBTQ+96</option>

								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-6">
							<div class="form-group">
								<label>Short Description</label>
								<input class="form-control" type="text" name="short_desc"
									placeholder="Requirement Descriptions" />
							</div>
						</div>


						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Number of Openings</label>
								<input class="form-control" type="number" name="no_of_openings" />
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Notice Period</label>
								<input class="form-control" type="number" name="notice_period"
									placeholder="In Months" />
							</div>
						</div>


					</div>


					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Company Name</label>
								<select name="company_id" class="form-select job-select" id="exampleFormControlSelect1">
									<?php

									$get = $this->User_model->get_data('company');
									foreach ($get as $o) {
										?>
										<option value="<?php echo $o->id ?>">
											<?php echo $o->company_name; ?>
										</option>
										<?php
									}
									?>
								</select>

							</div>
						</div>



						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Work Mode</label>
								<select class="form-select salary-select" name="work_mode">
									<option>On Site</option>
									<option>Remote</option>
									<option>Hybrid</option>

								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Work Location</label>
								<input class="form-control" type="text" name="location" />
							</div>
						</div>


						<!-- <div class="col-lg-12">
								<div class="form-group">
									<label>Company Description*</label>
									<textarea
										name="message"
										class="form-control"
										rows="5"
									></textarea>
								</div>
							</div> -->

						<!-- <div class="col-lg-12">
								<div class="choose-img">
									<p>Company Logo (Optional)</p>
									<label>Select image:</label>
									<input type="file" id="img" name="company_logo" accept="image/*" />
									<p>Maximum file size: 5 MB</p>
								</div>
							</div>
						</div> -->

						<!-- <h3>Recruiter Information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" name="Name" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" />
								</div>
							</div>

							

						</div> -->
						<div class="col-lg-12 d-flex justify-content-center">
							<button class="default-btn">Post a Job</button>
						</div>
				</form>
			</div>
		</div>
	</section>

	<!-- Footer Start -->
	<footer id="rs-footer" class="rs-footer style1 footer-home3-style">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
						<div class="footer-logo mb-40">
							<a href="index.html"><img src="assets/images/logo-dark3.png" alt="" /></a>
						</div>
						<div class="textwidget white-color pb-40">
							<p>
								GetMeDesk is one of the leading human resources and
								recruitment services company based out of Pune. We specialize
								in IT recruitments.
							</p>
						</div>
						<ul class="footer-social md-mb-30">
							<li>
								<a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true"
									target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
						<h3 class="footer-title">Our Services</h3>
						<ul class="site-map">
							<li><a href="business-planning.html">Permanent Hiring</a></li>
							<li><a href="tax-strategy.html">Contractual Hiring</a></li>
							<li><a href="financial-advices.html">Temporary Hiring</a></li>
							<li><a href="insurance-strategy.html">Bulk Recruitement</a></li>
							<li><a href="manage-investment.html">Execuitive Search</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
						<h3 class="footer-title">Contact Info</h3>
						<ul class="address-widget">
							<li>
								<i class="flaticon-location"></i>
								<div class="desc">
									601, White Square, Hinjawadi<br />
									Pune, India
								</div>
							</li>
							<li>
								<i class="flaticon-call"></i>
								<div class="desc">
									<a href="tel:(+91)88390380888">(+91)883 90380 888</a>
								</div>
							</li>
							<li>
								<i class="flaticon-email"></i>
								<div class="desc">
									<a href="mailto:info@getmedesk.com">info@getmedesk.com</a>
								</div>
							</li>
							<li>
								<i class="flaticon-clock-1"></i>
								<div class="desc">Office Hours: 10AM - 6PM</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12">
						<h3 class="footer-title">Newsletter</h3>
						<p class="widget-desc white-color">
							Stay up to update with our latest news and products.
						</p>
						<p>
							<input type="email" name="EMAIL" placeholder="Your email address" required="" />
							<input type="submit" value="Subscribe Now" />
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row y-middle">
					<div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
						<ul class="copy-right-menu">
							<li><a href="#rs-header">Home</a></li>
							<li><a href="#rs-about">About</a></li>
							<li><a href="#rs-contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="copyright text-lg-start text-center">
							<p>
								© 2022 GetMeDesk - A part of ScaleFull Technologies LLP. All
								Rights Reserved.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- start scrollUp  -->
	<div id="scrollUp" class="blue-color">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- End scrollUp  -->

	<!-- Search Modal Start -->
	<div class="modal fade search-modal" id="searchModal" tabindex="-1">
		<button type="button" class="close" data-bs-dismiss="modal">
			<span class="flaticon-cross"></span>
		</button>
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="search-block clearfix">
					<form>
						<div class="form-group">
							<input class="form-control" placeholder="Search Here..." type="text" />
							<button type="submit" value="Search">
								<i class="flaticon-search"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Search Modal End -->

	<!-- modernizr js -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>
	<!-- jquery latest version -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap v4.4.1 js -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!-- op nav js -->
	<script src="assets/js/jquery.nav.js"></script>
	<!-- isotope.pkgd.min js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- owl.carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.min.js"></script>
	<!-- Skill bar js -->
	<script src="assets/js/skill.bars.jquery.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- waypoints.min js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- counterup.min js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- magnific popup js -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Nivo slider js -->
	<script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
	<!-- pointer js -->
	<script src="assets/js/pointer.js"></script>
	<!-- contact form js -->
	<script src="assets/js/contact.form.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
</body>

</html>