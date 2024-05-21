<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$ID_perdoruesi = $_POST['ID_Perdoruesi'];
	
	$emri=$_POST['emri'];
	$fjalekalimi=$_POST['fjalekalimi'];
	$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($emri) || empty($fjalekalimi)) {	
			
		if(empty($emri)) {
			echo "<font color='red'>Emri eshte i zbrazet.</font><br/>";
		}
		
		if(empty($fjalekalimi)) {
			echo "<font color='red'>Fjalekalimi eshte i zbrazet.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhe,"UPDATE perdoruesit_umks SET emri='$emri',fjalekalimi='$fjalekalimi' WHERE ID_perdoruesi=$ID_perdoruesi");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting uid from url
$ID_perdoruesi = $_GET['ID_Perdoruesi'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhe,"SELECT * FROM perdoruesit_umks WHERE ID_Perdoruesi=$ID_perdoruesi");

while($rez = mysqli_fetch_array($rezultati))
{
	$emri = $rez['emri'];
	$fjalekalimi = $rez['fjalekalimi'];
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

							<!-- Header -->
							<?php include_once("fillimi_i_faqes.php"); ?>
							
							



							<!-- Section -->
					<section>
							
							
					 <p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
					<div class="row gtr-200">
						<div class="col-6 col-12-medium">


			<form name="form1" method="post" action="modifiko.php">
				
				<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="emri" value='<?php echo $emri;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="fjalekalimi" value='<?php echo $fjalekalimi;?>' />
				<br>
				<input type="hidden" name="ID_Perdoruesi" value='<?php echo $_GET['ID_Perdoruesi'];?>' />
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