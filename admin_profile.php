<?php
session_start();

include('navigacije/navigation_admin_loggedin.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/navigacija.css">
	<link rel="stylesheet" href="css/adminProfil.css">
</head>
<body>
	<img src="slike/logo.jpg">
<h1>Dobrodošli, <?php echo ucfirst($_SESSION['admin_data']['adminName']);?>!</h1>
<h2>
	Upravljanje kursevima
</h2>
<p>Kao administrator sajta imate možete dodavati kurseve, menjati ili brisati postojeće.</p>
<h2>
	Upravljanje korisnicima
</h2>
<p>Osim upravljanja kursevima, imate privilegiju da dodajete nove korisnike na platformu.</p>
<h2>Dodavanje administratora</h2>
	<p>Možete dodavati nove administratore na samu platformu.</p>
	<h3>Šta sve mogu korisnici i zašto ne mogu administratori?</h3>
	<p>Korisnici mogu da menjaju podatke na svom profilu ili da obrišu kompletan korisnički profil. Administratori nemaju pravo menjanja podataka ili brisanja naloga, kako korisnika, tako i drugih administratora, osim u slučaju da sami korisnici/drugi administratori to ne zahtevaju.<br>U tom slučaju, modifikacija podataka se vrši direktno u bazi podataka.</p>
</body>
<?php include("footer.php");?>
</html>