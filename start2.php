<?php
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
    /*$select = mysqli_select_db($con, 'Portfolio');
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
    }/* else {
      echo "Selected.";
    }*/
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
          <li><a href="index.html" title="close"><i class="fas fa-times fa-lg"></i></a></li>
        </ul>
      </nav>
      <hr>
      <header id="start2head">
      <?php
      $myAwardSpaceEmail = "contact@amandapatschke.com";
      $myPersonalEmail = "amandapatschke@yahoo.com";
      //Fetch from sessions
      /*if(isset($_SESSION['submit'])) {
        $subject = "Start Project";
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $details = $_SESSION['details'];
        $headers = "From: Project Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        echo "Your message was sent successfully!" . $subject . $name . $email . $details;
        mail($myPersonalEmail, $subject, $details, $headers);
      }
      session_destroy();*/
      //Fetch from database
      $sql = "SELECT * FROM Start WHERE Id=(SELECT max(Id) FROM Start)";
      $result = mysqli_query($con,$sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $subject = "Start Project";
          $name = $row['Name'];
          $email = $row['Email'];
      	  $details = $row['Details'];
          $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
          $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
          mail($myPersonalEmail, $subject, $details, $headers);
          echo "<h1>Your form was successfully sent.<br>Please wait for an email in reply.</h1>";
        }
      }
      else {
        echo "<h1>There was an error.<br>Please try again later.</h1>";
      }
      /*$sql = 'DROP TABLE Start';
      $retval = mysqli_query($con,$sql);
      if(!$retval) {
        die();
      } else {
         echo "Deleted.";
      }*/
      mysqli_close($con);
      ?>
      </header>
    </div>
  </body>
</html>
