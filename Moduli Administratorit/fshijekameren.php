<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$ID_kamera = $_GET['ID_kamera'];

//deleting the row from table
$rezultati = mysqli_query($lidhe,"DELETE FROM kamerat_e_sigurise_umks WHERE ID_kamera=$ID_kamera");

//redirecting to the display page (index.php in our case)
header("Location: menaxho_kamerat_e_sigurise.php");
?>

