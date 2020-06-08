<?php
set_include_path("E:/XAMPP/htdocs/store/");
include("functions.php");
session_start();
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uslovi korišćenja</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/store/css/oNamaStil.css">
	<link rel="stylesheet" href="/store/css/navigacija.css">
</head>
<img src="/store/slike/logo.jpg">
<body>
	<h1>Uslovi korišćenja</h1>
	<h2>Pravila ponašanja</h2>
	<p>Molimo Vas da se kao korisnik platforme ponašate primereno. Svaki uvredljiv komentar ili poruka, biće sankcionisani. Prvi nivo sankcija je slanje opomene korisniku na e-mail adresu. Ukoliko, nakon toga korisnik nastavi sa kršenjem pravila ponašanja, njegov nalog biće trajno uklonjen sa platforme.</p>
	<p>Na platformi je strogo zabranjen govor mržnje i vređanje korisnika i administratora po bilo kojoj osnovi (verskoj, rasnoj, političkoj...). Molimo Vas da međusobna komunikacija bude primerena i profesionalna.</p>
	<h2>Pravo na povraćaj novca</h2>
	<p>Svaki korisnik koji je prešao manje od 1/3 kursa ima pravo na povraćaj novca, ukoliko nije zadovoljan istim. Moguće troškove prilikom transakcija snosi korisnik.</p>
	<h2>Pravo na zamenu kursa</h2>
	<p>Kurs je moguće zameniti, samo u slučaju da nije započet. U slučaju da je započet i najmanji deo kursa, isti nije moguće zameniti.</p>
	<h2>Razlika u ceni zamenjenog kursa</h2>
	<p>Ukoliko vršite zamenu kursa za skuplji kurs, potrebno je da izvršite uplatu razlike u ceni, nakon čega će Vam kurs biti zamenjen.</p>
	<p>U slučaju da kurs menjate za jeftiji, imate opciju povraćaja razlike u novcu ili da Vam se cena sledećeg kursa umanji za taj iznos.</p>
</body>
<?php include("footer.php");?>
</html>