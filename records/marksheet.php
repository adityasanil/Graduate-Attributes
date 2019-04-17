<?php
include "../connection.php";
include "../connectToSubs.php";


session_start();
$user_session = $_SESSION['sessionentery'];

$sqlSubjectMap = "SELECT * FROM SEITSPM WHERE Professors = '$user_session'";
$querySubjectMap = mysqli_query($connectsubs, $sqlSubjectMap);
$rowSubjectMap = mysqli_fetch_array($querySubjectMap);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enter marks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">
      .lead {
        line-height: 15px;
      }
    </style>

    <script type="text/javascript">
    function set(){

      // window.alert("Hello");


    }


      var check = 0;
      // var countCO = parseInt(document.getElementsByClassName('courseOutcome').length) + 1 ;
      // var countPO = parseInt(document.getElementsByClassName('programOutcome').length) + 1;

      if(check == 0){
        var myTableDiv = document.getElementById("COPOTable");
        var table = document.createElement('TABLE');
        table.border = '1';
        table.setAttribute("id", "mappingTable");
        table.setAttribute("class", "table table-bordered table-sm");

        var tableBody = document.createElement('TBODY');
        table.appendChild(tableBody);

        for (var m = 1; m <= 5; m++) {
          var tr = document.createElement('TR');
          tableBody.appendChild(tr);

          for (var l = 1; l <= 5; l++) {
            var td = document.createElement('TD');

            if (m == 1 && l == 1) {
              td.appendChild(document.createTextNode(" "));
              tr.appendChild(td);
            }
            else if (m == 1 && l > 1) {
              var listCO = document.createElement('p');
              listCO.innerHTML = '<strong>CO: ' + (l-1) + '</strong>';
              td.appendChild(listCO);
              tr.appendChild(td);
            }
            else if (m >= 2 && l == 1) {
              var listPO = document.createElement('p');
              listPO.innerHTML = '<strong>PO: ' + (m-1) + '</strong>';
              td.appendChild(listPO);
              tr.appendChild(td);
            }
            else {
              var checkboxInput = document.createElement('div');
              checkboxInput.innerHTML = '<input type="checkbox" name="mappedValue' + (m-1) + (l-1) + '">';
              td.appendChild(checkboxInput);
              tr.appendChild(td);
            }
          }
        }
        myTableDiv.appendChild(table);
        ++check;
      }

    </script>



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
              <a class="nav-link" href="../ProfPage.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Option 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Option 3</a>
            </li>
          </ul>
          <form class="form-inline">
            <a class="btn btn-outline-light" href="../index.php" role="button">Logout</a>
          </form>
        </div>
      </nav>
      <br>

      <!-- BODY -->
      <div class="conatiner">
        <div class="jumbotron" style="background:transparent !important">
          <div class="">
            <form>
              <div class="form-group">
                <p class="lead">Subject: <?php echo $rowSubjectMap['Subjects']; ?></p>
                <p class="lead">Year: 2018-2019</p>
                <p class="lead">Professor Incharge: <?php echo $rowSubjectMap['Professors']; ?></p>
              </div>
            </form>
          </div>
          <br>

          <!-- <hr style="height: 0.4px; color: #333; background-color: #333;"> -->
          <div class="">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-practicals-tab" data-toggle="tab" href="#nav-practicals" role="tab" aria-controls="nav-practicals" aria-selected="true" onclick="set()">Practical Marks</a>
                <!-- <a class="nav-item nav-link" id="nav-termtest-tab" data-toggle="tab" href="#nav-termtest" role="tab" aria-controls="nav-termtest" aria-selected="false">Term tests</a> -->
                <!-- <a class="nav-item nav-link" id="nav-assessment-tab" data-toggle="tab" href="#nav-assessment" role="tab" aria-controls="nav-assessment" aria-selected="false">Sem Assessment</a> -->
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-practicals" role="tabpanel" aria-labelledby="nav-practicals-tab">
                <!-- <h2>Practical marks</h2> -->
                <!-- <br> -->
                <p>If >=15 = 5; >=13 = 3; >=10 2; <10 = 1</p>
                <table class="table table-bordered table-responsive-md">
                  <thead>
                    <th>Roll no.</th>
                    <th>Name</th>
                    <th>Experiment 1</th>
                    <th>Experiment 2</th>
                    <th>Experiment 3</th>
                    <th>Experiment 4</th>
                    <th>Experiment 5</th>
                    <th>Average</th>
                    <th>CO</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Student 1</td>
                      <td>20</td>
                      <td>17</td>
                      <td>18</td>
                      <td>16</td>
                      <td>19</td>
                      <td>18</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Student 2</td>
                      <td>15</td>
                      <td>13</td>
                      <td>11</td>
                      <td>11</td>
                      <td>10</td>
                      <td>12</td>
                      <td>2</td>
                    </tr><tr>
                      <td>3</td>
                      <td>Student 3</td>
                      <td>10</td>
                      <td>9</td>
                      <td>8</td>
                      <td>8</td>
                      <td>9</td>
                      <td>8.8</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="nav-termtest" role="tabpanel" aria-labelledby="nav-termtest-tab">
                <h2>Enter test marks</h2>
              </div>

              <div class="tab-pane fade" id="nav-assessment" role="tabpanel" aria-labelledby="nav-assessment-tab">
                <h2>End Semester Assessment</h2>
              </div>

            </div>

          </div>




        </div>


      </div>

  </body>
</html>
