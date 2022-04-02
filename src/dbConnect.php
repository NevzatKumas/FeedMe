<?php
$servername = "sql1.njit.edu";
$username = "am2449";
$password = "RedRaceCar123!";
$con = mysqli_connect($servername,$username,$password);

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>