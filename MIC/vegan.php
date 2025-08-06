<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_WARNING);
include 'array.php';
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
		<meta name="title" content="Mochi Ice Cream | Home">
		<meta name="description" content="Mochi Ice Cream is a miraculous match of magnificent mochi dough with marvelously mouthwatering ice cream. Find your favorite flavor and buy it here online!">
		<title>MIC | Non-Diary &#38; Vegan</title>
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
			<header id="shophead">
        <h1>Your Favorite Mochi Ice Cream Now<br><span>Non-Dairy and Vegan</span></h1>
      </header>
			<button id="btn">Top</button>
			<main id="shop">
				<img src="Images/squiggly.png" id="squiggly">
				<form action="cart.php" method="post">
					<?php
					foreach ($mochi as $k => $v) {
						if ($k > 112 and $k <= 116) {
							echo '<table><tr><td rowspan=5 class="pimg">';
							echo $v['imag'];
							echo '</td><td class="product">';
							echo $v['prod'];
							echo '</td></tr>';
							echo '<tr><td class="makeup">';
							echo $v['make'];
							echo '</td></tr>';
							echo '<tr><td class="descrip">';
							echo $v['desc'];
							echo '</td></tr>';
							echo '<tr><td class="pricepe">';
							echo 'Price Per Unit: &nbsp;$' . number_format($mochi[$k]['price'],2);
							echo '</td></tr>';
							echo '<tr><td class="quantity">Quantity: &nbsp;';
							echo '<input type=number  min="0" name="a_qty[' . $k . ']" class="qinput">';
							echo '</td></tr></table>';
							echo '<table><tr><td class="lt"></td><td class="hr"></td><td class="rt"></td></tr>';
							echo '<tr><td class="bot"></td></tr></table>';
						}
					}
				?>
				<table>
					<tr>
						<td class="atc">
							<input type="submit" name="add" value="Add to Cart">
						</td>
						<td class="gtc">
							<a href="cart.php">Go to Cart</a>
						</td>
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
