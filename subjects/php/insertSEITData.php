<?php
include "../../connection.php";
include "../../connectToSubs.php";

foreach ($_POST as $value) {
  $sql = "INSERT INTO SEIT(SubjectsSEIT) values ('$value')";
  echo "\n";
  $query = mysqli_query($connectsubs, $sql);
  // echo $value;
  // echo "Added";
}
// echo "<br>";
// echo "$keysValue<br>";
// for ($i=0; $i < $keysValue - 1; $i++) {
//   echo $keys[$i];subs
//   echo "<br>";
// }

// echo "<br>";
// foreach ($_POST as $value) {
//   // echo "Key: $key";
//   echo " Value: $value <br>";
// }



?>
