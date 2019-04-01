<?php

include "connection.php";
include "connectToSubs.php";

session_start();
$user_session = $_SESSION['sessionentery'];
$sql = "SELECT * FROM ProfessorTable WHERE Username = '$user_session'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);

$sqlSubject = "SELECT * FROM SEITSPM WHERE Professors = '$user_session'";
$querySubject = mysqli_query($connectsubs, $sqlSubject);
$rowSubject = mysqli_fetch_array($querySubject);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Staff Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">

    .inline-block-child { display: inline-block; }
    .blackiconcolor {color:black;}
    /* .hrStyle { height: 0.4px; color: #333; background-color: #333; } */

    </style>
  </head>
  <body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-brand mb-0 h1">KJSIEIT</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="ProfPage.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Option 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Option 3</a>
          </li>
        </ul>
        <form class="form-inline">
          <a class="btn btn-outline-light" href="index.php" role="button">Logout</a>
        </form>
      </div>
    </nav>

    <!-- BODY -->
    <br>
    <div class="container">
      <div class="jumbotron" style="background:transparent !important">
        <div class='parent'>
          <div class='child inline-block-child'>
            <div class="card text-right" style="width: 16rem;">
              <?php echo '<img style="height: 251px" class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['Picture'] ).'">'; ?>
              </div>
          </div>
          <div class='child inline-block-child'>
            <div class="card-body">
                <h3 class="card-text ">Prof. <?php echo $row['Name']; ?></h3>
                <p><?php echo $row['Qualification']; ?>, Mumbai University<p>

                <p>
                  <?php echo $row['Department']; ?>
                </p>

                <p><?php echo $row['Email']; ?></p>
                <p><?php echo $row['Contact']; ?></p>
                <p>K.J. Somaiya Institute of Engineering & IT</p>
                <a href="https://in.linkedin.com/" target="_blank"><i class="icon-cog blackiconcolor fa fa-linkedin"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="icon-cog blackiconcolor fa fa-facebook-square"></i></a>
                <a href="https://github.com/" target="_blank"><i class="icon-cog blackiconcolor fa fa-github-alt"></i></a>
              </div>
          </div>
        </div>

        <!-- CONTENTS -->
        <hr>
        <h3>Subjects Assigned to you:</h3>
        <p>
          <a class="btn btn-dark" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Second Year</a>
          <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Third Year</button>
          <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Final year</button>
          <button class="btn btn-dark" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Together</button>
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body">
                <p>Subject assigned to you for Third year</p>
                <p>Assigned: <a href="subjects/subjectMappingPage.php" target=""><?php echo $rowSubject['Subjects']; ?></a></p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body">
                <p>Subject assigned to you for Third year</p>
                <p>Assigned: <a href="subjects/subjectMappingPage.php" target=""><?php echo $rowSubject['Subjects']; ?></a></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body">
                <p>Subject assigned to you for Final year</p>
                <p>Assigned: <a href="subjects/subjectMappingPage.php" target=""><?php echo $rowSubject['Subjects']; ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <hr>

    </div>
  </body>
</html>
