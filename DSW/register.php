<?php
ob_start();
//Validation
$userErr = $emailErr = $passwordErr = $conpassErr = "";
$user = $email = $password = $conpass = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $valid = true;
  if (empty($_POST['user'])) {
    $userErr = "* Username required";
    $valid = false;
  } else {
    $user = test_input($_POST['user']);
    if (!preg_match('/^[0-9a-zA-Z]{3,20}$/',$user)) {
      $userErr = "* Invalid username format";
      $valid = false;
    }
  }
  if (empty($_POST['email'])) {
    $emailErr = "* Email required";
    $valid = false;
  } else {
    $email = test_input($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Invalid email format";
      $valid = false;
    }
  }
  if (empty($_POST['password'])) {
    $passwordErr = "* Password required";
    $valid = false;
  } else {
    $password = test_input($_POST['password']);
    if (!preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}$/',$password)) {
      $passwordErr = "* Invalid password format";
      $valid = false;
    }
  }
  if ($_POST['password'] !== $_POST['conpass']) {
    $conpassErr = "* Password doesn't match";
    $valid = false;
  }
  if ($valid) {
    //Create connection
    /*$con = mysqli_connect('localhost','root','');
    if (!$con) {
      die();
    }*/
    $con = mysqli_connect('fdb29.awardspace.net','3670719_start','4)D/cWZn54[P;/J4');
    if (!$con) {
      die();
    }
    //Create database
    /*$sql = "CREATE DATABASE DSW";
      if (mysqli_query($con, $sql)) {
        echo 'Register created.';
    }*/
    //Select database
    /*$select = mysqli_select_db($con, 'DSW');
    if (!$select)
    {
      die();
    } else {
      echo "Selected.";
    }*/
    $select = mysqli_select_db($con, '3670719_start');
    if (!$select)
    {
      die();
    } else {
      echo "Selected.";
    }
    //Create table
    $sql = "CREATE TABLE Register (Id INT AUTO_INCREMENT, PRIMARY KEY(Id), Username CHAR(20), Email CHAR(254), Password CHAR(128))";
    if (mysqli_query($con, $sql)) {
      echo "Created.";
    }
    //Check for room in table and insert data
    $rowcount = "SELECT COUNT(*) FROM Register";
    if ($rowcount < 101) {
      $sql = "INSERT INTO Register (Username, Email, Password) VALUES ('$user',  '$email', '$password')";
    }
    if (mysqli_query($con, $sql)) {
      echo "Data inserted.";
      mysqli_close($con);
      header ('Location: http://amandapatschke.com/DSW/login.php');
      exit();
    }
  }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta name="title" content="Dark Souls Wiki | Register">
    <meta name="description" content="Everything you need to know about the game.">
    <title>Dark Souls Wiki | Register</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="Images/dark_sign.png" sizes="72x72">
  </head>
  <body>
    <div id="container">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="">Guides</a></li>
          <li><a href="">Builds</a></li>
        </ul>
      </nav>  
      <header>
        <img src="Images/artorias.jpg" alt="Artorias">
        <div>
          <h1>Dark Souls</h1>
          <h2>Wiki</h2>
        </div>
      </header>
      <main id="login-main">
        <h2>Registration</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div>
            <label for="user">Username:</label>
            <p>Username must be between 3 and 20 characters long and use only alphanumeric characters.</p>
            <input type="text" name="user" id="user"><span><?php echo $userErr;?></span> 
          </div>
          <div>
            <label for="email">Email address:</label>
            <input type="email" name="email" id="email"><span><?php echo $emailErr;?></span>
          </div>
          <div>
            <label for="password">Password:</label>
            <p>Password must be at least 6 characters long and use only alphanumeric characters. It must contain: an uppercase letter, a lowercase letter, a number.</p>
            <input type="password" name="password" id="password"><span><?php echo $passwordErr;?></span>
          </div>
          <div>
            <label for="conpass">Confirm password:</label>
            <input type="password" name="conpass" id="conpass"><span><?php echo $conpassErr;?></span>
          </div>
          <div>
            <input type="submit" value="Submit">
          </div>
          <div>
            <input type="reset" value="Reset">
          </div>
        </form>
      </main>
      <footer>
        <p>Created by Amanda Patschke <i class="far fa-copyright fa-lg"></i> 2018</p>
      </footer>
    </div>
  </body>
</html>