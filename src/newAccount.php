
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('dbConnect.php');
$email = $_POST["email"];
$password = $_POST["password"];
$screenName = $_POST["screenname"];
$isVerified = 0;
$code = 00000000;
$query = "SELECT * FROM `BoardAccounts` WHERE `email` = '$email' AND `password` = '$password' AND `screenname` = '$screenName'";
$results = mysqli_query($con, $query);
if (mysqli_num_rows($results)== 0)
{
    $query = "INSERT INTO `BoardAccounts` (`email`,`password`,`screenname`,`isVerified`,`code`) VALUES ('$email','$password','$screenName','$isVerified', '$code')";
    $results = mysqli_query($con, $query);
}
?>