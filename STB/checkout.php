<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,  initial-scale=1.0">
  <meta name="title" content="Salmo The Baker's House | Checkout">
  <meta name="description" content="Salmo is famous for his sweetrolls and other baked goods.">
  <title>Salmo The Baker's House | Checkout</title>
  <link href="styles.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dekko&family=Sansita:wght@400;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7171ae1460.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="Images/STBlogo-72.png" sizes="72x72">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="hamburger.js"></script>
  <?php 
  $email = $discount = "";
  $emailErr = $discountErr =  "";
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $valid = true;
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
    if (empty($_POST['discount'])) {
      $discount = test_input($_POST['discount']);
    } else {
      $discount = test_input($_POST['discount']);
      if (!preg_match("/^[a-zA-Z]*$/",$discount)) {
        $discountErr = "* Only letters allowed";
        $valid = false;
      }
      if (strlen($discount) > 150) {
        $discountErr = "* Discount code can't be longer than 150 characters";
        $valid = false;
      }
    }
    if ($valid) {
      //Create connection
      $con = mysqli_connect('localhost','root','');
      if (!$con) {
        echo "Error.";
        die();
      }
      /*$con = mysqli_connect('fdb29.awardspace.net','3670719_start','4)D/cWZn54[P;/J4');
      if (!$con) {
        die();
      }*/
      //Select database
      $select = mysqli_select_db($con, 'STB');
      if (!$select)
      {
        die();
      }/* else {
        echo "Selected.";
      }*/
      /*$select = mysqli_select_db($con, '3670719_start');
      if (!$select)
      {
        die();
      }/* else {
        echo "Selected.";
      }*/
      // Create table
      // Update data
      /* $sql = "UPDATE Delivery SET Email = '$email', Discount = '$discount' WHERE Id=(SELECT max(Id) FROM Delivery)"; 
      if (mysqli_query($con, $sql)) {
        echo "Updated.";
      }*/
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
</head>
<body>
  <div id="container">
    <header id="products">
      <h2><a href="index.html">Salmo The Baker's House</a></h2>
      <h1>Checkout</h1>
    </header>
    <nav>
      <div id="h-menu">
        <img src="Images/menu-button-bg-shape.png" alt="menu button bg shape" usemap="#h-shape">
        <map name="h-shape" id="hamburger">
          <area shape="poly" coords="10,0,19,35,37,70,61,102,89,130,123,155,162,175,200,188,200,0,0">
        </map>
        <button id="h-button" aria-label="open drop-down menu"><i class="fas fa-bars"></i></button>
      </div>
      <div id="c-menu">
        <img src="Images/menu-button-bg-shape.png" alt="menu button bg shape" usemap="#c-shape">
        <map name="c-shape" id="cross">
          <area shape="poly" coords="10,0,19,35,37,70,61,102,89,130,123,155,162,175,200,188,200,0,0">
        </map>
        <button id="c-button" aria-label="close drop-down menu"><i class="fas fa-times"></i></button>
      </div>
      <div id="mobile-dropdown">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="reviews.html">Reviews</a></li>
          <li><a href="delivery.php">Delivery</a></li>
        </ul>
      </div>
    </nav>  
    <main>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
        <div id="checkout">
          <input type="email" name="email" id="email"><span><?php echo $emailErr;?></span>
          <label for="email">Email</label>
          <input type="text" name="discount" id="discount"><span><?php echo $discountErr;?></span>
          <label for="discount">Discount code</label>
        </div>
        <div id="submit">
          <input type="submit" id="review-order" value="Review Order"><input type="reset" value="Reset">
        </div>
      </form>
    </main>
    <footer id="products-footer">
      <a href="index.html"><img src="Images/STBlogo.png" alt="STB logo" id="STBlogo"></a>
      <p>Created by Amanda Patschke <i class="far fa-copyright"></i> 2019</p>
    </footer>
  </div>
</body>
</html>
<?php
//Fetch from database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($valid) {
    $sql = "SELECT * FROM Delivery WHERE Id=(SELECT max(Id) FROM Delivery)";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        echo "<div id='message'><p>Your order has been received! Check " . $email . " for your order verification.</p><div id='results'><h3>Order Summary:</h3>";
        echo "<p>Sweetcakes: " . $row['Cakes'] . "</p>";
        echo "<p>Bread Loaves: " . $row['Bread'] . "</p>";
        echo "<p>Sweetrolls: " . $row['Rolls'] . "</p>";
        echo "<p>Total Price: " . $row['Total'];
        if (!empty($discount)) {
          $total2 = $row['Total'] - 10;
            if ($total2 < 0) {
              $total2 = 0;
            } 
          echo " - 10 septims discount = " . $total2;
        }
        echo "</p><h3>Customer Information:</h3>";
        echo "<p>" . $row['FirstName'] . " " . $row['LastName'] . "</p>";
        echo "<p>" . $row['StreetAddress'] . "</p>";
        if (!empty($row['AddressLine2'])) {
          echo "<p>" . $row['AddressLine2'] . "</p>";
        }
        echo "<p>" . $row['City'] . " " . $row['State'] . " " . $row['Zip'] . "</p>";
        echo "<p>" . $row['Country'] . "</p>";
        echo "<h3>Payment</h3>";
        echo "<p>Credit Card ending with " . "0000" . "</p>";
      } 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  }
}
?>