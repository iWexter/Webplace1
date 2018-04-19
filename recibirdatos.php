<?php

$chipid =  $_POST["chipid"];
$humedad = $_POST["humedad"];

$host = "localhost";
$dbusername = "id5423092_rodrigo";
$dbpassword = "quetzal90";
$dbname = "id5423092_esp12";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO mediciones (chipid, humedad)
  values ('$chipid','$humedad')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}


 