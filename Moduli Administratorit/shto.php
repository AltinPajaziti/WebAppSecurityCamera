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

if(isset($_POST['shto'])) {	
	$emri = $_POST['emri'];
	$fjalekalimi = $_POST['fjalekalimi'];
		
	// checking empty fields
	if(empty($emri) || empty($fjalekalimi)) {			
		if(empty($emri)) {echo "<font color='red'>Fusha e perdoruesit eshte e zbrazet.</font><br/>";}
		if(empty($fjalekalimi)) {echo "<font color='red'>Fusha e fjalkalimit eshte e zbrazet.</font><br/>";}
		//link to the previous password
		echo "<script>
		setTimeout(function(){
		   window.location.href = 'shto_perdorues.php';
		}, 5000);
	 </script>";
		echo"<p><b>   Ju lutem pritni 5 sekonda deri sa te ktheheni formen e shtimit te perdoruesve. <b></p>";
   
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhe, "INSERT INTO perdoruesit_umks(emri,fjalekalimi) VALUES('$emri','$fjalekalimi')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>E dhena e shtuar eshte e suksesshme.";
		//echo "<br/><a href='perdorues.php'>Shfaq rezultatin.</a>";
	}
}
?>

</body>
</html>
