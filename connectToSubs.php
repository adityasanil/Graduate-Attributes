<?php
$host = "localhost";
$uname = "sanil";
$password = "";
$dbnamesubs = "SubjectsDB";

$connectsubs = mysqli_connect($host, $uname, $password, $dbnamesubs);
if (!$connectsubs) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to SubsDB";
?>
