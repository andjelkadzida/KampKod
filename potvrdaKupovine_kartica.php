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
	<h2>Bićete preusmereni na sajt Vaše banke, radi provere Vašeg identiteta!</h2>
</div>
</body>
</html>