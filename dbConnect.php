<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
$con = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>