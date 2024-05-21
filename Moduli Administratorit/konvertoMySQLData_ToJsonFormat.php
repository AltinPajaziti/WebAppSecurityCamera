<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="umks";
//connect to database
$lidhe = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Smundesh te lidhemi");
//get the data from table Data_ahome
$query = "SELECT ahome FROM tedhenat_adm";
//execute the query
$rezultati = mysqli_query($lidhe, $query);
if(!$rezultati){ echo "Ekzekutimi i query deshtoi"; die();}
else{
 //creates an empty array to hold data
 $data = array();
  while($rreshti = mysqli_fetch_assoc($rezultati)){
    $data[]=$rreshti;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file rezultatis.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
echo "File is created";
//close the file
fclose($fp);
}
?>