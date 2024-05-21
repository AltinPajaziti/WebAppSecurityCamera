<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$id_modelet  = $_POST['id_modelet'];
	
	$modelet_umks=$_POST['modelet_umks'];
	

	
	if(empty($modelet_umks)) {
				
		if(empty($modelet_umks)) {
			echo "<font color='red'>modeli i kameres se sigurise eshte i zbrazet.</font><br/>";
		}
		
		
		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhe,"UPDATE modelet_umks SET modelet_umks='$modelet_umks'  WHERE id_modelet=$id_modelet");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: menaxho_modelet_e_kamerave.php");
	}
}
?>
<?php
//getting uid from url
$id_modelet  = $_GET['id_modelet'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhe,"SELECT * FROM modelet_umks WHERE id_modelet=$id_modelet");

while($rez = mysqli_fetch_array($rezultati))
{
	$modelet_umks = $rez['modelet_umks'];
	
}
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Uebaplikacioni per Menaxhimin kamerave te sigurise (UMKS)</title>
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
								<p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
								<div class="row gtr-200">
								<div class="col-6 col-12-medium">


						
										<form action="modifiko_modelin.php" method="post" name="form1">
											
												
											<h3>Modifiko të dhënat e modelit te kameres se sigurise</h3>

												
													
													<input type="text" name="modelet_umks" value='<?php echo $modelet_umks;?>'/>
												

												<br/>

												
													<input type="hidden" name="id_modelet" value='<?php echo $_GET['id_modelet'];?>' />
													<input type="submit" name="modifiko" value="Modifiko">
												
												
											
										</form>
							
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
									

							<!-- Menu -->
							<?php include_once("meny.php"); ?>

							<!-- Section -->
								

							<!-- Section -->
							<?php include_once("fundi_faqes.php"); ?>

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