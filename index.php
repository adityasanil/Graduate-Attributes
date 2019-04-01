<?php
include "connection.php";
// include "css/bar.php";


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_REQUEST['loginSubmit']))
{
    $username = test_input($_REQUEST['username']);
    $password = test_input($_REQUEST['userpass']);

    $loginAdmin = "SELECT * FROM Administrator WHERE Username ='$username'";
    $queryAdmin = mysqli_query($connect, $loginAdmin);
    $countAdmin = mysqli_num_rows($queryAdmin);
    $rowAdmin = mysqli_fetch_array($queryAdmin);

    $loginStaff = "SELECT * FROM ProfessorTable WHERE Username ='$username'";
    $queryStaff = mysqli_query($connect, $loginStaff);
    $countStaff = mysqli_num_rows($queryStaff);
    $rowStaff = mysqli_fetch_array($queryStaff);

    if ($countStaff > 0)
    {
      if ($password == $rowStaff['Password'])
          {
              // echo "<center><br>User found: " . $row['Name'] . "</center>";
              session_start();
              $_SESSION['sessionentery'] = $username;
              $user_session = $_SESSION['sessionentery'];
              // echo "Session: ".$_SESSION['sessionentery'];
              header("Location: ProfPage.php");
              // header("Location: checker/roleChecker.php");
          }
          else
            {
              echo "<script type='text/javascript'>alert('Invalid password (Staff)')</script>";
            }

    }
    else if ($countAdmin > 0)
    {
      if ($password == $rowAdmin['Password'])
          {
              // echo "<center><br>User found: " . $row['Name'] . "</center>";
              session_start();
              $_SESSION['sessionentery'] = $username;
              $user_session = $_SESSION['sessionentery'];
              // echo "Session: ".$_SESSION['sessionentery'];
              header("Location: AdminPage.php");
              // header("Location: checker/roleChecker.php");

          }
          else
            {
              echo "<script type='text/javascript'>alert('Invalid password (Admin)')</script>";
            }

    }
    else
    {
        echo "<script type='text/javascript'>alert('User does not exist')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<style media="screen">
  .loginCard {
    padding: inherit;
    padding-top: 150px;
    width: 450px;
  }
</style>

<body>

  <!-- LOGIN BODY -->
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <fieldset>
      <div class="container loginCard">
        <div class="jumbotron">
          <h1>Login in</h1>
          <p>Welcome to our project<p>
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label for="userpass">Password:</label>
          <input type="password" class="form-control" name="userpass" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label for="submitbutton">
            <input type="submit" name="loginSubmit" value="Submit" class="btn btn-primary">
          </label>
        </div>
      </div>
    </fieldset>


  </form>
</body>
</html>
