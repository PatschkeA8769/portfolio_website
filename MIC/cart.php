<?php
error_reporting(E_ALL ^ E_WARNING);
include 'array.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Mochi Ice Cream | Home">
    <meta name="description" content="Mochi Ice Cream is a miraculous match of magnificent mochi dough with marvelously mouthwatering ice cream. Find your favorite flavor and buy it here online!">
    <title>MIC | Cart</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/7171ae1460.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="Images/miclogo-72.png" sizes="72x72">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="top_button.js"></script>
	</head>
	<body>
    <div id="container">
      <nav>
        <a href="index.html"><img src="Images/miclogo.png" alt="MIC logo" id="MIClogo"></a>
        <ul>
          <li><a href="#youtube" class="media" aria-label="youtube"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#twitter" class="media" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#instagram" class="media" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#facebook" class="media" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="about.html">About MIC</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        <div class="dropdown">
          <button class="dropbtn">Shop&nbsp;<i class="fas fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="mochi.php">Mochi Ice Cream</a>
            <a href="vegan.php">Non-Dairy &#38; Vegan</a>
            <a href="bits.php">Ice Cream with Mochi Bits</a>
            <a href="season.php">Seasonal</a>
          </div>
        </div>
      </nav>
			<header id="carthead">
        <h1><span>Your Shopping Cart</span></h1>
      </header>
      <button id="btn">Top</button>
			<main id="shop">
				<img src="Images/squiggly.png" id="cartsquiggly">
				<form action="cart.php" method="post">
					<?php
					$total = 0;
					if (is_array($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $k => $v) {
							if ($v > 0) {
								$subtotal = $v * $mochi[$k]['price'];
								$total += $subtotal;
								echo '<table><tr><td class="prunit">';
								echo $v . ' unit(s) of ' . $mochi[$k]['prod'];
								echo '</td><td class="quacart">New quantity: ';
								echo '<input type=number min="0" name="u_qty[' . $k . ']" class="qinput">';
								echo '</td></tr>';
								echo '<tr><td class="pricart">';
								echo 'Price per unit: &nbsp;$' . $mochi[$k]['price'];
								echo '</td><td class="pricart">';
								echo 'Sub-total: &nbsp;$' . sprintf('%0.2f', $subtotal);
								echo '</td></tr></table>';
								echo '<hr>';
							}
						}
					}
					?>
					<table>
						<tr>
							<td class="tal">TOTAL</td>
							<td class="tal">$<?php echo sprintf('%0.2f', $total)?></td>
						</tr>
					</table>
					<hr>
					<table>
						<tr>
							<td class="utc"><input type="submit" name="update" value="Update Cart"></td>
							<td class="ctc"><input type="submit" name="clear" value="Clear Cart"></td>
						</tr>
					</table>
					<table>
						<tr>
							<td class="ptc"><a href="#Checkout">Proceed to checkout</a></td><td></td>
						</tr>
					</table>
				</form>
			</main>
			<footer>
				<div id="flex-container">
					<div class="xlinks">
						<ul>
							<li><a href="#retail">Become A Retailer</a></li>
							<li><a href="#faqs">FAQs</a></li>
							<li><a href="#privacy">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="xlinks" id="xlinks2">
						<ul>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#press">Press</a></li>
							<li><a href="#media">Media</a></li>
						</ul>
					</div>
					<div id="title">
						<a href="index.html"><img src="Images/miclogo2.png" alt="MIC logo2" id="MIClogo2"></a>
					</div>
					<div id="newsletter">
						<p>Never Miss an Update</p>
            <form id="newsform" action="mailto:amandapatschke@yahoo.com" method="post" enctype="text/plain">
              <input type="email" placeholder="email address" name="email" maxlength="254" required>
              <input type="submit" value="sign up" name="submit">
            </form>
					</div>
				</div>
				<p>Created by Amanda Patschke <i class="far fa-copyright"></i> 2019</p>
			</footer>
		</div>
	</body>
	</html>
