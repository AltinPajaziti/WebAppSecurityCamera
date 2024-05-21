<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfigurimi.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["emri"]) || empty($_POST["fjalekalimi"]))
		{
			$error = "Duhen te plotesohen te dy fushat";
		}else
		{
			// Define $username and $password
			$emri=$_POST['emri'];
			$fjalekalimi=$_POST['fjalekalimi'];
			//Check username and password from database
			$sql="SELECT ID_Perdoruesi  FROM perdoruesit_umks WHERE emri='$emri' 
			and fjalekalimi='$fjalekalimi'";
			$rezultati=mysqli_query($lidhe,$sql);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['emri'] = $emri; // Initializing Session
				header("location: uebsaiti_i_adminave.php"); // Redirecting To Other Page
			}else
			{
				$error = "Gabim emri ose fjalekalimi";
			}
		}
	}
?>