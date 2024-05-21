<!DOCTYPE HTML>
<html>

	
		
		<head>
		<title>Uebaplikacioni per Menaxhimin e Kamerave te Sigurise (UMKS)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	
		
		
		 
	</head>

<body>

<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shtoKamere'])) {	
	$kamerat_e_sigurise_umks = $_POST['kamerat_e_sigurise_umks'];
	$lens_umks = $_POST['lens_umks'];
	$id_modelet_umks = $_POST['id_modelet_umks'];
	// || empty($id_modelet_umks)
	
	
	$foto =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	// $emriFoto = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	
	

	
	
	// checking empty fields
	if(empty($kamerat_e_sigurise_umks) || empty($lens_umks)|| empty($id_modelet_umks)) {
				
		if(empty($kamerat_e_sigurise_umks)) {
			echo "<font color='red'>Fusha e kamerat_e_sigurise_umks eshte e zbrazet.</font><br/>";
		}
		
		if(empty($lens_umks)) {
			echo "<font color='red'>Fusha e lens_umks eshte e zbrazet..</font><br/>";
		}
		
		if(empty($id_modelet_umks)) {
			echo "<font color='red'>Fusha e id_modelet_umks eshte e zbrazet.</font><br/>";
		}
	
		
		
   
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhe, "INSERT INTO kamerat_e_sigurise_umks(kamerat_e_sigurise_umks,lens_umks,id_modelet_umks,foto) VALUES('$kamerat_e_sigurise_umks','$lens_umks','$id_modelet_umks','$foto')");
		
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_kamerat_e_sigurise.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>E dhena e shtuar eshte e suksesshme.";
		//echo "<br/><a href='perdorues.php'>Shfaq rezultatin</a>";
	}
}
?>

</body>
</html>