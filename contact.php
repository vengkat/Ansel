<!-- header section -->
<?php include('header.html'); ?>
	<!-- header section end-->
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>	

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
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info-warp">
								<div class="contact-info">
									<h4>Address</h4>
									<p>10, 2nd Floor, JP Business Centre, 87, London Road, LEICESTER-LE2 0PF, UK</p>
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
						</div>
						<div class="col-md-8">
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.7098510713813!2d-1.124353334026206!3d52.629087235891156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877613cbe6a81f3%3A0x6b12a2a20a0bf223!2sLondon+Rd%2C+Leicester%2C+LE2+0PF%2C+UK!5e0!3m2!1sen!2sin!4v1508161889560" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen=""> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.711013229893!2d-1.12510768500006!3d52.629066235894136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877613cb723e481%3A0x439dda947aec3a1f!2sJP%20Business%20Centre%2C%2087%20London%20Rd%2C%20Leicester%20LE2%200PF%2C%20UK!5e0!3m2!1sen!2sin!4v1569129169865!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</iframe>
						</div>
					</div>
					
					<!-- Google map -->
					<!-- <div class="map" id="map-canvas"></div> -->
					<!-- <div class="map">
						
					</div> -->
				</div>
				<div class="row spad" style="margin-top: 80px;"></div>
				<div class="map-section">
					<div class="row">
						<div class="col-md-4">
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
						</div>
						<div class="col-md-8">
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.7098510713813!2d-1.124353334026206!3d52.629087235891156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877613cbe6a81f3%3A0x6b12a2a20a0bf223!4+Kesava+Nagar%2C+Tiruppapuliyur+Cuddalore+0QR%2C+Tamilnadu+India!5e0!3m2!1sen!2sin!4v1508161889560" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen=""> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1953.1386017328355!2d79.75001750788091!3d11.74551129791713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a54987cdc0942cb%3A0x4dc5767817a21a5!2z4K6y4K6f4K-N4K6a4K-B4K6u4K6_IOCuh-Cun-Cuv-Cur-CuvuCuquCvjeCuquCuruCvjSDgrprgrqrgr43grrPgr4jgrq_grrDgr43grrjgr40gQnkgT3JkZXI!5e0!3m2!1sen!2sin!4v1569067814270!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen="">
								</iframe>
							</iframe>
						</div>
					</div>
					<!-- Google map -->
					<!-- <div class="map" id="map-canvas-1"></div> -->
				</div>
				<div class="contact-form spad pb-0">
					<div class="section-title text-center">
						<h3>GET IN TOUCH</h3>
						<p>Contact us to know more</p>
					</div>
					<form class="comment-form --contact" method="POST">
						<div class="row">
							<div class="col-lg-4">
								<input type="text" id="name" name="name" placeholder="Your Name" required>
							</div>
							<div class="col-lg-4">
								<input type="text" id="email" name="email" placeholder="Your Email" required>
							</div>
							<div class="col-lg-4">
								<input type="text" id="subject" name="subject" placeholder="Subject" required>
							</div>
							<div class="col-lg-12">
								<textarea id="message" name="message" placeholder="Message" required></textarea>
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
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5YieqgGUqUb5k55Hg5m2iAARwuRn1EpY"></script> -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo&callback=initialize"></script>	 -->
	<!-- <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyD5oMOq3XPDiMv3Cn4ZDPloR3G2o0t1dU0'></script>
	<script src="js/map.js"></script> -->
	
</body>
</html>