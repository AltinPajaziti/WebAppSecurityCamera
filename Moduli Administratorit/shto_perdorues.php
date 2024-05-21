<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Uebaplikacioni per Menazhimin e Shitjeve e Kamerave te Sigurise (UMKS)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							
							<!-- Banner -->
							<?php include_once("fillimi_i_faqes.php"); ?>
								

							


						<section>
						
						<p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
							<!-- Section -->
								<!-- Form -->
								<h3>Shto të dhënat e përdoruesit</h3>
								<div class="row gtr-200">
								<div class="col-6 col-12-medium">
									 <form method="post" action="shto.php"> <!-- name="form1" -->
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri" id="username" value="" placeholder="Emri ose Emaili" />
											<br>
												<input type="password" name="fjalekalimi" id="password" value="" placeholder="Fjalekalimi" />
											<br>
											<!-- Break -->

											
											</div>
											<!-- Break -->
											<br>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shto" value="Shto" class="primary" /></li>
													
												</ul>
											</div>
										</div>
									</form>
									</div>
									</div>
							<!-- Section -->
							</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

								<!-- Menu -->
							
							<!-- Menu -->
							<?php include_once("meny.php"); ?>

							<!-- Section -->
								

							<!-- Section -->
							<?php include_once("fundifaqes.php"); ?>

							<!-- Footer -->

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>