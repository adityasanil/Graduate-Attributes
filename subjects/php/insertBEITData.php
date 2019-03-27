<?php
include "../../connection.php";
include "../../connectToSubs.php";


foreach ($_POST as $value) {
  $sqlsubsBE = "INSERT INTO BEIT(SubjectsBEIT) values ('$value')";
  echo "\n";
  $query = mysqli_query($connectsubs, $sqlsubsBE);
}

?>
