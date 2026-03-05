<?php
ob_start();
//validation
$nameErr = $emailErr = $detailsErr = "";
$name = $email = $details = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $valid = true;
  if (empty($_POST['name'])) {
    $nameErr = "* Name required";
    $valid = false;
  } else {
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "* Only letters, hyphens, apostrophes and whitespace allowed";
      $valid = false;
    }
    if (strlen($name) > 255) {
      $nameErr = "* Name can't be longer than 255 characters";
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
  if (empty($_POST['details'])) {
    $detailsErr = "* Details required";
    $valid = false;
  } else {
    $details = test_input($_POST['details']);
    if (strlen($details) > 5000) {
      $detailsErr = "* Details can't be longer than 5000 characters";
      $valid = false;
    }
  }
  if ($valid) {
    //Create connection
    /*$con = mysqli_connect('localhost','root','');
    if (!$con) {
        die();
    } */
    $con = mysqli_connect('fdb29.awardspace.net','3670719_start','4)D/cWZn54[P;/J4');
    if (!$con) {
        die();
    }
    //Create database
    /*$sql = 'CREATE DATABASE Start';
    if (mysqli_query($con, $sql)) {
      echo 'Portfolio created.';
    }*/
    //Select database
    /*$select = mysqli_select_db($con, 'Start');
    if (!$select)
    {
      die();
    }/* else {
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
    $sql = 'CREATE TABLE Start (Id INT AUTO_INCREMENT, PRIMARY KEY(Id), Name CHAR(255), Email CHAR(254), Details VARCHAR(5000))';
    if (mysqli_query($con, $sql)) {
      echo "Created.";
    }
    //Check for room in table and insert database
    $rowcount = 'SELECT COUNT(*) FROM Start';
    if ($rowcount < 101) {
      $sql = "INSERT INTO Start (Name, Email, Details) VALUES ('$name',  '$email', '$details')";
    }
    if (mysqli_query($con, $sql)) {
      echo "Data inserted.";
      mysqli_close($con);
      header ('Location: http://amandapatschke.com/start2.php');
      exit();
    }
    //Insert data using sessions
    /*$_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['details'] = $details;
    $_SESSION['submit'] = $_POST[submit];
    //redirect
    /*header ('Location: http://localhost/start2.php');*/
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
    <meta name="title" content="Amanda Patschke | Start Project">
    <meta name="description" content="Web Developer and Designer">
    <title>Amanda Patschke | Start Project</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/favicon.png" sizes="72x72">
    <script src="https://kit.fontawesome.com/7171ae1460.js" crossorigin="anonymous"></script>
    <script>
    function goBack() {
      window.history.back();
    }
    </script>
  </head>
  <body>
    <div id="container">
      <nav id="startnav">
        <a href="index.html"><img src="Images/Alogo.png" alt="A logo" id="Alogo"></a>
        <ul>
          <li><a href="#" onclick="goBack()" title="close"><i class="fas fa-times fa-lg"></i></a></li>
          <li><a onclick="document.getElementById('form').reset()" title="reset"><i class="fas fa-undo-alt fa-lg"></i></a></li>
        </ul>
      </nav>
      <hr>
      <header id="starthead">
        <h1 id="startheadh1">I'm eager to learn about your project.<br>Fill me in on the details?</h1>
      </header>
      <main id="startmain">
        <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div id="rone"><div id="name"><label for="name">Name</label><input type="text" name="name" id="name"><span class="error"><?php echo $nameErr;?></span></div>
          <div><label for="email">Email</label><input type="email" name="email" id="email"><span class="error"><?php echo $emailErr;?></span></div></div>
          <label for="details">Additional Details</label>
          <textarea name="details" id="details" rows="7"></textarea><span class="error"><?php echo $detailsErr;?></span><br>
          <div id="buttons"><input type="submit" value="Submit" name="submit">
          <input type="reset"  value="Reset" name="feset"></div>
        </form>
      </main>
    </div>
  </body>
</html>
