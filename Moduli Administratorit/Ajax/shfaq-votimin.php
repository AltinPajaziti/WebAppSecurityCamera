<html>
<head>
<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
		
<?php
include('../konfigurimi.php');
session_start();
$user_check=$_SESSION['emri'];
$ses_sql = mysqli_query($lidhe,"SELECT id_perdoruesi, emri FROM perdoruesit_umks WHERE emri='$user_check' ");
$rreshti=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$rreshti['emri'];
if(!isset($user_check))
{ header("Location: index.php");} 

	
    $_SESSION["ID_Pjesmarresi"] =  $rreshti['id_perdoruesi'];
    
	require("kontrolluesidb.php");
	$kontrolluesidb = new kontrolluesidb();
	
	$query = "SELECT DISTINCT ID_Pyetja from votimi_umks WHERE ID_Pjesmarresi = " . $_SESSION["ID_Pjesmarresi"]; 
	$rezultati = $kontrolluesidb->getIds($query);
	
	$condition = "";
	if(!empty($rezultati)) {
	    $condition = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `pyetjet_umks` " . $condition . " limit 1";
    $Pyetjet = $kontrolluesidb->runQuery($query);
    
    if(!empty($Pyetjet)) {
?>      
		<div class="Pyetja"><?php echo $Pyetjet[0]["Pyetja"]; ?><input type="hidden" name="Pyetja" id="Pyetja" value="<?php echo $Pyetjet[0]["ID"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM  pergjigjet_umks WHERE 	ID_Pyetja = " . $Pyetjet[0]["ID"];
        $Pergjigjejet = $kontrolluesidb->runQuery($query);
        if(!empty($Pergjigjejet)) {
            foreach($Pergjigjejet as $k=>$v) {
                ?>
			<div class="Pyetja"><input type="radio" name="Pergjigjja" class="radio-input" value="<?php echo $Pergjigjejet[$k]["ID"]; ?>" /><?php echo $Pergjigjejet[$k]["Pergjigjja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="addPoll()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">votimi  perfundoi me sukses!</div>


<?php 
    }
?>