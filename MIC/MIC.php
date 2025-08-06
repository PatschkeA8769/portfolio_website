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
else {
  echo 'Connected.';
}*/
//Create database
/*$sql = 'CREATE DATABASE MIC';
if (mysqli_query($con, $sql)) {
  echo 'MIC created.';
}*/
//Select database
/*$select = mysqli_select_db($con, 'MIC');
if (!$select) {
  die();
}
else {
  echo 'Selected.';
}*/
$select = mysqli_select_db($con, '3670719_start');
if (!$select) {
  die();
} 
//Create table
$sql = 'CREATE TABLE Mochi (Id INT(255), PRIMARY KEY(Id), Product CHAR(255), Make CHAR(255), Description VARCHAR(6000), Price DECIMAL(4,2))';
if (mysqli_query($con, $sql)) {
  echo 'Mochi created.';
}
$sql = 'CREATE TABLE Vegan (Id INT(255), PRIMARY KEY(Id), Product CHAR(255), Make CHAR(255), Description VARCHAR(6000), Price DECIMAL(4,2))';
if (mysqli_query($con, $sql)) {
	echo '<br>Vegan created.';
}
$sql = 'CREATE TABLE Bits (Id INT(255), PRIMARY KEY(Id), Product CHAR(255), Make CHAR(255), Description VARCHAR(6000), Price DECIMAL(4,2))';
if (mysqli_query($con, $sql)) {
	echo '<br>Bits created.';
}
$sql = 'CREATE TABLE Season (Id INT(255), PRIMARY KEY(Id), Product CHAR(255), Make CHAR(255), Description VARCHAR(6000), Price DECIMAL(4,2))';
if (mysqli_query($con, $sql)) {
	echo '<br>Season created.';
}
//Insert data
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (1, 'Chocolate Sundae', 'Mochi Ice Cream', 'Blow your mind''s mind with MIC''s new creation: decadent premium ice cream wrapped in magnificent, pillowy mochi dough&mdash;all surrounding an extra special layer of delectable flavor. A right-side out version of a classic sundae. Premium vanilla bean ice cream covered in chocolate-flavored mochi dough and stuffed with a cherry center. Chocolate Sundae MIC Mochi Ice Cream is truly the cherry on top.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Chocolate Sundae created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (2, 'Dulce De Leche', 'Mochi Ice Cream', 'Blow your mind''s mind with MIC''s new creation: decadent premium ice cream wrapped in magnificent, pillowy mochi dough&mdash;all surrounding an extra special layer of delectable flavor. Dulce de Leche MIC Mochi Ice Cream features creamy coffee ice cream with milky, melty in-your-mouth caramel center. Que fabuloso!', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Dulce De Leche created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (3, 'Vanilla Blueberry', 'Mochi Ice Cream', 'Blow your mind''s mind with MIC''s new creation: decadent premium ice cream wrapped in magnificent, pillowy mochi dough&mdash;all surrounding an extra special layer of delectable flavor. Creamy vanilla bean ice cream is wrapped in pillowy mochi dough all wrapped around gooey, bluey blueberry.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Vanilla Blueberry created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (4, 'S''mores', 'Mochi Ice Cream', 'Blow your mind''s mind with MIC''s new creation: decadent premium ice cream wrapped in magnificent, pillowy mochi dough&mdash;all surrounding an extra special layer of delectable flavor. Chocolate mochi dough wrapped around premium graham cracker ice cream filled with marshmallow&mdash;it''s okay to ask for s''more.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'S\'mores created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (5, 'Sweet Mango', 'Mochi Ice Cream', 'Take an instant trip to Tropical Delicioustown with Sweet Mango MIC Mochi Ice Cream! The tangy and sweet taste of premium mango ice cream combined with mouthfuls of mochilicious dough gives your cravings their own craving. Sweet Mango MIC&mdash;the perfect, handheld getaway.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Sweet Mango created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (6, 'Ripe Strawberry', 'Mochi Ice Cream', 'Bite into the center of Mmmm. Made with real fruit, and bursting with sweet bits of strawberry love. Premium strawberry ice cream is wrapped in a pillowy layer of chewy mochi dough. Discover an entirely new experience around your favorite ice cream flavor.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Ripe Strawberry created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (7, 'Cookies \& Cream', 'Mochi Ice Cream', 'Cookies \& Cream MIC Mochi Ice Cream is the perfect combination of rich, premium ice cream and crisp, chocolatey cookies wrapped in mushy, mochi dough. A new kind of yum in your handheld snack...because nobody craves same-old.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Cookies \& Cream created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (8, 'Green Tea', 'Mochi Ice Cream', 'Treat your tonsils to nom nom nirvana. Green Tea MIC Mochi Ice Cream is an invitation to exotic. Velvety green tea ice cream inside wrapped in masterfully crafted mochi dough. Take your tongue on a textural adventure&mdash;hallelujah!', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Green Tea created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (9, 'Double Chocolate', 'Mochi Ice Cream', 'Say \"My, Oh My!\" in a new way with Double Chocolate MIC Mochi Ice Cream. Crafted premium ice cream with fudge brownie bits creates a rich, milky, melty texture. Wrapped in masterly mind-blowing mouthfuls of mochi for a bit of good measure creating even more chocolatey chocolate deliciousness.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Double Chocolate created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (10, 'Vanilla Bean', 'Mochi Ice Cream', 'Vanilla Bean MIC Mochi Ice Cream is made using real vanilla beans, creating a new kind of yum in a snack. Classic, premium vanilla ice cream surrounded by melt-in-your-mouth mochi dough. MIC vanilla bean&mdash;it''s not for the vanilla at heart.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Vanilla Bean created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (11, 'Salted Caramel', 'Mochi Ice Cream', 'Salty meets sweet in MIC Salted Caramel Mochi Ice Cream, made to make your mouth water while it juggles savory and decadent flavors. Add ooey, gooey mochi dough to the mix and you''ve got the ultimate snackdown.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Salted Caramel created.';
}
$sql = "INSERT INTO Mochi (Id, Product, Make, Description, Price) VALUES (12, 'Mint Chocolate Chip', 'Mochi Ice Cream', 'Play for your hands. Flavor for your mouth. Feel the cool of Mint Chocolate Chip MIC Mochi Ice Cream. Premium mint ice cream studded with pure chocolate chips then wrapped in a layer of ooey-gooey chewy mochi dough. It''s like whispered sweet nothings to your taste buds.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Mint Chocolate Chip created.';
}
$sql = "INSERT INTO Vegan (Id, Product, Make, Description, Price) VALUES (1, 'Salted Caramel', 'Mochi Cashew Cream Frozen Dessert', 'Say \"Heeey!\" to salted smooth caramel, meticulously mixed into epically creamy creaminess then wrapped in a mound of mushy, melty mochi dough. Tantalize your taste-buds with this salty-sweet symphony.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Salted Caramel created.';
}
$sql = "INSERT INTO Vegan (Id, Product, Make, Description, Price) VALUES (2, 'Vanilla', 'Mochi Cashew Cream Frozen Dessert', 'Basic is boring and boring ain''t in the vocabulary. Vanilla MIC is the handsome younger brother of an age-old classic. This creamy concoction of doughy delectability is loaded with a villainous amount of vanilla creaminess and wrapped in a mound of melt-in-your mouth mochi dough. It''s the most adventurous you''ll ever feel eating vanilla.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Vanilla created.';
}
$sql = "INSERT INTO Vegan (Id, Product, Make, Description, Price) VALUES (3, 'Strawberry', 'Mochi Cashew Cream Frozen Dessert', 'What''s the square root of \"Mmmm\"? Uh, \"A-maaa-zing!\" This deliciously divine combination of silky smooth strawberry creaminess and pillowy mochi dough puts your snack fantasy right in the tips of your fingers. Strawberry MIC is a sweet-talker to your mouth made with real fruit pieces for that extra bit of \"Oh Yeah!\"', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Strawberry created.';
}
$sql = "INSERT INTO Vegan (Id, Product, Make, Description, Price) VALUES (4, 'Chocolate', 'Mochi Cashew Cream Frozen Dessert', 'Chock full of chocolatey chocolate, each MIC mochi ball is carefully crafted by our Mochi Masters to ensure the proportions of ooey to gooey and silky to smooth. The chocolately flavor in each bite will blow your mouths mind one chew at a time.', 4.99)";
if (mysqli_query($con, $sql)) {
    echo 'Chocolate created.';
}
$sql = "INSERT INTO Bits (Id, Product, Make, Description, Price) VALUES (1, 'Salted Caramel', 'Ice Cream with Mochi Bits', 'Introducing a miraculous match of marvelously mouthwatering premium ice cream wrapped around magnificent bits of mushy, melty mochi dough. It''s your favorite snack remixed for a new take on play. Delight your taste buddies with scoops of salty creaminess and cool craveable caramel.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Salted Caramel created.';
}
$sql = "INSERT INTO Bits (Id, Product, Make, Description, Price) VALUES (2, 'Green Tea', 'Ice Cream with Mochi Bits', 'Introducing a miraculous match of marvelously mouthwatering premium ice cream wrapped around magnificent bits of mushy, melty mochi dough. It''s your favorite snack remixed for a new take on play. Scoop up a bit of Zen with a Green Tea classic.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Green Tea created.';
}
$sql = "INSERT INTO Bits (Id, Product, Make, Description, Price) VALUES (3, 'Mango', 'Ice Cream with Mochi Bits', 'Introducing a miraculous match of marvelously mouthwatering premium ice cream wrapped around magnificent bits of mushy, melty mochi dough. It''s your favorite snack remixed for a new take on play. Take your spoon on a flavor adventure to the tropics with Mango Ice Cream with Mochi Bits.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Mango created.';
}
$sql = "INSERT INTO Bits (Id, Product, Make, Description, Price) VALUES (4, 'Strawberry', 'Ice Cream with Mochi Bits', 'Introducing a miraculous match of marvelously mouthwatering premium ice cream wrapped around magnificent bits of mushy, melty mochi dough. It''s your favorite snack remixed for a new take on play. Scoop into the center of Mmmm with bright Strawberry deliciousness.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Strawberry created.';
}
$sql = "INSERT INTO Bits (Id, Product, Make, Description, Price) VALUES (5, 'Chocolate', 'Ice Cream with Mochi Bits', 'Introducing a miraculous match of marvelously mouthwatering premium ice cream wrapped around magnificent bits of mushy, melty mochi dough. It''s your favorite snack remixed for a new take on play. Spoonful after spoonful of Chocolate&mdash;''nuff said.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Chocolate created.';
}
$sql = "INSERT INTO Season (Id, Product, Make, Description, Price) VALUES (1, 'Cool Peppermint', 'Mochi Ice Cream', 'Deck the halls with balls of MIC Cool Peppermint Mochi Ice Cream! A spin on a classic holiday favorite&mdash;milky, melty peppermint flavored ice cream sprinkled with crunchy minty bits, all wrapped in chewy, pillowy mochi dough. It''s the wintery blast of peppermint coolness your mouth will crave this holiday season.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Cool Peppermint created.';
}
$sql = "INSERT INTO Season (Id, Product, Make, Description, Price) VALUES (2, 'Pumpkin Spice', 'Mochi Ice Cream', 'Your favorite girl band just got their newest member: Pumpkin Spice. A not-so-basic combo of real pumpkin, graham cracker crumbs and a sprinkling of holiday spices like nutmeg, cloves and cinnamon. They''re like pillowy balls of creamy hallelujah!', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Pumpkin Spice created.';
}
$sql = "INSERT INTO Season (Id, Product, Make, Description, Price) VALUES (3, 'Apple Pie a&#768; la Mode', 'Mochi Ice Cream', 'Ooh la Apple Pie a&#768; la Mode! MIC Ice Cream adds a new kind of yum to your holiday snack. A droolworthy combination of cinnamon spicy apple filling inside creamy vanilla ice cream, surrounded by ooey, gooey pillowy mochi dough. Your holiday just got a whole new tradition.', 3.99)";
if (mysqli_query($con, $sql)) {
    echo 'Apple Pie &#133; la Mode created.';
}
mysqli_close($con);
?>
