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
    //Create connection
    $con = mysqli_connect('my-mysql','root','swiftwing');
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
      <?php
        //Fetch from database
        $sql = "SELECT * FROM Delivery WHERE Id=(SELECT max(Id) FROM Delivery)";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
            echo "<div id='message'><p>Your order has been received! Check " . $row['Email'] . " for your order verification.</p><div id='results'><h3>Order Summary:</h3>";
            echo "<p>Sweetcakes: " . $row['Cakes'] . "</p>";
            echo "<p>Bread Loaves: " . $row['Bread'] . "</p>";
            echo "<p>Sweetrolls: " . $row['Rolls'] . "</p>";
            $total2 = $row['Total'];
            if ($row['Discount'] != "") {
              $total2 = $row['Total'] - 10;
                if ($total2 < 0) {
                  $total2 = 0;
                } 
            }
            echo "<p>Total Price: " . $row['Total'] . " septims</p>";
            echo "</p><h3>Ship/Bill to:</h3>";
            echo "<p>" . $row['FirstName'] . " " . $row['LastName'] . "</p>";
            echo "<p>" . $row['StreetAddress'] . "</p>";
            if (!empty($row['AddressLine2'])) {
              echo "<p>" . $row['AddressLine2'] . "</p>";
            }
            echo "<p>" . $row['City'] . ", " . $row['State'] . " " . $row['Zip'] . "</p>";
            echo "<p>" . $row['Country'] . "</p>";
          } 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
      ?>
    </main>
    <footer id="products-footer">
      <a href="index.html"><img src="Images/STBlogo.png" alt="STB logo" id="STBlogo"></a>
      <p>Created by Amanda Patschke <i class="far fa-copyright"></i> 2019</p>
    </footer>
  </div>
</body>
</html>