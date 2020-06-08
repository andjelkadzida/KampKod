<?php
set_include_path("E:/XAMPP/htdocs/store/");
include("functions.php");
session_start();
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/store/css/oNamaStil.css">
	<link rel="stylesheet" href="/store/css/navigacija.css">
	<title>Politika privatnosti</title>
</head>
<body>
<img src="/store/slike/logo.jpg">
<h1>Politika privatnosti</h1>
<h2>Prikupljanje podataka</h2>
<p>Platforma "Kamp kod" (u daljem tekstu platforma) čuva podatke svojih korisnika koje oni ostave pri registraciji na istu.</p>
<p>Podaci koje sajt može prikupiti su operativni sistem korisnika, kao i podaci o browseru koji se koristi. Osim toga, sajt može prikupiti podatke o Vašoj lokaciji (u slučaju da vam je ista uključena). Prikupljeni podaci koriste se <strong>isključivo u svrhu analitike</strong>.</p>
<h2>Podaci ostavljeni prilikom registracije</h2>
<p>Prilikom registracije na platformu, potrebno je da ostavite sledeće lične podatke:</p>
<ul>
<li>Ime i prezime</li>
<li>E-mail adresa</li>
<li>Adresa stanovanja</li>
<li>Grad i poštanski broj</li>
<li>Država</li>
</ul>
<p>Ovi podaci su neophodni, kako biste mogli lakše da izvršite kupovinu naših kurseva.</p>
<h2>Podaci o platnim karticama</h2>
<p>Ukoliko plaćanje vršite online, koristeći neku od platnih kartica (Visa, Master, American), podaci o istima neće biti sačuvani, niti postoji mogućnost da iste sačuvate, kako biste ih koristili prilikom sledeće kupovine.<br>Zašto ne čuvamo ovakve podatke?<br>Podatke o karticama ne čuvamo zbog Vaše sigurnosti i sprečavanja mogućih zloupotreba od strane trećih lica.</p>
<h2>Prava korisnika</h2>
<p>Korisnici platforme imaju potpunu kontrolu nad svojim podacima. U svakom trenutku mogu izmeniti svoje lične podatke (osim korisničkog imena) na platformi. Ažurirani podaci biće vidljivi prilikom sledećeg logovanja na platformu. Resetovanje korisičke šifre omogućeno je klikom na link <a href="/store/user_password_forgot_view.php">Zaboravili ste šifru?</a> kome možete pristupiti prilikom logovanja na platformu.</p>
<p>Kao korisnik platforme, u svakom trenutku možete izbrisati Vaš korisnčki nalog, u slučaju da to želite.</p>
<h2>Izmena politike privatnosti</h2>
<p>Administratori platforme zadržavaju pravo promene politike privatnosti, bez prethodne najave korisnicima. U slučaju promene politike privatnosti, korisnici će biti obavešteni na mail ili prilikom sledećeg logovanja na istu. Ukoliko se korisnici ne slažu sa novom politikom privatnosti, potrebnoo je da o istom obaveste administratore putem e-mail adrese: <b><a href="mailto:office@kampkod.com">office@kampkod.com</a></b></p>
<h2>Izmena kurseva</h2>
<p>Administratori platforme zadržavaju pravo da dodaju nove kurseve na platfomu, kao i da menjaju ili brišu postojeće, bez prethodne najave korisnicima. Administratori se obavezuju da će blagovremeno obavestiti korisnike o promenama cena samih kurseva.</p>
<strong>U slučaju da imate bilo kakvu nedoumicu vezano za politiku privatnosti, molimo Vas kontaktirajte nas putem <a href="/store/kontakt_view.php">forme</a> ili na mail: <a href="mailto:office@kampkod.com">office@kampkod.com</a>.</strong>
</body>
<?php include("footer.php");?>
</html>