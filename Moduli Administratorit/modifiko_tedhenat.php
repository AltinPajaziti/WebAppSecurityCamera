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
	<title>Uebaplikacioni per Menazhimin e Shitjeve te Kamerave(UMKS)</title>
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





				<!-- Section -->
				<!-- Form -->

				<section>
					<p style="text-align: right;">Pershendetje, <em>
							<?php echo $useri; ?>!
						</em></p>
					<div class="row gtr-200">
						<div class="col-6 col-12-medium">


							<form action="" method="post">

								<table>
									<tr>
										<h3>Kërko të dhënat për modifikim</h3>
									</tr>
									<tr>

										<td>
											Shkruaj:
										</td>
										<td>
											<input type="text" name="term" placeholder="Titullin ose Shpjegimin" />
										</td>
										<td>
											<input type="submit" value="Kërko" />
										</td>
									</tr>
								</table>


							</form>

							<div class="table-wrapper">
								<table>
									<div>
										<tr>
											<td>Titulli</td>
											<td>Pershkrimi</td>
											<td>Fajll-i</td>
											<td>Pozicioni i faqes</td>


											<td>Modifiko</td>
										</tr>
										<?php
										if (!empty($_REQUEST['term'])) {
											$term = mysqli_real_escape_string
											($lidhe, $_REQUEST['term']);
											$sql = mysqli_query(
												$lidhe,
												"SELECT * FROM  tedhenat_umks
														WHERE titulli LIKE '%" . $term . "%' 
														OR  Pershkrimi LIKE '%" . $term . "%'"
											);
											while ($rreshti = mysqli_fetch_array($sql)) {
												echo "<tr>";
												echo "<td>" . $rreshti['Titulli'] . "</td>";
												echo "<td>" . $rreshti['Pershkrimi'] . "</td>";
												echo "<td>" . $rreshti['Fajlli'] . "</td>";
												echo "<td>" . $rreshti['pozicioni_faqe'] . "</td>";
												echo "<td><a href=\"modifikoteDhena.php?ID_tedhenat=$rreshti[ID_tedhenat]\" class='button' class='button primary'>
																Modifiko</a></td></tr>";
											}
										}
										?>
									</div>
								</table>


							</div>
						</div>
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