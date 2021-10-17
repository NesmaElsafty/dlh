<?php 	include_once 'admin/connect.php'; ?>

<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dar Loqman International School</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
    <!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>
						Dar Loqman</h1>
						<p>International School</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>
	
					
				<!-- Header -->
					<header id="header">
						<!--<a href="index.php" class="logo">Dar Loqman</a>-->
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
						<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About US</a></li>
							<li class="active"><a href="contact-us.php">Contact US</a></li>
							<li><a href="activities.php">Activities</a></li>
							<li><a href="staff.php">Staff</a></li>
						</ul>
					
					</nav>

		

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="mail.php">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p><?php echo $get_as['address']; ?></p>
								
							</section>
							<section>
								<h3>Phone</h3>
								<p><?php echo $get_as['phone']; ?></p>
								
							</section>
							<section>
								<h3>Email</h3>
								<p><?php echo $get_as['email']; ?></p>
								
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<!-- <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li> -->
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<!-- <div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>
 -->
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>