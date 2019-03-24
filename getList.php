<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
  <!-- <div class="container"> -->
    <table class="table table-striped" border="0" style="width:80%;">
      <thead>
        <tr>
          <th>Name </th>
          <th>Department</th>
          <th>Email_ID</th>
          <th>Contact Number</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $department = $_REQUEST['q'];
        $sql="SELECT Name, Department, Email, Contact FROM ProfessorTable WHERE Department = '".$department."'";
        $result = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
              <td><?php echo $row['Name']?></td>
              <td><?php echo $row['Department']?></td>
              <td><?php echo $row['Email']?></td>
              <td><?php echo $row['Contact']?></td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  <!-- </div> -->

</body>
</html>
