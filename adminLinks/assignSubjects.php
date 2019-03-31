<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assign subject</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style media="screen">
    .btn-link {
      text-decoration: none!important;
    }
    .inline-block-child {
      display: inline-block;
    }
    .btn-width {
      width: 33%;
    }
    .br-card {
        line-height: 0.5px !important;
     }

    </style>

    <script type="text/javascript">
    function loadSubjects() {
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "../subjects/php/retrieveSubjectsSEIT.php?", true);
      xhttp.send();
    }

    $(document).ready(function() {

      $("#submitSEITSPM").click(function(event) {
        event.preventDefault();
        // console.log("Click");
        $.post("../subjectProfData/insertSPM.php", $("#spmseit").serialize(), function(data){
          console.log(data);
        });
      }
    );

    //   $("#submitTEITButton").click(function() {
    //     // event.preventDefault();
    //     // console.log("Click");
    //     $.post( "../subjects/php/insertTEITData.php", $("#serialFormTE").serialize(), function(data){
    //     // $.post( "../subjects/php/insertSEITData.php", {name: "John"}, function(data){
    //       console.log(data);
    //     });
    //   }
    // );
    //
    //   $("#submitBEITButton").click(function() {
    //     // event.preventDefault();
    //     // console.log("Click");
    //     $.post( "../subjects/php/insertBEITData.php", $("#serialFormBE").serialize(), function(data){
    //     // $.post( "../subjects/php/insertSEITData.php", {name: "John"}, function(data){
    //       console.log(data);
    //     });
    //   }
    //   );
    });
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
    <br><br><br><br>
    <div class="container">
      <div class="">
        <h1>Assign subjects: </h1>
        <div class="assignSection">

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne" style="background:transparent !important;">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Information Technology
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    <button class="btn btn-primary btn-sm col-sm-6 btn-width" data-toggle="collapse" href="#collapseSEIT" type="button" aria-expanded="false" aria-controls="collapseSEIT" onclick="loadSubjects()">
                      SE-IT
                    </button>
                    <button class="btn btn-primary btn-sm col-sm-6 btn-width" data-toggle="collapse" href="#collapseTEIT" type="button" aria-expanded="false" aria-controls="collapseTEIT">
                      TE-IT
                    </button>
                    <button class="btn btn-primary btn-sm col-sm-6 btn-width" data-toggle="collapse" href="#collapseBEIT" type="button" aria-expanded="false" aria-controls="collapseBEIT">
                      BE-IT
                    </button>
                  </p>

                    <div class="collapse" id="collapseSEIT">
                      <div class="card card-body">
                        <h5>Subjects for SEIT</h5>
                        <!-- <form id="spmseit" action="../subjectProfData/insertSPM.php" method="post"> -->
                        <form id="spmseit" action="" method="">

                          <div id="display">Subjects will be listed here...</div>

                          <div class="form-group">
                            <input type="submit" id="submitSEITSPM" class="btn btn-primary" name="" value="Submit">
                          </div>
                        </form>

                      </div>
                    </div>
                    <p></p>

                    <div class="collapse" id="collapseTEIT">
                      <div class="card card-body">
                        <p>Code: TEIT</p>
                      </div>
                    </div>
                    <p></p>

                    <div class="collapse" id="collapseBEIT">
                      <div class="card card-body">
                        <p>Code-BEIT</p>
                      </div>
                    </div>

                </div>
              </div>
            </div>

            <div class="card"></div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
