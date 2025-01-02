<?php
$servername = "localhost";
$username = "group15";
$password = "riskvolume";
$dbname = "group15";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$query= "INSERT INTO news (title,description,date) VALUES ('$_POST[title]','$_POST[description]','$_POST[date]')";
if(!mysqli_query($conn,$query)){
  die('Error: ' . mysqli_error($conn));
}
else{
  echo ("'$_POST[title]','$_POST[description]','$_POST[date]'");
}
?>