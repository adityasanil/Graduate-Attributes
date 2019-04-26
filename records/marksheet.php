<?php
include "../connection.php";
include "../connectToSubs.php";
include "../SubjectRecords.php";

session_start();
$user_session = $_SESSION['sessionentery'];

$sqlSubjectMap = "SELECT * FROM SEITSPM WHERE Professors = '$user_session'";
$querySubjectMap = mysqli_query($connectsubs, $sqlSubjectMap);
$rowSubjectMap = mysqli_fetch_array($querySubjectMap);

$sqlSubjectRecord = "SELECT * FROM COA";
$querySubjectRecord = mysqli_query($connectSubRecord, $sqlSubjectRecord);
$rowSubjectRecord = mysqli_fetch_array($querySubjectRecord);

$sqlmap = "SELECT * FROM Mapped";
$querymap = mysqli_query($connectSubRecord, $sqlmap);
$rowmap = mysqli_fetch_array($querymap);

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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <style media="screen">
      .lead {
        line-height: 15px;
      }
    </style>

    <script type="text/javascript">

    var totalCOFinal = [];

    $(document).ready(function(){
      $("#SubmitCOtoEXP").click(function(event) {
        event.preventDefault();
        // console.log("Click");
        $.post("ExperimentRecords/mapperCOtoEXP.php", $("#formCOPO").serialize(), function(data){
          console.log(data);
        });
      });
    });

    function myFunction1(){
      var x = parseInt(document.getElementById("exp1").value);
      var y = parseInt(document.getElementById('exp2').value);
      var z = parseInt(document.getElementById('exp3').value);

      switch (true) {
        case x >= 15:
        a = 5;
        document.getElementById("exp1co").innerHTML = 5;
        break;
        case x < 15 && x >=10:
        a = 3;
        document.getElementById("exp1co").innerHTML = 3;
        break;
        case x < 10 && x >= 0:
        a = 1;
        document.getElementById("exp1co").innerHTML = 1;
        break;
      }

      switch (true) {
        case y >= 15:
        b = 5;
        document.getElementById("exp2co").innerHTML = 5;
        break;
        case y < 15 && y >=10:
        b = 3;
        document.getElementById("exp2co").innerHTML = 3;
        break;
        case y < 10 && y >= 0:
        b = 1;
        document.getElementById("exp2co").innerHTML = 1;
        break;
      }

      switch (true) {
        case z >= 15:
        c = 5;
        document.getElementById("exp3co").innerHTML = 5;
        break;
        case z < 15 && z >=10:
        c = 3;
        document.getElementById("exp3co").innerHTML = 3;
        break;
        case z < 10 && z >= 0:
        c = 1;
        document.getElementById("exp3co").innerHTML = 1;
        break;
      }

      var n = (a + b + c) / 3;
      var average = n.toFixed(2);
      document.getElementById("average1").innerHTML = average;

    }

    function myFunction2(){
      var x2 = parseInt(document.getElementById("exp4").value);
      var y2 = parseInt(document.getElementById("exp5").value);
      var z2 = parseInt(document.getElementById("exp6").value);


      switch (true) {
        case x2 >= 15:
        a2 = 5;
        document.getElementById("exp21co").innerHTML = 5;
        break;
        case x2 < 15 && x2 >=10:
        a2 = 3;
        document.getElementById("exp21co").innerHTML = 3;
        break;
        case x2 < 10 && x2 >= 0:
        a2 = 1;
        document.getElementById("exp21co").innerHTML = 1;
        break;
      }

      switch (true) {
        case y2 >= 15:
        b2 = 5;
        document.getElementById("exp22co").innerHTML = 5;
        break;
        case y2 < 15 && y2 >=10:
        b2 = 3;
        document.getElementById("exp22co").innerHTML = 3;
        break;
        case y2 < 10 && y2 >= 0:
        b2 = 1;
        document.getElementById("exp22co").innerHTML = 1;
        break;
      }

      switch (true) {
        case z2 >= 15:
        c2 = 5;
        document.getElementById("exp23co").innerHTML = 5;
        break;
        case z2 < 15 && z2 >=10:
        c2 = 3;
        document.getElementById("exp23co").innerHTML = 3;
        break;
        case z2 < 10 && z2 >= 0:
        c2 = 1;
        document.getElementById("exp23co").innerHTML = 1;
        break;
      }
      var m = (a2 + b2 + c2) / 3;
      var averagem = m.toFixed(2);
      document.getElementById("average2").innerHTML = averagem;
    }

    function myFunction3(){
      var x3 = parseInt(document.getElementById("exp31").value);
      var y3 = parseInt(document.getElementById("exp32").value);
      var z3 = parseInt(document.getElementById("exp33").value);

      switch (true) {
        case x3 >= 15:
        a3 = 5;
        document.getElementById("exp31co").innerHTML = 5;
        break;
        case x3 < 15 && x3 >=10:
        a3 = 3;
        document.getElementById("exp31co").innerHTML = 3;
        break;
        case x3 < 10 && x3 >= 0:
        a3 = 1;
        document.getElementById("exp31co").innerHTML = 1;
        break;
      }

      switch (true) {
        case y3 >= 15:
        b3 = 5;
        document.getElementById("exp32co").innerHTML = 5;
        break;
        case y3 < 15 && y3 >=10:
        b3 = 3;
        document.getElementById("exp32co").innerHTML = 3;
        break;
        case y3 < 10 && y3 >= 0:
        b3 = 1;
        document.getElementById("exp32co").innerHTML = 1;
        break;
      }

      switch (true) {
        case z3 >= 15:
        c3 = 5;
        document.getElementById("exp33co").innerHTML = 5;
        break;
        case z3 < 15 && z3 >=10:
        c3 = 3;
        document.getElementById("exp33co").innerHTML = 3;
        break;
        case z3 < 10 && z3 >= 0:
        c3 = 1;
        document.getElementById("exp33co").innerHTML = 1;
        break;
      }
      var l = (a3 + b3 + c3) / 3;
      var averagel = l.toFixed(2);
      document.getElementById("average3").innerHTML = averagel;
    }

    function myFunction4(){
      var x4 = parseInt(document.getElementById("exp41").value);
      var y4 = parseInt(document.getElementById("exp42").value);
      var z4 = parseInt(document.getElementById("exp43").value);

      switch (true) {
        case x4 >= 15:
        a4 = 5;
        document.getElementById("exp41co").innerHTML = 5;
        break;
        case x4 < 15 && x4 >=10:
        a4 = 3;
        document.getElementById("exp41co").innerHTML = 3;
        break;
        case x4 < 10 && x4 >= 0:
        a4 = 1;
        document.getElementById("exp41co").innerHTML = 1;
        break;
      }

      switch (true) {
        case y4 >= 15:
        b4 = 5;
        document.getElementById("exp42co").innerHTML = 5;
        break;
        case y4 < 15 && y4 >=10:
        b4 = 3;
        document.getElementById("exp42co").innerHTML = 3;
        break;
        case y4 < 10 && y4 >= 0:
        b4 = 1;
        document.getElementById("exp42co").innerHTML = 1;
        break;
      }

      switch (true) {
        case z4 >= 15:
        c4 = 5;
        document.getElementById("exp43co").innerHTML = 5;
        break;
        case z4 < 15 && z4 >=10:
        c4 = 3;
        document.getElementById("exp43co").innerHTML = 3;
        break;
        case z4 < 10 && z4 >= 0:
        c4 = 1;
        document.getElementById("exp43co").innerHTML = 1;
        break;
      }

      var o = (a4 + b4 + c4) / 3;
      var averageo = o.toFixed(2);
      document.getElementById("average4").innerHTML = averageo;

      totalCOFinal[0] = parseFloat((a + a2 + a3 + a4)/4);
      var finalTotalCO1 = "<p id='totalCO_1final'>" + totalCOFinal[0] + "</p>";
      document.getElementById("totalCO1").innerHTML = "Total: " + finalTotalCO1;

      totalCOFinal[1] = parseFloat((b + b2 + b3 + b4)/4);
      var finalTotalCO2 = "<p id='totalCO_2final'>" + totalCOFinal[1] + "</p>";
      document.getElementById("totalCO2").innerHTML = "Total: " + finalTotalCO2;

      totalCOFinal[2] = parseFloat((c + c2 + c3 + c4)/4);
      var finalTotalCO3 = "<p id='totalCO_3final'>" + totalCOFinal[2] + "</p>";
      document.getElementById("totalCO3").innerHTML = "Total: " + finalTotalCO3;
    }

    function graphCall(){
      var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light1", // "light1", "light2", "dark1", "dark2"
    	title: {
    		// text: "CO attainment"
    	},
    	axisY: {
    		title: "CO achieved",
        maximum: 5,
    		includeZero: true
    	},
    	axisX: {
    		title: "Experiments"
    	},
    	data: [{
    		type: "column",
    		// yValueFormatString: "#,##0.0#\"%\"",
    		dataPoints: [
    			{ label: "Experiment 1", y: totalCOFinal[0] },
    			{ label: "Experiment 2", y: totalCOFinal[1] },
    			{ label: "Experiment 3", y: totalCOFinal[2] },
    		]
    	}]
    });
    chart.render();
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
          <div class="" style="background-color: white; !important">
            <form id="formCOPO">
              <table class="table table-bordered">
                <thead>
                  <th style="width: 12%;">Mapper</th>
                  <th>CO 1</th>
                  <th>CO 2</th>
                  <th>CO 3</th>
                </thead>
                <tbody>
                  <tr>
                    <td>EXP 1</td>
                    <td><input type="checkbox" name="EXP1" value="CO1"></td>
                    <td><input type="checkbox" name="EXP1" value="CO2"></td>
                    <td><input type="checkbox" name="EXP1" value="CO3"></td>
                  </tr>
                  <tr>
                    <td>EXP 2</td>
                    <td><input type="checkbox" name="EXP2" value="CO1"></td>
                    <td><input type="checkbox" name="EXP2" value="CO2"></td>
                    <td><input type="checkbox" name="EXP2" value="CO3"></td>
                  </tr>
                  <tr>
                    <td>EXP 3</td>
                    <td><input type="checkbox" name="EXP3" value="CO1"></td>
                    <td><input type="checkbox" name="EXP3" value="CO2"></td>
                    <td><input type="checkbox" name="EXP3" value="CO3"></td>
                  </tr>
                </tbody>
              </table>
              <p>
                <input type="submit" class="btn btn-primary" id="SubmitCOtoEXP" name="SubmitCOtoEXP" value="Submit">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="sheets">
                  Sheets
                </button>
              </p>
            </form>
          </div>

          <div class="">
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-Experiments-tab" data-toggle="tab" href="#nav-Experiments" role="tab" aria-controls="nav-Experiments" aria-selected="true">Experiments</a>
                    <a class="nav-item nav-link" id="nav-Assignments-tab" data-toggle="tab" href="#nav-Assignments" role="tab" aria-controls="nav-Assignments" aria-selected="false">Assignments</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-Experiments" role="tabpanel" aria-labelledby="nav-Experiments-tab">
                    <br>
                    <form class="" action="" method="">
                      <table class="table table-bordered table-responsive">
                        <thead>
                          <th style="width:1%;">Roll No.</th>
                          <th>EXP1</th>
                          <th style="width:2%;"><?php echo $rowmap['EXP1']; ?></th>
                          <th>EXP2</th>
                          <th style="width:2%;"><?php echo $rowmap['EXP2']; ?></th>
                          <th>EXP3</th>
                          <th style="width:2%;"><?php echo $rowmap['EXP3']; ?></th>
                          <th style="width:3%;">Mean CO</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 1 marks" id="exp1" class="form-control">
                            </td>
                            <td>
                              <p id="exp1co"></p>
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 2 marks" id="exp2" class="form-control">
                            </td>
                            <td>
                              <p id="exp2co"></p>
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 3 marks" id="exp3" oninput="myFunction1()" class="form-control">
                            </td>
                            <td>
                              <p id="exp3co"></p>
                            </td>
                            <td id="average1">
                            </td>
                          </tr>

                          <tr>
                            <td>2</td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 1 marks" id="exp4" class="form-control">
                            </td>
                            <td id="exp21co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 2 marks" id="exp5" class="form-control">
                            </td>
                            <td id="exp22co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 3 marks" id="exp6" oninput="myFunction2()" class="form-control">
                            </td>
                            <td id="exp23co">
                            </td>
                            <td id="average2"></td>
                          </tr>

                          <tr>
                            <td>3</td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 1 marks" id="exp31" class="form-control">
                            </td>
                            <td id="exp31co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 2 marks" id="exp32" class="form-control">
                            </td>
                            <td id="exp32co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 3 marks" id="exp33" oninput="myFunction3()" class="form-control">
                            </td>
                            <td id="exp33co">
                            </td>
                            <td id="average3"></td>
                          </tr>

                          <tr>
                            <td>4</td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 1 marks" id="exp41" class="form-control">
                            </td>
                            <td id="exp41co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 2 marks" id="exp42" class="form-control">
                            </td>
                            <td id="exp42co">
                            </td>
                            <td style="width: 5%;">
                              <input type="text" name="" placeholder="Experiment 3 marks" id="exp43" oninput="myFunction4()" class="form-control">
                            </td>
                            <td id="exp43co">
                            </td>
                            <td id="average4"></td>
                          </tr>

                          <tr>
                            <td></td>
                            <td></td>
                            <td id="totalCO1"></td>
                            <td></td>
                            <td id="totalCO2"></td>
                            <td></td>
                            <td id="totalCO3"></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="graphCall()">
                          Graphs
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">CO chart</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div id="chartContainer">

                              </div>
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                              </div> -->
                            </div>
                          </div>
                          </div>

                      </div>

                      </div>

                    </form>

                  </div>

                  <div class="tab-pane fade" id="nav-Assignments" role="tabpanel" aria-labelledby="nav-Assignments-tab">
                    Table
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

  </body>
</html>
