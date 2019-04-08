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
    <title>Map subjects to COs & POs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">
      var i = j = k = 0;
      var check = 0;

      $(document).ready(function(){
        $(".add-course").click(function(){
          i++;
          var courseOutcome = $("#courseOutcome").val();
          var markupco = "<tr><td><center class='mt-2'>" + i + "</center></td><td><input class='form-control' type='text' readonly value='" + courseOutcome + "' name='courseOutcome" + i + "' style=''></td><td><input type='button' class='btn btn-outline-danger btn-sm courseOutcome' value='Remove' id='courseOutcome' name='courseOutcome" + i + "'></td></tr>";
          $('#courseOutcomeTable').append(markupco);
        });

        $(".add-program").click(function(){
          j++;
          var programOutcome = $("#programOutcome").val();
          var markuppo = "<tr><td><center class='mt-2'>" + j + "</center></td><td><input class='form-control' type='text' readonly value='" + programOutcome + "' name='programOutcome" + j + "' style=''></td><td><input type='button'class='btn btn-outline-danger btn-sm programOutcome' value='Remove' id='programOutcome' name='programOutcome" + j + "'></td></tr>";
          $('#programOutcomeTable').append(markuppo);
        });

        $(".add-objective").click(function(){
            k++;
            var objective = $("#objective").val();
            var markupObj = "<tr><td><center class='mt-2'>" + k + "</center></td><td><input class='form-control' type='text' readonly value='" + objective + "' name='objective" + k + "'style=''></td><td><input type='button'class='btn btn-outline-danger btn-sm' value='Remove' id='objective' name='objective" + k + "'></td></tr>";
            $('#objectiveTable').append(markupObj);
        });

        // Find and remove selected table rows from courseOutcomeTable
        $('#courseOutcomeTable').on('click', 'input[id="courseOutcome"]', function () {
          $(this).closest('tr').remove();
        })

        // Find and remove selected table rows from programOutcomeTable
        $('#programOutcomeTable').on('click', 'input[id="programOutcome"]', function () {
          $(this).closest('tr').remove();
        })

        // Find and remove selected table rows from objectiveTable
        $('#objectiveTable').on('click', 'input[id="objective"]', function () {
          $(this).closest('tr').remove();
        })

      });

      // function counter(){
        // window.alert("CO: " + countCO + "\n ");
      // }

      function addTable() {

        var countCO = parseInt(document.getElementsByClassName('courseOutcome').length) + 1 ;
        var countPO = parseInt(document.getElementsByClassName('programOutcome').length) + 1;

        if(check == 0){
          var myTableDiv = document.getElementById("COPOTable");
          var table = document.createElement('TABLE');
          table.border = '1';
          table.setAttribute("id", "mappingTable");
          table.setAttribute("class", "table table-bordered table-sm");

          var tableBody = document.createElement('TBODY');
          table.appendChild(tableBody);

          for (var m = 1; m <= countPO; m++) {
            var tr = document.createElement('TR');
            tableBody.appendChild(tr);

            for (var l = 1; l <= countCO; l++) {
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
    }
    </script>

    <style media="screen">
      .inline-block-child { display: inline-block; }
      #COPOTable {
        text-align: center;
      }
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

    <!-- Subject Information -->
    <div class="container">
      <div class="jumbotron" style="background:transparent !important">


        <!-- <h1>Subject mapping page</h1> -->
        <form>
          <div class="form-group">
            <p class="lead">Subject: <?php echo $rowSubjectMap['Subjects']; ?></p>
            <p class="lead">Year: 2018-2019</ </p>
            <p class="lead">Professor Incharge: <?php echo $rowSubjectMap['Professors']; ?></p>
            <hr style="height: 0.4px; color: #333; background-color: #333;">
          </div>
          </form>

          <!-- CO & PO TABLE -->
          <form id="formCOPO" class="" action="" method="">
          <div class="">
            <div>
              <form class="form-inline">
                <label class="mr-2" for="courseOutcome"><h4>Enter CO: </h4></label>
                  <input type="text" class="form-control mb-1 mr-2" id="courseOutcome" placeholder="Enter course outcome" style="width: 79.2%; display: inline;">
                  <input type="button" class="add-course btn btn-outline-primary mb-2" value="Add Row" style="display: inline;">
              </form>
              <div>
                <table id='courseOutcomeTable' class="table table-bordered" border="0">
                  <thead>
                    <tr class="table-info">
                        <th style="width:4%;">Sr.</th>
                        <th>Course Outcome</th>
                        <th style="width:9%;">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
              <hr style="height: 0.4px; color: #333; background-color: #333;">
            </div>

            <div>
              <form class="form-inline">
                <label class="mr-2" for="programOutcome"><h4>Enter PO: </h4></label>
                  <input type="text" class="form-control mb-2 mr-2" id="programOutcome" placeholder="Enter program outcome" style="width: 80%;">
                  <input type="button" class="add-program btn btn-outline-primary mb-2" value="Add Row">
              </form>
              <div>
                <table id='programOutcomeTable' class="table table-bordered" border="0">
                  <thead>
                    <tr class="table-info">
                      <th style="width:4%;">Sr.</th>
                      <th>Program Outcome</th>
                      <th style="width:9%;">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
              <hr style="height: 0.4px; color: #333; background-color: #333;">
            </div>

            <div>
              <form class="form-inline">
                <label class="mr-2" for="programOutcome"><h4>Enter Objective: </h4></label>
                  <input type="text" class="form-control mb-2 mr-2" id="objective" placeholder="Enter program objective" style="width: 73.5%;">
                  <input type="button" class="add-objective btn btn-outline-primary mb-2" value="Add Row">
              </form>
              <div>
                <table id='objectiveTable' class="table table-bordered" border="0">
                  <thead>
                    <tr class="table-info">
                      <th style="width:4%;">Sr.</th>
                      <th>Program Objective</th>
                      <th style="width:9%;">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
              <input type="button" id="submitformCOPO" class="btn btn-primary" name="" value="Submit">
              <hr style="height: 0.4px; color: #333; background-color: #333;">
            </div>
          </div>
          </form>


          <!-- Mapping table -->
          <center>
          <div>
            <p style="">
              <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="addTable();">
                Display Mapping Table
              </a>
            </p>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <h2>Map COs with POs</h2>
              <div id="COPOTable"></div>
            </div>
            </div>
          </div>
          <center>
        </div>
      </div>




      <script type="text/javascript">

      $(document).ready(function(){
        $("#submitformCOPO").click(function() {
          // event.preventDefault();
          // console.log("Click");
          $.post("insertCOPO/insertCOPO.php", $("#formCOPO").serialize(), function(data){
          // $.post( "insertCOPO/insertCOPO.php", {name: "John"}, function(data){
            console.log(data);
          });
        });
      });


      </script>
  </body>
</html>
