<?php
//Create connection
$con = mysqli_connect('fdb29.awardspace.net','3670719_start','4)D/cWZn54[P;/J4');
if (!$con) {
    die();
}
/*$con = mysqli_connect('localhost','root','');
if (!$con) {
    die();
}
/* else {
  echo 'Connected.';
} */
//Select database
/*$select = mysqli_select_db($con, 'MIC');
if (!$select) {
  die();
}
/*else {
  echo 'Selected.';
}*/
$select = mysqli_select_db($con, '3670719_start');
if (!$select) {
  die();
}
//Query Value
$sql = 'SELECT * FROM Mochi';
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
		$mochi_item['Id'] = $row['Id'];
		$mochi_item['Product'] = $row['Product'];
		$mochi_item['Make'] = $row['Make'];
		$mochi_item['Description'] = $row['Description'];
		$mochi_item['Price'] = $row['Price'];
		$mitems[] = $mochi_item;
	}
}
$mochi_item = array();

$sql = 'SELECT * FROM Vegan';
$result2 = mysqli_query($con,$sql);
if (mysqli_num_rows($result2) > 0) {
	while ($row2 = mysqli_fetch_array($result2)) {
		$vegan_item['Id'] = $row2['Id'];
		$vegan_item['Product'] = $row2['Product'];
		$vegan_item['Make'] = $row2['Make'];
    $vegan_item['Description'] = $row2['Description'];
    $vegan_item['Price'] = $row2['Price'];
 		$vitems[] = $vegan_item;
	}
}
$vegan_item = array();

$sql = 'SELECT * FROM Bits';
$result3 = mysqli_query($con,$sql);
if (mysqli_num_rows($result3) > 0) {
	while ($row3 = mysqli_fetch_array($result3)) {
    	$bits_item['Id'] = $row3['Id'];
    	$bits_item['Product'] = $row3['Product'];
			$bits_item['Make'] = $row3['Make'];
    	$bits_item['Description'] = $row3['Description'];
    	$bits_item['Price'] = $row3['Price'];
 			$bitems[] = $bits_item;
	}
}
$bits_item = array();

$sql = 'SELECT * FROM Season';
$result4 = mysqli_query($con,$sql);
if (mysqli_num_rows($result4) > 0) {
	while ($row4 = mysqli_fetch_array($result4)) {
    $season_item['Id'] = $row4['Id'];
    $season_item['Product'] = $row4['Product'];
		$season_item['Make'] = $row4['Make'];
    $season_item['Description'] = $row4['Description'];
    $season_item['Price'] = $row4['Price'];
 		$sitems[] = $season_item;
	}
}
$season_item = array();
// Start session
session_start();
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
//Mochi Ice Cream from database
$mochi = array(
	101 => array(
		'imag' => '<img src="Images/sundae-chocolate.png" alt="chocolate sundae">',
		'prod' => $mitems[0]['Product'],
		'make' => $mitems[0]['Make'],
		'desc' => $mitems[0]['Description'],
		'price' => $mitems[0]['Price']
	),
	102 => array(
		'imag' => '<img src="Images/dulce-de-leche.png" alt="dulce de leche">',
		'prod' => $mitems[1]['Product'],
		'make' => $mitems[1]['Make'],
		'desc' => $mitems[1]['Description'],
		'price' => $mitems[1]['Price']
	),
	103 => array(
		'imag' => '<img src="Images/blueberry-vanilla.png" alt="vanilla blueberry">',
		'prod' => $mitems[2]['Product'],
		'make' => $mitems[2]['Make'],
		'desc' => $mitems[2]['Description'],
		'price' => $mitems[2]['Price']
	),
	104 => array(
		'imag' => '<img src="Images/smores.png" alt="s\'mores">',
		'prod' => $mitems[3]['Product'],
		'make' => $mitems[3]['Make'],
		'desc' => $mitems[3]['Description'],
		'price' => $mitems[3]['Price']
	),
	105 => array(
		'imag' => '<img src="Images/sweet-mango.png" alt="sweet mango">',
		'prod' => $mitems[4]['Product'],
		'make' => $mitems[4]['Make'],
		'desc' => $mitems[4]['Description'],
		'price' => $mitems[4]['Price']
	),
	106 => array(
		'imag' => '<img src="Images/ripe-strawberry.png" alt="ripe strawberry">',
		'prod' => $mitems[5]['Product'],
		'make' => $mitems[5]['Make'],
		'desc' => $mitems[5]['Description'],
		'price' => $mitems[5]['Price']
	),
	107 => array(
		'imag' => '<img src="Images/cookies-cream.png" alt="cookies \& cream">',
		'prod' => $mitems[6]['Product'],
		'make' => $mitems[6]['Make'],
		'desc' => $mitems[6]['Description'],
		'price' => $mitems[6]['Price']
	),
	108 => array(
		'imag' => '<img src="Images/green-tea.png" alt="green tea">',
		'prod' => $mitems[7]['Product'],
		'make' => $mitems[7]['Make'],
		'desc' => $mitems[7]['Description'],
		'price' => $mitems[7]['Price']
	),
	109 => array(
		'imag' => '<img src="Images/double-chocolate.png" alt="double chocolate">',
		'prod' => $mitems[8]['Product'],
		'make' => $mitems[8]['Make'],
		'desc' => $mitems[8]['Description'],
		'price' => $mitems[8]['Price']
	),
	110 => array(
		'imag' => '<img src="Images/vanilla-bean.png" alt=""vanilla bean>',
		'prod' => $mitems[9]['Product'],
		'make' => $mitems[9]['Make'],
		'desc' => $mitems[9]['Description'],
		'price' => $mitems[9]['Price']
	),
	111 => array(
		'imag' => '<img src="Images/salted-caramel.png" alt="salted caramel">',
		'prod' => $mitems[10]['Product'],
		'make' => $mitems[10]['Make'],
		'desc' => $mitems[10]['Description'],
		'price' => $mitems[10]['Price']
	),
	112 => array(
		'imag' => '<img src="Images/mint-chip.png" alt="mint chocolate chip">',
		'prod' => $mitems[11]['Product'],
		'make' => $mitems[11]['Make'],
		'desc' => $mitems[11]['Description'],
		'price' => $mitems[11]['Price']
	),
	113 => array(
		'imag' => '<img src="Images/vegan-caramel.png" alt="salted caramel">',
		'prod' => $vitems[0]['Product'],
		'make' => $vitems[0]['Make'],
		'desc' => $vitems[0]['Description'],
		'price' => $vitems[0]['Price']
	),
	114 => array(
		'imag' => '<img src="Images/vegan-vanilla.png" alt="vanilla">',
		'prod' => $vitems[1]['Product'],
		'make' => $vitems[1]['Make'],
		'desc' => $vitems[1]['Description'],
		'price' => $vitems[1]['Price']
	),
	115 => array(
		'imag' => '<img src="Images/vegan-strawberry.png" alt="strawberry">',
		'prod' => $vitems[2]['Product'],
		'make' => $vitems[2]['Make'],
		'desc' => $vitems[2]['Description'],
		'price' => $vitems[2]['Price']
	),
	116 => array(
		'imag' => '<img src="Images/vegan-chocolate.png" alt="chocolate">',
		'prod' => $vitems[3]['Product'],
		'make' => $vitems[3]['Make'],
		'desc' => $vitems[3]['Description'],
		'price' => $vitems[3]['Price']
	),
	117 => array(
		'imag' => '<img src="Images/bits-caramel.png" alt="salted caramel">',
		'prod' => $bitems[0]['Product'],
		'make' => $bitems[0]['Make'],
		'desc' => $bitems[0]['Description'],
		'price' => $bitems[0]['Price']
	),
	118 => array(
		'imag' => '<img src="Images/bits-tea.png" alt="green tea">',
		'prod' => $bitems[1]['Product'],
		'make' => $bitems[1]['Make'],
		'desc' => $bitems[1]['Description'],
		'price' => $bitems[1]['Price']
	),
	119 => array(
		'imag' => '<img src="Images/bits-mango.png" alt="mango">',
		'prod' => $bitems[2]['Product'],
		'make' => $bitems[2]['Make'],
		'desc' => $bitems[2]['Description'],
		'price' => $bitems[2]['Price']
	),
	120 => array(
		'imag' => '<img src="Images/bits-strawberry.png" alt="strawberry">',
		'prod' => $bitems[3]['Product'],
		'make' => $bitems[3]['Make'],
		'desc' => $bitems[3]['Description'],
		'price' => $bitems[3]['Price']
	),
	121 => array(
		'imag' => '<img src="Images/bits-chocolate.png" alt="chocolate">',
		'prod' => $bitems[4]['Product'],
		'make' => $bitems[4]['Make'],
		'desc' => $bitems[4]['Description'],
		'price' => $bitems[4]['Price']
	),
	122 => array(
		'imag' => '<img src="Images/cool-peppermint.png" alt="cool peppermint">',
		'prod' => $sitems[0]['Product'],
		'make' => $sitems[0]['Make'],
		'desc' => $sitems[0]['Description'],
		'price' => $sitems[0]['Price']
	),
	123 => array(
		'imag' => '<img src="Images/pumpkin-spice.png" alt="pumpkin spice">',
		'prod' => $sitems[1]['Product'],
		'make' => $sitems[1]['Make'],
		'desc' => $sitems[1]['Description'],
		'price' => $sitems[1]['Price']
	),
	124 => array(
		'imag' => '<img src="Images/apple-pie.png" alt="apple pie a&#768; la mode">',
		'prod' => $sitems[2]['Product'],
		'make' => $sitems[2]['Make'],
		'desc' => $sitems[2]['Description'],
		'price' => $sitems[2]['Price']
	)
);
if (isset($_POST['add'])) {
	foreach ($_POST['a_qty'] as $k => $v) {
		if ($v > 0) {
	 		$_SESSION['cart'][$k] = $v ;
		}
	}
}
else if (isset($_POST['update'])) {
	foreach ($_POST['u_qty'] as $k => $v) {
		if ($v != '' && $v >= 0) {
			$_SESSION['cart'][$k] = $v;
		}
	}
}
else if (isset($_POST['clear'])) {
	$_SESSION ['cart'] = array();
	session_destroy();
}
mysqli_close($con);
?>
