<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Subjects List</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../subjects/js/subjectadder.js"></script>

    <script type="text/javascript">

    </script>

    <style media="screen">
    .btn-link {
      text-decoration: none!important;
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
            <a class="nav-link" href="/Portal/AdminPage.php">Home<span class="sr-only">(current)</span></a>
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

    <!-- BODY -->
    <br><br><br>
    <div class="container">
      <!-- <div class="jumbotron"> -->
        <div class="form">
          <div class="form-group">
            <!-- CARD IT -->
            <div class="card">
              <h4 class="card-header  display-4" style="text-align: center; font-size: 45px; background:transparent !important;">Information Technology</h4>
              <div class="card-body">
                <!-- Collaplsible -->
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Second Year
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div>
                          <form class="form-inline">
                            <label class="mr-2" for="courseOutcome"><h4>Enter SE subjects: </h4></label>
                              <input type="button" class="add-subject-se btn btn-primary btn-sm mb-1" value="+">
                          </form>
                          <form id="serialFormSE" method="post">
                            <div>
                              <table id='seittable' class="table table-bordered" border="0">
                                <thead>
                                  <tr>
                                      <th style="width:5%;">No.</th>
                                      <th>Subjects</th>
                                      <th style="width:5%;">Remove </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr></tr>
                                </tbody>
                              </table>
                            </div>
                            <input type="submit" id="submitSEITButton" name="submitSEIT" value="Submit" class="btn btn-primary">

                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Third Year
                          </button>
                        </h2>
                      </div>

                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <div>
                            <form class="form-inline">
                              <label class="mr-2" for="courseOutcome"><h4>Enter TE subjects: </h4></label>
                                <input type="button" class="add-subject-te btn btn-primary mb-1" value="+">
                            </form>
                            <form id="serialFormTE" action="" method="post">
                              <div>
                                <table id='teittable' class="table table-bordered" border="0">
                                  <thead>
                                    <tr>
                                        <th style="width:5%;">No.</th>
                                        <th>Subjects</th>
                                        <th style="width:5%;">Remove</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr></tr>
                                  </tbody>
                                </table>
                              </div>
                              <input type="submit" id="submitTEITButton" name="submitTEIT" value="Submit" class="btn btn-primary">
                            </form>
                        </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Fourth Year
                          </button>
                        </h2>
                      </div>

                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          <div>
                            <form class="form-inline">
                              <label class="mr-2" for="courseOutcome"><h4>Enter BE subjects: </h4></label>
                                <input type="button" class="add-subject-be btn btn-primary mb-1" value="+">
                            </form>
                            <form id="serialFormBE" action="" method="post">
                              <div>
                                <table id='beittable' class="table table-bordered" border="0">
                                  <thead>
                                    <tr>
                                        <th style="width:5%;">No.</th>
                                        <th>Subjects</th>
                                        <th style="width:5%;">Remove</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr></tr>
                                  </tbody>
                                </table>
                              </div>
                              <input type="submit" id="submitBEITButton" name="submitBEIT" value="Submit" class="btn btn-primary">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <!-- </div> -->
    </div>
    <div class="serialOutput">
    </div>



  <script type="text/javascript">
  $(document).ready(function() {

    $("#submitSEITButton").click(function() {
      // event.preventDefault();
      // console.log("Click");
      $.post( "../subjects/php/insertSEITData.php", $("#serialFormSE").serialize(), function(data){
      // $.post( "../subjects/php/insertSEITData.php", {name: "John"}, function(data){
        console.log(data);
      });
    }
  );

    $("#submitTEITButton").click(function() {
      // event.preventDefault();
      // console.log("Click");
      $.post( "../subjects/php/insertTEITData.php", $("#serialFormTE").serialize(), function(data){
      // $.post( "../subjects/php/insertSEITData.php", {name: "John"}, function(data){
        console.log(data);
      });
    }
  );

    $("#submitBEITButton").click(function() {
      // event.preventDefault();
      // console.log("Click");
      $.post( "../subjects/php/insertBEITData.php", $("#serialFormBE").serialize(), function(data){
      // $.post( "../subjects/php/insertSEITData.php", {name: "John"}, function(data){
        console.log(data);
      });
    }
    );
  });
  </script>
  </body>
</html>
