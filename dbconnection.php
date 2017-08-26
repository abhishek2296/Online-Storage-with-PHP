<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if($link === false){
  //  die("ERROR: Could nt connect. " . mysqli_connect_error());
//}else{
//	echo "connected successfully";
//}
//?>