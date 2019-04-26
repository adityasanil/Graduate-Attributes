<?php
 $host = "localhost";
 $uname = "sanil";
 $password = "";
 $dbnameSubjRecord = "SubjectRecords";

 $connectSubRecord = mysqli_connect($host, $uname, $password, $dbnameSubjRecord);
 if (!$connectSubRecord) {
     die("Connection failed: " . mysqli_connect_error());
 }
 // echo "Connected to SubjectRecordsDB";


 ?>
