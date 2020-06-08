<?php
include("functions.php");
session_start();
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/navigacija.css">
	<link rel="stylesheet" href="css/potvrdaKupovine.css">
	<title>Potvrda kupovine</title>
</head>
<body>
<img src="slike/logo.jpg">
<div class="obavestenje">
	<h1>Hvala što koristite naše usluge!</h1>
</div>
<div class="obavestenje">
	<h2>Račun će Vam biti dostavljen na adresu u roku od tri radna dana!</h2>
</div>
<div class="obavestenje">
	<h3>Ukoliko Vam isti ne stigne, molimo Vas <a href="kontakt_view.php">kontaktirajte nas</a></h3>
</div>
</body>
</html>