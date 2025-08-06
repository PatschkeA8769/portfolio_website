<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta name="title" content="Dark Souls Wiki | Login">
    <meta name="description" content="Everything you need to know about the game.">
    <title>Dark Souls Wiki | Login</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="Images/dark_sign.png" sizes="72x72">
    <?php
    //Validation
    $userErr = $passwordErr = "";
    $user = $password = "";
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
        //Query Value
        $sql = "SELECT * FROM Register WHERE Username = '$user' AND Password = '$password'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result) > 0) {
          // Start session
          session_start();
          $_SESSION['user'] = $user;
          $_SESSION['password'] = $password;
          mysqli_close($con);
          header ('Location: http://amandapatschke.com/DSW/index.php');
          exit();
        } else {
          $userErr = "* Username not found";
          $passwordErr = "* Incorrect password";
          mysqli_close($con);
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
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div>
            <label for="user">Username:</label>
            <input type="text" name="user" id="user"><span><?php echo $userErr;?></span> 
          </div>
          <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><span><?php echo $passwordErr;?></span>
          </div>
          <div>
            <input type="submit" value="Login">
          </div>
          <div>
            <a href="register.php">Register</a>
          </div>
        </form>
      </main>
      <footer>
        <p>Created by Amanda Patschke <i class="far fa-copyright fa-lg"></i> 2018</p>
      </footer>
    </div>
  </body>
</html>