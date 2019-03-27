<?php
$host = "localhost";
$uname = "sanil";
$password = "";
$dbname = "portalDatabase";

$connect = mysqli_connect($host, $uname, $password, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected to portalDB";
?>
