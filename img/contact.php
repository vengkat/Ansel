<!DOCTYPE html>
<html lang="en">
<head>
	<title>ANSEL</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<?php require(__DIR__ . '/wp-load.php');?>
	<!-- header section -->
	<?php include('header.html'); ?>
	<!-- header section end-->


	<!-- Navigation section  -->
	<?php include('navigation.html'); ?>
	<!-- Navigation section end -->

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

	<?php if (isset($_POST['submit'])) { 

		$name = $_POST['name'];
		$to = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$message = 'Hello Ansel, You have a message from ' . $name . ' . Below is the message. ' . $message;

		//$to = 'v.vengkat@gmail.com';
		//$subject = 'Test mail';
		//$message = 'Sending mail from wordpress';

		//$email = 'v.vengkat@gmail.com';
		$email = 'contact@anselec.com';
		$headers = 'From: '. $email . "\r\n" .
		'Reply-To: ' . $email . "\r\n";		  
		$sent = wp_mail($email, $subject, strip_tags($message), $headers);	
		if($sent)   {
			//$message = 'Dear ' . $name . '\r\n Thanks for the message. We will get back to you soon.\r\nThanks,\r\n Ansel';
			$message = file_get_contents('./signature.html');
			$headers = 'From: '. $email . "\r\n" .
			'Reply-To: ' . $to . "\r\n" .
			'Content-Type: text/html; charset=UTF-8';
			$sent = wp_mail($to, 'Ansel Acknowledgement', $message, $headers);	
		}
		   
	?>
		
		<p>Your message has been sent </p>
	<?php } else { ?>
		<!-- Courses section -->
		<section class="contact-page spad pt-0">
			<div class="container">
				<div class="map-section">
					<div class="contact-info-warp">
						<div class="contact-info">
							<h4>Address</h4>
							<p>10, 2nd Floor, JP Business Centre, 87, London Road, LEICESTER-LE11DJ, UK</p>
						</div>
						<div class="contact-info">
							<h4>Phone</h4>
							<p>(+44) 7741112323</p>							
						</div>
						<div class="contact-info">
							<h4>Email</h4>
							<p>contact@anselec.com</p>
						</div>
						<div class="contact-info">
							<h4>Working time</h4>
							<p>Monday - Friday: 08 AM - 06 PM</p>
						</div>
					</div>
					<!-- Google map -->
					<div class="map" id="map-canvas"></div>
				</div>
				<div class="row spad"></div>
				<div class="map-section">
					<div class="contact-info-warp">
						<div class="contact-info">
							<h4>Address</h4>
							<p>4, Kesava Nagar, Tiruppapuliyur, Cuddalore, Tamilnadu, India</p>
						</div>
						<div class="contact-info">
							<h4>Phone</h4>
							<p>04142 226256 / 9944101181 / 7539904991</p>
						</div>
						<div class="contact-info">
							<h4>Email</h4>
							<p>contact@anselec.com</p>
						</div>
						<div class="contact-info">
							<h4>Working time</h4>
							<p>Monday - Friday: 08 AM - 06 PM</p>
						</div>
					</div>
					<!-- Google map -->
					<div class="map" id="map-canvas-1"></div>
				</div>
				<div class="contact-form spad pb-0">
					<div class="section-title text-center">
						<h3>GET IN TOUCH</h3>
						<p>Contact us to know more</p>
					</div>
					<form class="comment-form --contact" method="POST">
						<div class="row">
							<div class="col-lg-4">
								<input type="text" id="name" name="name" placeholder="Your Name">
							</div>
							<div class="col-lg-4">
								<input type="text" id="email" name="email" placeholder="Your Email">
							</div>
							<div class="col-lg-4">
								<input type="text" id="subject" name="subject" placeholder="Subject">
							</div>
							<div class="col-lg-12">
								<textarea id="message" name="message" placeholder="Message"></textarea>
								<div class="text-center">
									<!-- <input type="submit" class="site-btn"></input> -->
									<input type="submit" name="submit" class="site-btn">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- Courses section end-->
	<?php } ?>

	

	<!-- Footer section -->
	<?php include('footer.html'); ?>
	<!-- Footer section end-->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeaIKyAPFXWncmObdLNsBFBZKEc4rtNWM"></script>
	<script src="js/map.js"></script>
	
</body>
</html>