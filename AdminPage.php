<?php
//if(!isset($_SESSION['sessionentery']))
//{
//    header("Location: logout.php");
//}
include "connection.php";
// include "css/bar.php";

session_start();
$user_session = $_SESSION['sessionentery'];
$sql = "SELECT * FROM Administrator WHERE Username = '$user_session'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Administrator Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-inverse navbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">KJSIEIT</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="AdminPage.php">Home</a></li>
          <li><a href="#">Option 2</a></li>
          <li><a href="#">Option 3</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="logout">
          <a class="btn btn-default" href="index.php" role="button">Logout</a>
        </form>
    </nav>

    <!-- BODY -->
    <div class="container">
      <div class="jumbotron">
          <h1>Hello, <?php echo $row['Name']; ?></h1>
            <p style="font-size:14px">You have Administrator Rights.</p>
          <hr>

          <form>
              <ul class="nav nav-pills">
                  <li role="presentation"><a href="adminLinks/addProfessor.php" style="font-size: 26px;">Register a new Professor</a></li>
              </ul>

              <ul class="nav nav-pills">
                  <li role="presentation"><a href="staffList.html" style="font-size: 26px;">Display staff list</a></li>
              </ul>

              <ul class="nav nav-pills">
                  <li role="presentation"><a href="adminLinks/addSubjects.php" style="font-size: 26px;" target="">Add subjects</a></li>
              </ul>

              <ul class="nav nav-pills">
                  <li role="presentation"><a href="adminLinks/assignSubjects.php" style="font-size: 26px;">Assign subjects to Professor</a></li>
              </ul>

              <!-- <ul class="nav nav-pills">
                  <li role="presentation"><a href="adminLinks/generateReports.php" style="font-size: 26px;">Generate reports</a></li>
              </ul> -->


          </form>
    </div>
  </div>
  </body>
</html>
