<?php
/* Index.php faqja qe permban formen e loginit) */
include('kyqu.php'); // Include Login Script
if ((isset($_SESSION['emri']) != '')) {
	header('Location: uebsaiti_i_adminave.php');
}
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Moduli Administratorit</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->



	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<?php include_once("fillimi_i_faqes.php"); ?>
			<div class="content">
				<div class="row">
					<div class="col-6 col-12-medium">

						<!-- Blockquote -->
						<h3>Udhëzim</h3>
						<blockquote>Për t`u kycur në webaplikacion ju lutem kontaktone administratorin për krijimin e
							llogarisë</blockquote>
					</div>

					<div class="col-6 col-12-medium">

						<!-- Buttons -->


						<!-- Form -->
						<h3>Kycja ne webaplikacion</h3>
						<form method="post" action="">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="emri" id="emri" value="" placeholder="Përdoruesi" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="password" name="fjalekalimi" id="fjalekalimi" value=""
										placeholder="Fjalëkalimi" />
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" name="submit" value="kyqu" class="primary" /></li>

									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- Elements -->
				<div id="sidebar">
					<?php include_once("fundifaqes.php"); ?>



					<!-- Image -->

					<!-- Box -->

					<!-- Preformatted Code -->



				</div>
			</div>
		</div>
		</div>
		</div>
	</section>

	<!-- Footer -->



	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>