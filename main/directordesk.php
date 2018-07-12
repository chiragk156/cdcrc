<?php 
include "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CDCRC | IIT Ropar</title>
<link rel="shortcut icon" href="images/iitlogo.png" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CDCRC Website">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/iitlogo.png" alt="" height="50" width="50">
					<span>IIT Ropar</span>
					<div class="cdcrc"><h3 style="color: #FFFFFF;">Career Development and<br>Corporate Relations Centre</h3></div>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 50px;">Home</a>
                            <div class="dropdown-menu" style="background: #21618C; color: #FFFFFF">
                                <a class="dropdown-item" href="index.php">Home</a>
                                <a class="dropdown-item" href="http://www.iitrpr.ac.in/TP/index.php/msg-from-director/">Role of CDCRC</a>
                                <a class="dropdown-item" href="http://www.iitrpr.ac.in/TP/index.php/msg-from-director/">Structure of CDCRC</a>
                            </div>
                        </li>
						<li class="main_nav_item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">For Companies</a>
                            <div class="dropdown-menu" style="background: #21618C; color: #FFFFFF">
                                <a class="dropdown-item" href="tnp.php">Training & Placement</a>
                                <a class="dropdown-item" href="corporate.php">Corporate Relations</a>
                            </div>
						</li>
						<li class="main_nav_item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">For Students</a>
                            <div class="dropdown-menu" style="background: #21618C; color: #FFFFFF">
                                <a class="dropdown-item" href="professional.php">Professional Development</a>
                                <a class="dropdown-item" href="tnp.php">Training & Placement</a>
                            </div>
						</li>
						<li class="main_nav_item"><a href="cdcrcteam.php" class="nav-link">CDCRC Team</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<span>
				<a target="_blank" href="https://in.linkedin.com/company/placementcelliitropar" style="color: #FFFFFF; margin-right: 20px;" onmouseover="this.style.color='#FFD800'" onmouseout="this.style.color='#FFFFFF'"><i class="fab fa-linkedin-in"></i></a>
				<a target="_blank" href="https://www.facebook.com/Career-Development-Corporate-Relations-Center-IIT-Ropar-169217773601805/" style="color: #FFFFFF; margin-right: 20px;" onmouseover="this.style.color='#FFD800'" onmouseout="this.style.color='#FFFFFF'"><i class="fab fa-facebook-f"></i></a>
				<a href="#" style="color: #FFFFFF; margin-right: 20px;" onmouseover="this.style.color='#FFD800'" onmouseout="this.style.color='#FFFFFF'"><i class="fab fa-twitter"></i></a>
				<a href="#" style="color: #FFFFFF;" onmouseover="this.style.color='#FFD800'" onmouseout="this.style.color='#FFFFFF'"><i class="fab fa-youtube"></i></a>
			</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
                                    <li class="menu_item menu_mm dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 50px;">Home</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php">Home</a>
                                <a class="dropdown-item" href="role.php">Role of CDCRC</a>
                                <a class="dropdown-item" href="structure.php">Structure of CDCRC</a>
                            </div>
                        </li>
						<li class="menu_item menu_mm dropdown">
							<a href="#" class="dropdown-toggle" id="navbardrop" data-toggle="dropdown">For Companies</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="tnp.php">Training & Placement</a>
                                <a class="dropdown-item" href="corporate.php">Corporate Relations</a>
                            </div>
						</li>
						<li class="menu_item menu_mm dropdown">
							<a href="#" class=" dropdown-toggle" id="navbardrop" data-toggle="dropdown">For Students</a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="professional.php">Professional Development</a>
                                <a class="dropdown-item" href="tnp.php">Training & Placement</a>
                            </div>
						</li>
						<li class="menu_item menu_mm"><a href="cdcrcteam.php" class="nav-link">CDCRC Team</a></li>




					
				</ul>

                        <!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<!--<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>-->
						<li class="menu_social_item menu_mm"><a target="_blank" href="https://in.linkedin.com/company/placementcelliitropar"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a target="_blank" href="https://www.youtube.com/channel/UCvAgHSpVV8yfmu75OFBbomA"><i class="fab fa-youtube"></i></a></li>
						<li class="menu_social_item menu_mm"><a target="_blank" href="https://www.facebook.com/Career-Development-Corporate-Relations-Center-IIT-Ropar-169217773601805/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a target="_blank" href=""><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

			</div>

		</div>
		<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
	</div>


	
	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/directorsir.jpg)"></div>
		</div>
		<div class="container" style="margin-top: 100px;">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>From The Director's Desk</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The Indian Institute of Technology Ropar is one of the eight new IITs set up by the Government of India
									in the year 2008 with a view to expand access to high quality technical education for young bright minds
									of India. The first batch of students graduated with a B.Tech. degree in July 2012. In the last ten years,
									IIT Ropar has established the required infrastructure, including our permanent campus spread over 500
									acres on the bank of river Sutlej.
									Our highly qualified faculty members with vast international exposure and state-of-the-art laboratories
									for the hands-on experience, ensures that our students receive the best technical education. At IIT
									Ropar, students are exposed to the most modern and up-to-date curriculum in accordance with
									Washington Accord, contemporary developments in various disciplines of engineering/science and
									internship experience in both national &amp; international companies/institutes of repute. In addition, we
									have recently established Career Development and Corporate Relations Centre (CDCRC) to take care of
									the professional development of students by providing them in·house training in business
									communications, soft-skills, guiding them towards best national and international internships and jobs
									available and acts as a communication channel between Industry and IIT Ropar to have result-oriented
									Industry-Academia collaboration.
									I whole-heartedly welcome your organization to IIT Ropar campus for recruitment of our B. Tech,
									M.Tech, M.S. (Research), M.Sc. and Ph.D. graduates. I am sure you will be able to recognize the
									availability of choice of bright and talented engineers with requisite skills that can solve your challenging
									engineering problems and add value to your organization.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/directorsir1.jpg" alt="">
										</div>
										<div class="testimonial_name">Prof. Sarit K. Das</div>
										<div class="testimonial_title">Director, IIT Ropar</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/iitlogo.png" alt="logo" height="50" width="50">
								<span>IIT Ropar</span>
							</div>
						</div>

						<!-- <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p> -->

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="#">For Students</a></li>
								<li class="footer_list_item"><a href="#">For Recruiters</a></li>
								<li class="footer_list_item"><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Useful Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Rupnagar, Punjab
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+91-1234567890
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@iitrpr.ac.in
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>
