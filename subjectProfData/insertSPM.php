<?php
// include "../../connection.php";
include "../connectToSubs.php";

$values = array_values($_POST);
// echo "\n--------\n";
$arrayValues = array();
$i = 0;

foreach ($values as $x) {
  $arrayValues[$i] = $x;
  $i++;
}

$arraySubjects = array();
$arrayProfessor = array();

for ($j=0; $j < count($arrayValues) ; $j = $j + 2) {
  // echo $arrayValues[$j] . ": " .$arrayValues[$j + 1] . "\n";
  $arraySubjects[$j] = $arrayValues[$j];
  $arrayProfessor[$j] = $arrayValues[$j + 1];

  $insertSubject = $arraySubjects[$j];
  $insertProfessor = $arrayProfessor[$j];

  // echo "Subject:". $insertSubject;
  // echo "  Professor: ". $insertProfessor;

  $sqlInsert = "INSERT INTO SEITSPM (Subjects, Professors) VALUES ('$insertSubject', '$insertProfessor')";
  $queryInsert = mysqli_query($connectsubs, $sqlInsert);

  // if(mysqli_query($connectsubs, $sqlInsert))
  // {
  //   echo "<script type='text/javascript'>alert('Data Entered');</script>";
  // }
  // else{
  //   printf("<br>failed to enter " . mysqli_error($sqlInsert));
  // }
}





?>
