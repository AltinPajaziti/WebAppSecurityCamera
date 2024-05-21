<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Uebaplikacioni per Menaxhimin e Kamerave te Sigurise (UMKS)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">


	
        

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
                    <?php include_once("fillimi_i_faqes.php"); ?>




				<div class="content">
					<div class="table-wrapper">
	
						<div class="row">
						
								<div class="highlights">
									
                                <section>
								
                                <p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
                                
                                <header class="major">
                                    <h2>Menaxhimi i te dhenave te ballines</h2>
                                </header>


                                <div class="features">
                                    <article>
                                    <a href="Menaxho_modelet_e_kamerave.php"><span class="icon fa-gem"></span></a>
                                        <div class="content">
                                            <a href="Menaxho_modelet_e_kamerave.php"><h3>Menaxho Modele te kamerave te Sigurise</h3></a>
                                            <p>Forma per menaxhimin Modeleve te Kamerave te Sigurise ne uebaplikacion</p>
                                        </div>
                                    </article>
                                    <article>
                                    <a href="Menaxho_kamerat_e_sigurise.php"><span class="icon fa-gem"></span></a>
                                        <div class="content">
                                        <a href="Menaxho_kamerat_e_sigurise.php"><h3>Menaxho Kamerat e Sigurise</h3></a>
                                            <p>Forma per menaxhimin e Kamerave te Sigurise ne uebaplikacion</p>
                                        </div>
                                    </article>
                                    <article>
                                    <a href="modifiko_tedhenat.php"><span class="icon fa-gem"></span></a>
                                        <div class="content">
                                        <a href="modifiko_tedhenat.php"><h3>Modifiko te Dhenat</h3></a>
                                            <p>Forma per modifikimin e te dhenave ne uebaplikacionin</p>
                                        </div>
                                    </article>
                                </div>
                       </section>




			
							</div>	
									
						</div>
						
								
						</div>
				</div>
				</div>
			</section>
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





		<!-- Footer -->
        

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>