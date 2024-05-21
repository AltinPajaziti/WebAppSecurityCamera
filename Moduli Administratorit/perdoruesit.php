<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include('konfigurimi.php');
session_start();?>


<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Uebaplikacioni per Menaxhimin e Kamerave te Sigurise (UMKS)</title>
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

				<!-- Header -->
				<!-- Banner -->
				<?php include_once("fillimi_i_faqes.php"); ?>





				<!-- Section -->
				<section>
					<p style="text-align: right;">Pershendetje, <em>
							<?php echo $useri; ?>!
						</em></p>

					<header class="major">
						<h2>Menaxhimi i te dhenave te perdorueseve</h2>
					</header>


					<div class="features">
						<article>
							<a href="shto_perdorues.php"><span class="icon fa-gem"></span></a>
							<div class="content">
								<a href="shto_perdorues.php">
									<h3>Shto Perdorues</h3>
								</a>
								<p>Forma per shtimin e perdoruesve te rinje te uebaplikacionit me te drejtat te
									administratorit.</p>
							</div>
						</article>
						<article>
							<a href="modifiko_perdorues.php"><span class="icon fa-gem"></span></a>
							<div class="content">
								<a href="modifiko_perdorues.php">
									<h3>Modifiko Perdorues</h3>
								</a>
								<p>Forma per modifikimin e te dhenave te perdoruesve ne uebaplikacionit me te drejtat te
									administratorit.</p>
							</div>
						</article>
						<article>
							<a href="fshi_perdorues.php"><span class="icon fa-gem"></span></a>
							<div class="content">
								<a href="fshi_perdorues.php">
									<h3>Fshije Perdorues</h3>
								</a>
								<p>Forma per fshirjen e perdoruesve te uebaplikacionit me te drejtat te administratorit.
								</p>
							</div>
						</article>

					</div>


				</section>

				<!-- Section -->


			</div>
		</div>

		<!-- Sidebar -->
		<div id="sidebar">
			<div class="inner">

				<!-- Search -->


				<!-- Menu -->
				<!-- Search -->


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