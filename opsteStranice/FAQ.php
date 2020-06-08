<?php
set_include_path("E:/XAMPP/htdocs/store/");
include("functions.php");
session_start();
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/store/css/oNamaStil.css">
	<link rel="stylesheet" href="/store/css/navigacija.css">
</head>
<body>
<img src="/store/slike/logo.jpg">
<h1>Najčešće postavljana pitanja</h1>
<h2>Kako da se registrujem?</h2>
<p>Da biste se registrovali na platformu, potrebno je da u navigacionom meniju kliknete na "<a href="/store/user_register_view.php">Registrujte se</a>" i popunite formu.</p>
<h2>Kako da kupim kurs?</h2>
<p>Da biste izvršili kupovinu kursa, potrebno je da se ulogujete na platformu i dodate željeni kurs u korpu. Nakon toga potrebno je da kliknete na dugme <b>naplata</b> i izaberete način plaćanja.</p>
<h2>Kako mogu da platim kurs?</h2>
<p>Plaćanje možete izvršiti na dva načina:
<ol>
	<li>Keš</li>
	<li>Kartica</li>
</ol>
</p>
<p>Plaćanje "keš" je da Vam račun stigne na kućnu adresu, nakon čega ćete izvršiti uplatu u banci ili pošti.<br>Na slici ispod se nalazi primer uplatnice.</p>
<img src="/store/slike/primerUplatnice.png" class="uplatnica">
<p>Ukoliko uplatu vršite koristeći platnu karticu, potrebno je da prilikom kupovine izaberete način plaćanja "kartica", nakon čega ćete biti preusmereni na formu za unos podataka sa platne kartice.</p>
<p>Potrebna su dva radna dana od trenutka uplate, kako bi se ista proknjižila i kako bi Vam dostavili materijale za učenje.</p>
<p>Cene na sajtu su izražene u eurima, dok se sama uplata vrši u dinarskoj protivvrednosti po zvaničkom prodajnom kursu NBS na dan plaćanja.</p>
<h3>Napomena za pravna lica</h3>
<p>Ukoliko uplatu vršite kao pravno lice, potrebno je da nam prethodno dostavite sledeće podatke o firmi:
<ul>
	<li>Pun naziv firme</li>
	<li>PIB</li>
	<li>Sedište firme</li>
	<li>Adresa</li>
	<li>Kontakt osoba</li>
	<li>Kontakt telefon</li>
</ul></p>
<h2>Kako dobijam kupljene kurseve?</h2>
<p>Kupljeni kursevi će Vam biti dostupni na platformi, po prijemu Vaše uplate.</p>
</body>
<?php include("footer.php");?>
</html>