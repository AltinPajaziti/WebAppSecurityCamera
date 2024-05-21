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

if(isset($_POST['shtomodelin'])) {	
	$modeli = $_POST['modeli'];
	
	

	
	
	// checking empty fields
	if(empty($modeli)) {
				
		if(empty($modeli)) {
			echo "<font color='red'>modeli i kameres eshte i zbrazet.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
		
		
   
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhe, "INSERT INTO modelet_umks(modelet_umks) VALUES('$modeli')");
		
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_modelet_e_kamerave.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>

</body>
</html>
