
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfigurim.php"); ?>

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

							<?php include_once("fillimifaqes.php"); ?>

							<!-- Section -->
								<section>

								<header class="major">
										<h2>Kamerat e Sigurise sipas modeleve</h2>
									</header>






									
					<div class="posts">

					<?php
							 $rezultati = mysqli_query($lidhe, "SELECT  k.kamerat_e_sigurise_umks, k.lens_umks, k.foto FROM kamerat_e_sigurise_umks k
							 LEFT OUTER JOIN modelet_umks m ON k.id_modelet_umks = m.id_modelet
							 GROUP BY k.kamerat_e_sigurise_umks, k.lens_umks,k.foto, m.modelet_umks
							 ORDER BY k.ID_kamera, m.id_modelet  Desc");
							 while ($rreshti = mysqli_fetch_assoc($rezultati)) {
								 extract($rreshti);
		 
		 
								 if ($rezultati == null)
									 mysqli_free_result($rezultati);
			
						?>


			<style>
				 .image{
					width: 55% !important;
					display: flex;
					
				} 

			
			</style>





			<article>
				<div class ="inner">
				<a href="#" class="image"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rreshti['foto'] ).'" width="100%" height="100%">'; ?>	</a>


				</div>
				
				
				
				
					
							<h3><?php echo $kamerat_e_sigurise_umks; ?>  <?php echo $lens_umks; ?></h3>
					
						
									
					
			</article>
			<?php } ?>

     
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
							<?php include_once("fundi_faqes.php"); ?>


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