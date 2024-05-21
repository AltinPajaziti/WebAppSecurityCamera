<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrolli.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$ID_kamera  = $_POST['ID_kamera'];
	
	$kamerat_e_sigurise_umks=$_POST['kamerat_e_sigurise_umks'];
	$lens_umks=$_POST['lens_umks'];
	$id_modelet_umks =$_POST['id_modelet_umks'];

	
	$foto =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	// $emriFoto = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB

	

	if(empty($kamerat_e_sigurise_umks) || empty($lens_umks)) {
				
		if(empty($kamerat_e_sigurise_umks)) {
			echo "<font color='red'>kamerat_e_sigurise_umks field is empty.</font><br/>";
		}
		

		
		if(empty($lens_umks)) {
			echo "<font color='red'>Fusha e lens_umks eshte e zbrazet.</font><br/>";
		}

		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhe,"UPDATE kamerat_e_sigurise_umks SET kamerat_e_sigurise_umks='$kamerat_e_sigurise_umks',lens_umks='$lens_umks',id_modelet_umks='$id_modelet_umks',foto='$foto' WHERE ID_kamera=$ID_kamera");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: menaxho_kamerat_e_sigurise.php");
	}
}
?>
<?php
//getting uid from url
$ID_kamera = $_GET['ID_kamera'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhe,"SELECT * FROM kamerat_e_sigurise_umks WHERE ID_kamera =$ID_kamera ");

while($rez = mysqli_fetch_array($rezultati))
{
	$kamerat_e_sigurise_umks = $rez['kamerat_e_sigurise_umks'];
	$lens_umks = $rez['lens_umks'];
	$id_modelet_umks  = $rez['id_modelet_umks'];

	
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
		<title>Uebaplikacioni per Menaxhimin e kamerave te sigurise (UMKS)</title>
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
						
										<form enctype="multipart/form-data"  action="modifiko_kameren.php" method="post" name="form1">
											<table>
												
											<h3>Modifiko të dhënat e Kameres</h3>

												

												<tr>
												<select name="id_modelet_umks">
														<option selected="selected" required>Zgjedh Modelin</option>
															<?php
															$rezultati=mysqli_query($lidhe,"SELECT * FROM modelet_umks");
															while($rreshti=$rezultati->fetch_array())
															{
																?>
																<option value="<?php echo $rreshti['id_modelet']; ?>"><?php echo $rreshti['modelet_umks']; ?></option>
																<?php
															}
															?>
												</select><br />
												</tr>
												
												<tr> 
													<td>kamerat_e_sigurise_umks</td>
													<td><input type="text" name="kamerat_e_sigurise_umks" value='<?php echo $kamerat_e_sigurise_umks;?>'/></td>
												</tr>
												<tr>
													<td>lens_umks</td>
												
													<td><input type="text" name="lens_umks" id="" value='<?php echo $lens_umks;?>'></td>
												</tr>
												<tr>
													<td ><input type="hidden" name="MAX_FILE_SIZE"value="1000000000"></td>
													<td><input name="userfile" type="file"></td>
												</tr>
											

												<tr> 
													<td><input type="hidden" name="ID_kamera" value='<?php echo $_GET['ID_kamera'];?>' /></td>
													<td><input type="submit" name="modifiko" value="Modifiko"></td>
												</tr>
												
											</table>
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