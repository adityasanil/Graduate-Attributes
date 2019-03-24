<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staff list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <table class="table" border="0">
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
          include 'connection.php';

          $sql = "SELECT Name, Department, Email, Contact FROM ProfessorTable ORDER BY Department";
          $query = mysqli_query($connect, $sql);

          while($row = mysqli_fetch_array($query)){
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
    </div>
  </body>
</html>
