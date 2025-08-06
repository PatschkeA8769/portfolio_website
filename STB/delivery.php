<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width,  initial-scale=1.0">
  <meta name="title" content="Salmo The Baker's House | Delivery">
  <meta name="description" content="Salmo is famous for his sweetrolls and other baked goods.">
  <title>Salmo The Baker's House | Delivery</title>
  <link href="styles.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dekko&family=Sansita:wght@400;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7171ae1460.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="Images/STBlogo-72.png" sizes="72x72">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="hamburger.js"></script>
  <?php
  $cakesErr = $breadErr = $rollsErr = $totalErr = $F_nameErr = $L_nameErr = $streetErr = $address2Err = $cityErr = $stateErr = $zipErr = $countryErr = "";
  $cakes = $bread = $rolls = $F_name = $L_name = $street = $address2 = $city = $state = $zip = $country = "";
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $valid = true;
    $cakes = test_input($_POST['sweetcakes']);
    if (filter_var($cakes, FILTER_VALIDATE_INT) === 0 || filter_var($cakes, FILTER_VALIDATE_INT, array("options" => array("min_range"=>0, "max_range"=>10)))) {
      $valid = true;
    } else {
      $cakesErr = "* enter between 0 and 10";
      $valid = false;
    }
    $bread = test_input($_POST['bread']);
    if (filter_var($bread, FILTER_VALIDATE_INT) === 0 || filter_var($bread, FILTER_VALIDATE_INT, array("options" => array("min_range"=>0, "max_range"=>20)))) {
      $valid = true;
    } else {
      $breadErr = "* enter between 0 and 20";
      $valid = false;
    }
    $rolls = test_input($_POST['sweetrolls']);
    if (filter_var($rolls, FILTER_VALIDATE_INT) === 0 || filter_var($rolls, FILTER_VALIDATE_INT, array("options" => array("min_range"=>0,"max_range"=>50)))) {
      $valid = true;
    } else {
      $rollsErr = "* enter between  0 and 50";
      $valid = false;
    }
    if (empty($_POST['F_name'])) {
      $F_nameErr = "* First name required";
      $valid = false;
    } else {
      $F_name = test_input($_POST['F_name']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$F_name)) {
        $F_nameErr = "* Only letters, hyphens, apostrophes and whitespace allowed";
        $valid = false;
      }
      if (strlen($F_name) > 255) {
        $F_nameErr = "* First name can't be longer than 255 characters";
        $valid = false;
      }
    }
    if (empty($_POST['L_name'])) {
      $L_nameErr = "* Last name required";
      $valid = false;
    } else {
      $L_name = test_input($_POST['L_name']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$L_name)) {
        $L_nameErr = "* Only letters, hyphens, apostrophes and whitespace allowed";
        $valid = false;
      }
      if (strlen($L_name) > 255) {
        $L_nameErr = "* Last name can't be longer than 255 characters";
        $valid = false;
      }
    }
    if (empty($_POST['street'])) {
      $streetErr = "* street address required";
      $valid = false;
    } else {
      $street = test_input($_POST['street']);
    }
    if (strlen($street) > 255) {
      $streetErr = "* street address can't be longer than 255 characters";
      $valid = false;
    }
    if (!empty($_POST['address2'])) {
      $address2 = test_input($_POST['address2']);
    }
    if (strlen($address2) > 150) {
      $address2Err = "* address line 2 can't be longer than 150 characters";
      $valid = false;
    }
    if (empty($_POST['city'])) {
      $cityErr = "* city required";
      $valid = false;
    } else {
      $city = test_input($_POST['city']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
        $cityErr = "* only letters, hyphens, apostrophes and whitespace allowed";
        $valid = false;
      }
      if (strlen($city) > 255) {
        $cityErr = "* city can't be longer than 255 characters";
        $valid = false;
      }
    }
    if (empty($_POST['state'])) {
      $stateErr = "* state required";
      $valid = false;
    } else {
      $state = test_input($_POST['state']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$state)) {
        $stateErr = "* only letters, hyphens, apostrophes and whitespace allowed";
        $valid = false;
      }
      if (strlen($state) < 2 || strlen($state) > 255) {
        $stateErr = "* state can't be shorter than 2 or longer than 255 characters";
        $valid = false;
      }
    }
    if (empty($_POST['zip'])) {
      $zipErr = "* zip code required";
      $valid = false;
    } else {
      $zip = test_input($_POST['zip']);
      if (!preg_match("/^[0-9-]*$/",$zip)) {
        $zipErr = "* only numbers and hyphens allowed";
        $valid = false;
      }
      if (strlen($zip) > 15) {
        $zipErr = "* zip can't be longer than 15 characters";
        $valid = false;
      }
    }
    if (empty($_POST['country'])) {
      $countryErr = "* country required";
      $valid = false;
    } else {
      $country = test_input($_POST['country']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$country)) {
        $countryErr = "* only letters, hyphens, apostrophes and whitespace allowed";
        $valid = false;
      }
      if (strlen($country) > 255) {
        $countryErr = "* country can't be longer than 255 characters";
        $valid = false;
      }
    }
    if ($valid) {
      $cakes_price = $cakes * 3;
      $bread_price = $bread;
      $rolls_price = $rolls * 2;
      $total = $cakes_price + $bread_price + $rolls_price; //subtotal
      if (filter_var($total, FILTER_VALIDATE_INT) !== 0) {
        $valid = true;
      } else {
        $totalErr = "* total can't be 0";
        $valid = false;
      }
      //Create connection
      $con = mysqli_connect('localhost','root','');
      if (!$con) {
        die();
      }
      /*$con = mysqli_connect('fdb29.awardspace.net','3670719_start','4)D/cWZn54[P;/J4');
      if (!$con) {
        die();
      }*/
      //Create database
      $sql = 'CREATE DATABASE STB';
      if (mysqli_query($con, $sql)) {
        echo "STB created.";
      }
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
      //Create table
      $sql = 'CREATE TABLE Delivery (
        Id INT AUTO_INCREMENT, PRIMARY KEY(Id),
        Date DATETIME DEFAULT CURRENT_TIMESTAMP,
        Cakes TINYINT(255),
        Bread TINYINT(255),
        Rolls TINYINT(255),
        Total TINYINT(255),
        FirstName CHAR(255),
        LastName CHAR(255),
        StreetAddress CHAR(255),
        AddressLine2 CHAR(150),
        City CHAR(255),
        State CHAR(255),
        Zip CHAR(15),
        Country CHAR(255)/*,
        Email CHAR(254) NOT NULL,
        Discount CHAR(150) NOT NULL*/
      )';
      if (mysqli_query($con, $sql)) {
        echo "Created.";
      }
      //Insert data
      $sql = "INSERT INTO Delivery (Cakes, Bread, Rolls, Total, FirstName, LastName, StreetAddress, AddressLine2, City, State, Zip, Country) VALUES ('$cakes', '$bread', '$rolls', '$total', '$F_name', '$L_name', '$street', '$address2', '$city', '$state', '$zip', '$country')";
      //Insert data using session
      /*$_SESSION['cakes'] = $cakes;
      $_SESSION['bread'] = $bread;
      $_SESSION['rolls'] = $rolls;
      $_SESSION['total'] = $total;
      echo $cakes;
      echo $bread;
      echo $rolls;
      echo $total;*/
    }
    if (mysqli_query($con, $sql)) {
      echo "Data inserted.";
      mysqli_close($con);
      header ('Location: http://localhost/GitHub/portfolio_website/STB/checkout.php');
      exit();
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
      <h1>Delivery</h1>
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
      <img src="Images/bread-loaves.jpg" alt="bread loaves">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div id="units">
          <div class="units-label">
            <div>
              <label for="sweetcakes">Sweetcakes:</label>
              <p class="limit">up to 10 per order</p>
            </div>
            <div>
              <input type="number" name="sweetcakes" id="sweetcakes" value="0" onchange="calculateCakes(this.value); calculateTotal();"><span><?php echo $cakesErr;?></span>
            </div>
          </div>
          <div class="units-label">
            <div>
              <label for="bread">Bread Loaves:</label>
              <p class="limit">up to 20 per order</p>
            </div>
            <div>
              <input type="number" name="bread" id="bread" value="0" onchange="calculateBread(this.value); calculateTotal();"><span><?php echo $breadErr;?></span>
            </div>
          </div>
          <div class="units-label">
            <div>
              <label for="sweetrolls">Sweetrolls:</label>
              <p class="limit">up to 50 per order</p>
            </div>
            <div>
              <input type="number" name="sweetrolls" id="sweetrolls" value="0" onchange="calculateRolls(this.value); calculateTotal();"><?php echo '<span>' . $rollsErr . '</span>';?>
            </div>
          </div>
        </div>
        <div id="total">
          <div>
            <label for="subtotal">Subtotal:</label>
            <div>
                <div>
                  <input type="text" name="subtotal" id="subtotal" value="0" readonly>
                  <?php echo '<span>' . $totalErr . '</span>'; ?>
                </div>
                <p>Septims</p>
            </div>
          </div>
          <div>
            <p>Shipping:</p>
            <p>3 Septims</p>
          </div>
          <div>
            <label for="tax">Sales Tax:</label>
            <div>
              <input type="text" name="tax" id="tax" value="0" readonly>
              <p>Septims</p></div>
          </div>
        </div>
        <p>Prices are negotiable. Call Salmo at +1-202-555-0141 to haggle!</p>
        <fieldset>
          <legend>Shipping/Billing Address</legend>
          <input type="text" name="F_name" id="F_name"><span><?php echo $F_nameErr;?></span>
          <label for="F_name">First Name</label>
          <input type="text" name="L_name" id="L_name"><span><?php echo $L_nameErr;?></span>
          <label for="L_name">Last Name</label>
          <input type="text" name="street" id="street"><span><?php echo $streetErr;?></span>
          <label for="street">Street Address</label>
          <input type="text" name="address2" id="address2"><span><?php echo $address2Err;?></span>
          <label for="address2">Address Line 2</label>
          <div class="address">
            <div>
              <input type="text" name="city" id="city"><span><?php echo $cityErr;?></span>
              <label for="city">City</label>
            </div>
            <div>
              <input type="text" name="state" id="state"><span><?php echo $stateErr;?></span>
              <label for="state">State/Province/Region</label>
            </div>
          </div>
          <div class="address">
            <div>
              <input type="text" name="zip" id="zip"><span><?php echo $zipErr;?></span>
              <label for="zip">ZIP/Postal Code</label>
            </div>
            <div>
              <input type="text" name="country" id="country"><span><?php echo $countryErr;?></span>
              <label for="country">Country</label>
            </div>
          </div>
        </fieldset>
        <script>
          var cakes = 0;
          var bread = 0;
          var rolls = 0;
          function calculateCakes(val) {
            cakes = val * 3;
          }
          function calculateBread(val) {
            bread = val * 1;
          }
          function calculateRolls(val) {
            rolls = val * 2;
          }
          function calculateTotal() {
            var tot_price = parseInt(cakes) + parseInt(bread) + parseInt(rolls);
            var divobj = document.getElementById('subtotal');
            divobj.value = tot_price;
          }

        </script>
        <div id="submit">
          <input type="submit" value="Checkout"><input type="reset" value="Reset">
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