<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'cloud');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (($_SESSION["amobile"]))
 {
$mobile  = $_SESSION["mobile"];
$name  = $_SESSION["aname"];
$email  = $_SESSION["aemail"];
$uid  = $_SESSION["aid"];
?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Privacy Preserving</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="user.php">Welcome <?php echo $name; ?></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="add-article.php" class="button">add articles</a></li>
							<li><a href="view-article.php" class="button">view article</a></li>
							<li><a href="view-request.php" class="button">request</a></li>
							<li><a href="logout.php" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<div class="row">
						<div class="12u">

							<!--Form -->
								<section class="box">
									<h3><?php echo $uid; ?> <em><strong> <font size="" color="#cc0033"> -You can add Article in the Privacy Preserving</font> </strong></em></h3>
									<form method="post" action="article-process.php">
										<div class="row uniform 50%">
											<div class="6u 12u(mobilep)">
												<input type="text" name="title" id="title" value="" placeholder="Title" />
											</div>
											<div class="6u 12u(mobilep)">
												<input type="text" name="domain" id="domain" value="" placeholder="Domain" />
											</div>
										</div>
										<div class="row uniform 50%">
											<div class="12u">
												<input type="text" name="keywords" id="keywords" value="" placeholder="Keywords" />
												
											</div>
										</div>
										
										<div class="row uniform 50%">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Copy your Article" rows="10"></textarea>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Add Article" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

						</div>
					</div>
					
									
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php
 }
	else 
	{
		header('Location: error.html');    
	}
?>