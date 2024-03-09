<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="assets/ico/favicon.png">
	<!-- Bootstrap CSS -->
	<link href="../css/cssreset.css" rel="stylesheet" />
	<link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/main.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/cbdf2b0f0e.js" crossorigin="anonymous"></script>
	<title>TRAIL - Contact Us</title>
</head>

<body>
	<section>
		<header>
			<!--- Navbar --->
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand text-white" href="index.php"><i class="fas fa-lg fa-shipping-fast mr-2"></i>TRAIL Logistics</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="nvbCollapse">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item pl-1">
								<a class="nav-link" href="../index.php"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
							</li>
							<li class="nav-item pl-1">
								<a class="nav-link" href="services.php"><i class="fa fa-th-list fa-fw mr-1"></i>Services</a>
							</li>
							<li class="nav-item pl-1">
								<a class="nav-link" href="about.php"><i class="fa fa-info-circle fa-fw mr-1"></i>About Us</a>
							</li>
							<li class="nav-item active pl-1">
								<a class="nav-link" href="contact.php"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
							</li>
							<li class="nav-item bg-primary pl-1">
								<a class="nav-link" href="tracking.php"><i class="fas fa-route fa-fw mr-1"></i>Track & Trace</a>
							</li>
							<li class="nav-item bg-danger pl-1">
								<a class="nav-link" href="../admin/login-exec.php"><i class="fas fa-user fa-fw mr-1"></i>Admin</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!--# Navbar #-->
		</header>
	</section>
	<section class="page-title-secttion">
		<div class="container">
			<div class="page-header">
				<h1>Contact</h1>
			</div>
			<ol class="breadcrumb justify-content-center">
				<li><a href="../index.php">Home </a></li>
				<li class="active">/ Contact</li>
			</ol>
		</div>
	</section>
	<section>
		<div class="container my-3">
			<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<section class="contact-wrap section-padding">
		<div class="container">
			<div class="office-locations">
				<h2>Location</h2>
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="office-address">
							<h3>Head Office</h3>
							<address>
								<span>384 Maple Circle</span>
								<span>Simi Valley Navada 47489</span>
								<br>
								<span>T.(554) 616 9926</span>
								<span>M.(554) 616 9926</span>
								<span>F.(554) 616 9926</span>
								<a href="#">example@yahoo.com</a>

							</address>
						</div>
					</div><!-- /.col -->

					<!-- /.col -->

					<!-- /.col -->

					<!-- /.col -->
				</div><!-- /.row -->

				<!-- /.col -->

				<!-- /.col -->

				<!-- /.col -->

				<!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.office-locations -->

		<div class="send-feedback">
			<h2>Send us your feedback</h2>
			<form id="contactForm" action="sendemail.php" method="POST">
				<div class="row">
					<div class="col-sm-4 col-12">
						<div class="form-group">
							<label for="name">Name*</label>
							<input id="name" name="name" type="text" class="form-control" required="" placeholder="">
						</div>
					</div><!-- /.col -->
					<div class="col-sm-4 col-12">
						<div class="form-group">
							<label for="email">E-mail*</label>
							<input id="email" name="email" type="email" class="form-control" required="" placeholder="">
						</div>
					</div><!-- /.col -->
					<!-- /.col -->
				</div><!-- /.row -->
				<div class="row">
					<!-- /.col -->
					<!-- /.col -->
					<div class="col-sm-4 col-12">
						<div class="form-group">
							<label for="country">Country</label>
							<input id="country" name="country" type="text" class="form-control" placeholder="">
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label>Message</label>
							<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->

				<div class="form-group submit-btn">
					<button type="submit" class="btn btn-primary">Send feedback</button>
				</div>
			</form>
		</div><!-- /.send-feedback -->
		</div><!-- /.container -->
	</section>
	<section class="footer-widget-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer-widget">
						<h3>About</h3>
						<p>TRAIL Logistics is a representative logistics operator providing full range of service in the sphere of customs cargo and
							transportation worldwide.
						</p>
						<br>

						<address>
							<strong>+1 (661) 769-6-179</strong>
							<br>
							<a href="#">customerservice@trail.com</a>
							<br>
							<br>
							<span class="map-marker">384 Maple Circle<br>Simi Valley Nevada, 24757</span>
						</address>


					</div><!-- /.footer-widget -->
				</div><!-- /.col-sm-4 -->

				<div class="col-sm-4">
					<div class="footer-widget">
						<h3>Useful Links</h3>
						<div class="row">
							<div class="col-sm-6">
								<ul class="quick-links">
									<li><a href="about.php">About us</a></li>
									
									<li><a href="contact.php">Contact</a></li>
									
									<li><a href="#">Staff</a></li>
									
									<li><a href="#">Support</a></li>
								</ul>
							</div>
							
						</div>
					</div><!-- /.footer-widget -->
				</div><!-- /.col-md-4 -->

				<div class="col-sm-4">
					<div class="footer-widget">
						<h3>Stay in Touch</h3>
						<p>Enter your email address to receive news &amp; offers from us</p>

						<form class="newsletter-form">
							<div class="form-group">
								<label class="sr-only" for="InputEmail1">Email address</label>
								<input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
								<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
							</div>
						</form>
						<ul class="social-links list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div><!-- /.footer-widget -->
				</div><!-- /.col-md-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<footer class="copyright-section">
		<div class="container">
			<div class="footer-menu">
				<ul>
					<li><a href="#">Privacy &amp; Cookies</a></li>
					<li><a href="#">Terms &amp; Conditions</a></li>
					<li><a href="#">Accessibility</a></li>
				</ul>
			</div>

			<div class="copyright-info">
				<span>Copyright © 2024 TRAIL. All Rights Reserved. Designed by <a href="#">E.M.T</a><br></span>
			</div>
		</div><!-- /.container -->
	</footer>

	<!--- Footer --->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>