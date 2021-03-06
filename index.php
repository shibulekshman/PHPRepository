<!DOCTYPE HTML>
<!--
	Miniport 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/me.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Hi. I'm <strong>George</strong>.</h1>
							</header>
							<p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license/">CCA license</a>.</p>
							<a href="#work" class="button button-big">Learn about what AJ do</a>
						</div>
					</div>
				</article>
			</div>

		

		<!-- Contact -->
			<div class="wrapper wrapper-style4">
				<article id="contact" class="container small">
					<header>
						<h2>Get in touch!</h2>
						<span>Test code for PHP form submission.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="index.php">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
										<?php 
											$name=" ";
											$email=" ";
											$subject=" ";
											$message=" ";
											if (isset($_POST['name'])) {
    											$name=$_POST['name'];
											} else {
												$name="not set";
											}
											if (isset($_POST['email'])) {
    											$email=$_POST['email'];
											} else {
												$email="not set";
											}
											if (isset($_POST['subject'])) {
    											$subject=$_POST['subject'];
											} else {
												$subject="not set";
											}
											if (isset($_POST['message'])) {
    											$mess=$_POST['message'];
											} else {
												$message="not set";
											}
											echo $message;
											?>
											<div class="row half">
												<div class="6u">
													<input type="text" value = <?php echo $name; ?> />
												</div>
												<div class="6u">
													<input type="text" value = <?php echo $email; ?> />
												</div>
											</div>
											<div class="row half">
												<div class="12u">
													<input type="text" value = <?php echo $subject; ?> />
												</div>
											</div>
											<div class="row half">
												<div class="12u">
													<textarea name="message" ><?php echo $message; ?> </textarea>
												</div>
											</div>
										
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li class="twitter"><a href="http://twitter.com/n33co" class="fa fa-twitter"><span>Twitter</span></a></li>
									<li class="facebook"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
									<li class="dribbble"><a href="http://dribbble.com/n33" class="fa fa-dribbble"><span>Dribbble</span></a></li>
									<li class="linkedin"><a href="#" class="fa fa-linkedin"><span>LinkedIn</span></a></li>
									<li class="tumblr"><a href="#" class="fa fa-tumblr"><span>Tumblr</span></a></li>
									<li class="googleplus"><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
									<li class="github"><a href="http://github.com/n33" class="fa fa-github"><span>Github</span></a></li>
									<!--
									<li class="rss"><a href="#" class="fa fa-rss"><span>RSS</span></a></li>
									<li class="instagram"><a href="#" class="fa fa-instagram"><span>Instagram</span></a></li>
									<li class="foursquare"><a href="#" class="fa fa-foursquare"><span>Foursquare</span></a></li>
									<li class="skype"><a href="#" class="fa fa-skype"><span>Skype</span></a></li>
									<li class="soundcloud"><a href="#" class="fa fa-soundcloud"><span>Soundcloud</span></a></li>
									<li class="youtube"><a href="#" class="fa fa-youtube"><span>YouTube</span></a></li>
									<li class="blogger"><a href="#" class="fa fa-blogger"><span>Blogger</span></a></li>
									<li class="flickr"><a href="#" class="fa fa-flickr"><span>Flickr</span></a></li>
									<li class="vimeo"><a href="#" class="fa fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; 2013 Jane Doe</li>
							<li>Images: <a href="http://fotogrph.com">fotogrph</a></li>
							<li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>