<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifikoteDhena']))
{	
	$ID_tedhenat = $_POST['ID_tedhenat'];
	
	$titulli=$_POST['titulli'];
	$shpjegimi=$_POST['Pershkrimi'];
	$fajlli=$_POST['fajlli'];	
	$pozicioni_faqe=$_POST['pozicioni_faqe'];	
	
	// checking empty fields
	if(empty($titulli) || empty($shpjegimi) || empty($fajlli) || empty($pozicioni_faqe)) {	
			
		if(empty($titulli)) {
			echo "<font color='red'>Titulli eshte i zbrazet.</font><br/>";
		}
		
		if(empty($shpjegimi)) {
			echo "<font color='red'>Shpjegimi eshte i zbrazet.</font><br/>";
		}
		
		if(empty($fajlli)) {
			echo "<font color='red'>Fajlli eshte i zbrazet.</font><br/>";
		}	
		if(empty($pozicioni_faqe)) {
			echo "<font color='red'>Pozicioni i faqes eshte i zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhe,"UPDATE tedhenat_umks SET titulli='$titulli',Pershkrimi='$shpjegimi',fajlli='$fajlli' ,pozicioni_faqe='$pozicioni_faqe' WHERE ID_tedhenat=$ID_tedhenat");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_tedhenat.php");
	}
}
?>
<?php
//getting uid from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhe,"SELECT * FROM tedhenat_umks WHERE ID_tedhenat=$ID_tedhenat");

while($rez = mysqli_fetch_array($rezultati))
{
	$titulli = $rez['Titulli'];
	$shpjegimi = $rez['Pershkrimi'];
	$fajlli = $rez['Fajlli'];
	$pozicioni_faqe = $rez['pozicioni_faqe'];
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
		<title>Uebaplikacioni per Menazhimin e Kamerave te sigurise(UMKS)</title>
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
							<header id="header">



								<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>
								
								<section id="banner">
									<div class="content">
										<header>
											 <h1>Uebaplikacioni per Menaxhimin e Kamerave te sigurise(UMShR)</h1> 
										</header> 
									</div>
									<span class="image object">
										<img src="images/photo1.jpg" alt="" />
									</span>
								</section>
							
								
					<section>
							<p style="text-align: right;">Pershendetje, <em><?php echo $useri;?>!</em></p> 
							
							<div class="row gtr-200">
							<div class="col-6 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Modifiko të dhënat</h3>
									
								
										<form action="modifikoteDhena.php" method="post" name="form1">
											<div class="col-6 col-12-xsmall">
											Titulli
												<input type="text" name="titulli" value='<?php echo $titulli;?>'   required />
												<br>
											
											Pershkrimi
											<textarea name="Pershkrimi" rows="5" cols="20"><?php echo $shpjegimi;?>   </textarea>
												<br>
											
											Fajlli
											<input type="text" name="fajlli" value='<?php echo $fajlli;?>'   required />
												<br>
												
											Pozicioni i faqes
												<input type="text" name="pozicioni_faqe" value='<?php echo $pozicioni_faqe;?>'   required />
												<br>
												
												<input type="hidden" name="ID_tedhenat" value='<?php echo $_GET['ID_tedhenat'];?>' />
												<input type="submit" name="modifikoteDhena" value="Modifiko">
											</div>
											
											
										
										</form>
									
							
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