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
	<h1>Hvala što ste na kontaktirali!</h1>
</div>
<div class="obavestenje">
	<h2>Vaša poruka je uspešno poslata!</h2>
</div>
<div class="obavestenje">
	<h3>Odgovor ćete dobiti u najkraćem mogućem roku. Hvala na strpljenju!<h1 style="font-size: 120px;">&#x263A;</h1></h3>
</div>
</body>
</html>