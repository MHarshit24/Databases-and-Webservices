<?php
$servername = "localhost";
$username = "group15";
$password = "riskvolume";
$dbname = "group15";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

$target_path = __DIR__;  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  

$query= "INSERT INTO ebook(ebook_id) VALUES ('$_POST[item]')";
if(!mysqli_query($conn,$query)){
  die('Error: ' . mysqli_error($conn));
}
else{
  echo ("'$_POST[item]'");
}



?>