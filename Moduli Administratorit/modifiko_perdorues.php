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
		<title>Uebaplikacioni per Menaxhimin e Kamerave te Sigurise(UMKS)</title>
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
									<p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
										<div class="row gtr-200">
										<div class="col-6 col-12-medium">
										
										
										
													
														<form action="" method="post">  
		
															<table>
																<tr>
																	<h3>Kërko të dhënat e përdoruesit për modifikim</h3>
																</tr>
																<tr>

																<td>
																	Shkruaj:
																</td>
																<td>
																	<input type="text" name="term" placeholder="Përdoruesin ose Fjalekalimi"/>
																</td>
																<td> 
																	<input type="submit" value="Kërko" /></td>
																</tr>
															</table> 
														</form> 
														
													
											
													
													<div class="table-wrapper">
														<table>
															
															<tr>
																<td>Përdoruesi</td>
																<td>Fjalëkalimi</td>
																<td>Modifiko</td>
															</tr> 
														<?php
														if (!empty($_REQUEST['term'])) {
														$term = mysqli_real_escape_string
														($lidhe,$_REQUEST['term']);     
														$sql = mysqli_query($lidhe,
														"SELECT * FROM  perdoruesit_umks 
														WHERE emri LIKE '%".$term."%' 
														"); 
														while($rreshti = mysqli_fetch_array($sql)) { 		
																echo "<tr>";
																echo "<td>".$rreshti['emri']."</td>";
																echo "<td>".$rreshti['fjalekalimi']."</td>";
																echo "<td><a href=\"modifiko.php?ID_Perdoruesi=$rreshti[ID_Perdoruesi]\" class='button' class='button primary'>
																Modifiko</a></td></tr>";		
															}
														}
														?>
													
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