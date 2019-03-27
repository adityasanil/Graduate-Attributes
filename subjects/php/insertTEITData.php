<?php
include "../../connection.php";
include "../../connectToSubs.php";


foreach ($_POST as $value) {
  $sqlsubs = "INSERT INTO TEIT(SubjectsTEIT) values ('$value')";
  echo "\n";
  $query = mysqli_query($connectsubs, $sqlsubs);
}

?>
