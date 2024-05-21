<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include ("kontrolli.php");
?>

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




				<?php include_once ("fillimi_i_faqes.php"); ?>






				<!-- Section -->
				<!-- Form -->

				<section>
					<p style="text-align: right;">Pershendetje, <em>
							<?php echo $useri; ?>!
						</em></p>
					<div class="row gtr-200">
						<div class="col-6 col-12-medium">

							<!-- Buttons -->


							<!-- Form -->
							<h3>Shto te dhenat e Kameres</h3>
							<br />


							<form enctype="multipart/form-data" action="shtoKamere.php" method="post" name="form1">
								<div class="row gtr-uniform">
									<table border="0">
										<tr>
											<td>Zgjedh Kameren</td>
											<td>
												<select name="id_modelet_umks">
													<option selected="selected">Zgjedh Kameren</option>
													<?php
													$rezultati = mysqli_query($lidhe, "SELECT * FROM modelet_umks");
													while ($rreshti = $rezultati->fetch_array()) {
														?>
														<option value="<?php echo $rreshti['id_modelet']; ?>">
															<?php echo $rreshti['modelet_umks']; ?>
														</option>
														<?php
													}
													?>
												</select>
											</td>
										</tr>



										<tr>
											<td>kamerat_e_sigurise_umks</td>
											<td><input type="text" name="kamerat_e_sigurise_umks"></td>
										</tr>
										<tr>
											<td>lens_umks</td>
											<td><input type="text" name="lens_umks"></td>
										</tr>
										<tr>
											<td>
												<!-- <td><input type="hidden" name="MAX_FILE_SIZE" value="1000000000"></td> -->
											<td><input name="userfile" type="file"></td>
											</td>


										<tr>
											<td></td>
											<td><input type="submit" name="shtoKamere" value="Shto" class="primary">
											</td>
										</tr>

									</table>
								</div>
							</form>

							<br />

							<form action="" method="post">

								<table>
									<tr>
										<h3>Kërko te dhenat e Kameres se Sigurise për modifikim ose fshirje</h3>
									</tr>
									<tr>

										<td>
											Shkruaj:
										</td>
										<td>
											<input type="text" name="term" placeholder="Emri ose Lens" />
										</td>
										<td> <input type="submit" value="Kërko" /></td>
									</tr>
								</table>
							</form>

							<div class="table-wrapper">
								<table>

									<tr>
										<td></td>
										<td>kamerat_e_sigurise_umks</td>
										<td>lens_umks</td>

										<td>Foto</td>
										<td>emriFoto</td>

										<td>Modifiko</td>
										<td>Fshije</td>
										<td></td>
									</tr>

									<?php
									if (!empty($_REQUEST['term'])) {

										$term = mysqli_real_escape_string($lidhe, $_REQUEST['term']);

										$sql = mysqli_query(
											$lidhe,
											"SELECT
												k.ID_kamera,
												  m.modelet_umks,
												  k.kamerat_e_sigurise_umks,
												  k.lens_umks,
												  k.foto,
												  k.emriFoto
			
												FROM
												kamerat_e_sigurise_umks k
												INNER JOIN
												  modelet_umks m ON k.id_modelet_umks  = m.id_modelet
												WHERE
												  k.kamerat_e_sigurise_umks LIKE '%" . $term . "%' OR k.lens_umks LIKE '%" . $term . "%'"
										);


										while ($rreshti = mysqli_fetch_array($sql)) {
											echo "<tr>";
											echo "<td>" . $rreshti['modelet_umks'] . "</td>";
											echo "<td>" . $rreshti['kamerat_e_sigurise_umks'] . "</td>";
											echo "<td>" . $rreshti['lens_umks'] . "</td>";


											echo "<td><img src=data:foto/jpeg;base64," . base64_encode($rreshti['foto']) . " width='80'  height='100'/></td>";
											echo "<td>" . $rreshti['emriFoto'] . "</td>";



											echo "<td><a href=\"modifiko_kameren.php?ID_kamera=$rreshti[ID_kamera]\" class='button' class='button primary'>Modifiko</a> </td>";

											echo "<td><a href=\"fshijekameren.php?ID_kamera=$rreshti[ID_kamera]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Kameren?')\" class='button'
																class='button primary'>Fshijë</a> </td></tr>";
										}

									}

									?>
								</table>
							</div>


						</div>
					</div>
				</section>
			</div>
		</div>

		<!-- Sidebar -->
		<div id="sidebar">
			<div class="inner">

				<!-- Search -->


				<!-- Menu -->

				<!-- Menu -->
				<?php include_once ("meny.php"); ?>

				<!-- Section -->


				<!-- Section -->
				<?php include_once ("fundifaqes.php"); ?>

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