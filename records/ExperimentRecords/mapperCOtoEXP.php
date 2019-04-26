<?php
include "../../SubjectRecords.php";


$mappedCO1 = $_REQUEST['EXP1'];
$mappedCO2 = $_REQUEST['EXP2'];
$mappedCO3 = $_REQUEST['EXP3'];

echo "EXP 1: " . $mappedCO1 . "\n";
echo "EXP 2: " . $mappedCO2 . "\n";
echo "EXP 3: " . $mappedCO3 . "\n";


$sqlInsertMap = "INSERT INTO Mapped (EXP1, EXP2, EXP3) VALUES ('$mappedCO1', '$mappedCO2', '$mappedCO3')";
$sqlInsertMapQuery = mysqli_query($connectSubRecord, $sqlInsertMap);


?>
