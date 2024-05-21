
<?php
/* Kontrollon sesionin */
include('konfigurimi.php');
session_start();
$user_check=$_SESSION['emri'];
$ses_sql = mysqli_query($lidhe,"SELECT emri FROM perdoruesit_umks WHERE emri='$user_check' ");
$rreshti=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$useri=$rreshti['emri'];
if(!isset($user_check))
{
header("Location: index.php");
} ?>