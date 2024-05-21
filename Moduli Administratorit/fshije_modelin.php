<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$id_modelet = $_GET['id_modelet'];

//deleting the row from table
$rezultati = mysqli_query($lidhe,"DELETE FROM modelet_umks WHERE id_modelet=$id_modelet");

//redirecting to the display page (index.php in our case)
header("Location: menaxho_modelet_e_kamerave.php");
?>

