<?php
include "connection.php";
// include "css/bar.php";
session_start();

$user_session = $_SESSION['sessionentery'];
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['submitProf']))
{
  $professorName = test_input($_REQUEST['profName']);
  $professorQualification = test_input($_REQUEST['profQualification']);
  $professorContact = test_input($_REQUEST['profContact']);
  $professorEmailID = test_input($_REQUEST['profEmail']);
  $professorDepartment = test_input($_REQUEST['profDept']);

  $nameArray = explode(" ", $professorName);
  // print_r($nameArray);
  $professorUsername = strtolower($nameArray[0] . "." . $nameArray[1]) ;

  $recepient = $professorEmailID;
  $subject = 'Project Password';
  $professorPass = mt_rand(10000, 99999);
  $message = 'Hello! ' . $professorName . ' Your Password: ' . $professorPass;
  $headers = 'From: project@sanil.com' . "\r\n" .
      'Reply-To: project@sanil.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
  mail($recepient, $subject, $message, $headers);


  // $UploadedFileName=$_FILES['profilePicture']['name'];
  // if($UploadedFileName!='')
  // {
  //   $fileTmp = $_FILES['profilePicture']['tmp_name'];
  //   $upload_directory = "Uploads/"; //This is the folder which you created just now
  //   $target_file = $upload_directory . basename($_FILES["profilePicture"]["name"]);
  //   // echo ":" .$target_file;
  //   echo ":2".$fileTmp;
  //   $filePath=$upload_directory.$UploadedFileName;
  //   if(copy($fileTmp, $target_file))
  //   {
  //     echo "Uploaded";
  //   }
  //   else{
  //     echo "   Failed";
  //   }
    // if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$filePath)){
      // $QueryInsertFile="INSERT INTO TableName SET ImageColumnName='$filePath'";
      // Write Mysql Query Here to insert this $QueryInsertFile   .

    // }
  // }

  $image = addslashes(file_get_contents($_FILES['profilePicture']['tmp_name']));


  $sql = "INSERT INTO ProfessorTable (Name, Username, Qualification, Contact, Email, Department, Password, Picture) VALUES ('$professorName', '$professorUsername', '$professorQualification', '$professorContact', '" . $professorEmailID . "', '$professorDepartment', '$professorPass', '$image')";
  if (mysqli_query($connect, $sql)){
    echo "<script>alert('Record entered successfully!');</script>";
  }
    else {
      echo "<script>alert('Failed to enter record.');</script>";
    }
}
else{
  // echo "Failed.";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Professor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style media="screen">
    .container{
      width: 80%;
    }
    </style>
  </head>
  <body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-inverse navbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">KJSIEIT</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="/Portal/AdminPage.php">Home</a></li>
          <li><a href="#">Option 2</a></li>
          <li><a href="#">Option 3</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="logout">
          <a class="btn btn-default" href="index.php" role="button">Logout</a>
        </form>
    </nav>

  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="jumbotron">
      <table class="table" border="0">
        <tbody>
          <tr>
            <td>
                <div class="form-group">
                  <label for="profName">Name: </label>
                  <input type="text" class="form-control" name="profName" placeholder="Enter name" required>
                  <small id="FileHelp" class="form-text text-muted">Enter first name and last name.</small>
                </div>
            </td>
            <td>
              <div class="form-group">
                <label for="profQualification">Qualification: </label>
                <input type="text" class="form-control" name="profQualification" placeholder="Enter first name" required>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <label for="profContact">Contact: </label>
                <input type="text" class="form-control" name="profContact" placeholder="Enter contact number" pattern="[789][0-9]{9}" required>
                <small id="FileHelp" class="form-text text-muted">Include country code.</small>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="profEmail">Email-ID: </label>
                <input type="email" class="form-control" name="profEmail" placeholder="Enter email-id" required>
                <small id="FileHelp" class="form-text text-muted">Enter email-id.</small>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- <div class="form-group"> -->
                <!-- <label for="profDept">Department: </label> -->
                <div class="btn-group">
                  <div class="form-group">
                  <label for="profDept">Select department:</label>
                  <select class="form-control" name="profDept">
                    <option value="COMPS">COMPS</option>
                    <option value="IT">IT</option>
                    <option value="ETRX">ETRX</option>
                    <option value="EXTC">EXTC</option>
                  </select>
                </div>
                <!-- <input type="text" class="form-control" name="profDept" placeholder="Select department" required> -->
                <!-- <small id="FileHelp" class="form-text text-muted">Include country code.</small> -->
              </div>
            </td>
            <td>
              <div class="btn-group">
                <div class="form-group">
                  <label for="profilePicture">Upload profile picture</label>
                  <input type="file" name="profilePicture">
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <input type="submit"class="btn btn-primary" name="submitProf" value="Submit">
              </div>
            </td>
          </tr>
        </tbody>
      </table>
  </form>
  </div>
</div>
</body>
</html>
