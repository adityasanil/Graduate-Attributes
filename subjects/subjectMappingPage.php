<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Map subjects to COs & POs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">
      var i = j = k = 0;
      function counter(){
        var countCO = document.getElementsByName("courseOutcome").length;
        var countPO = document.getElementsByName("programOutcome").length;
        var countOBJ = document.getElementsByName("objective").length;
        // window.alert("HEllo");
      }

      $(document).ready(function(){
        $(".add-course").click(function(){
          i++;
          var courseOutcome = $("#courseOutcome").val();
          var markupco = "<tr><td><input type='button'class='btn btn-outline-secondary btn-sm' value='Remove' id='courseOutcome' name='courseOutcome" + i + "'></td><td>" + courseOutcome + "</td></tr>";
          $('#courseOutcomeTable').append(markupco);
        });

        $(".add-program").click(function(){
          j++;
          var programOutcome = $("#programOutcome").val();
          var markuppo = "<tr><td><input type='button'class='btn btn-outline-secondary btn-sm' value='Remove' id='programOutcome' name='programOutcome" + j + "'></td><td>" + programOutcome + "</td></tr>";
          $('#programOutcomeTable').append(markuppo);
        });

        $(".add-objective").click(function(){
            k++;
            var objective = $("#objective").val();
            var markupObj = "<tr><td><input type='button'class='btn btn-outline-secondary btn-sm' value='Remove' id='objective' name='objective" + k + "'></td><td>" + objective + "</td></tr>";
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

    </script>

    <style media="screen">
      .inline-block-child { display: inline-block; }
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
          <a class="btn btn-outline-light" href="index.php" role="button">Logout</a>
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
            <p class="lead">Subject: php["Subject_1"]</p>
            <p class="lead">Year: php["Year"]</ </p>
            <p class="lead">Incharge name: php["Professor Names"]</p>
            <hr style="height: 0.4px; color: #333; background-color: #333;">
          </div>
          </form>

          <!-- CO & PO TABLE -->
          <div>
            <form class="form-inline">
              <label class="mr-2" for="courseOutcome"><h4>Enter CO: </h4></label>
                <input type="text" class="form-control mb-2 mr-2" id="courseOutcome" placeholder="Enter course outcome" style="width: 80%;">
                <input type="button" class="add-course btn btn-primary mb-2" value="Add Row">
            </form>
            <div>
              <table id='courseOutcomeTable' class="table table-bordered" border="0">
                <thead>
                  <tr class="table-info">
                      <th style="width:10%;">Select</th>
                      <th>Course Outcome</th>
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
                <input type="button" class="add-program btn btn-primary mb-2" value="Add Row">
            </form>
            <div>
              <table id='programOutcomeTable' class="table table-bordered" border="0">
                <thead>
                  <tr class="table-info">
                      <th style="width:10%;">Select</th>
                      <th>Program Outcome</th>
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
                <input type="button" class="add-objective btn btn-primary mb-2" value="Add Row">
            </form>
            <div>
              <table id='objectiveTable' class="table table-bordered" border="0">
                <thead>
                  <tr class="table-info">
                      <th style="width:10%;">Select</th>
                      <th>Program Objective</th>
                  </tr>
                </thead>
                <tbody>
                  <tr></tr>
                </tbody>
              </table>
            </div>
            <hr style="height: 0.4px; color: #333; background-color: #333;">
          </div>

          <!-- Mapping table -->
          <div class="table table-responsive">
            <center><h2>Map COs with POs</h2><center>
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">CO-1</th>
                  <th scope="col">CO-2</th>
                  <th scope="col">CO-3</th>
                  <th scope="col">CO-4</th>
                  <th scope="col">CO-5</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">PO-1</th>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">PO-2</th>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="margin:auto; display:block;">
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="counter();">
                Link with href
              </a>
            </p>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
            </div>
          </div>


        </div>
      </div>
  </body>
</html>
