<?php
session_start();
require_once('connection.php');
$update_greska=false;

if(isset($_POST['update']))
{
	if(empty($_POST['imePrezime']) || empty($_POST['email']) || empty($_POST['adresa']|| empty($_POST['postanskiBroj']) || empty($_POST['grad'])|| empty($_POST['drzava'])))
	{
		$update_greska=true;
		$opis_greske = "Morate popuniti sva polja";
		print "<p>" .$opis_greske. "</p>";
	}
	if($update_greska)
	{
		$_SESSION['updateGreska'] = true;
		$_SESSION['opisGreske'] = $opis_greske;

		// Vrati  na update formu
		header("Location: user_profile_edit_view.php");
	}
	else
	{
		$_SESSION['updateGreska'] = false;
		
		$korisnikIme = $_POST['korisnickoIme'];
		$imePrez = $_POST['imePrezime'];
		$email = $_POST['email'];
		$adres = $_POST['adresa'];
		$postaBroj = $_POST['postanskiBroj'];
		$grad = $_POST['grad'];
		$drzava = $_POST['drzava'];

		$sqlUpdate = "UPDATE korisnici SET imePrezime = '$imePrez', email = '$email', adresa = '$adres', postanskiBroj = '$postaBroj', grad = '$grad', drzava = '$drzava' WHERE korisnickoIme = '$korisnikIme' ";

		$run =  mysqli_query($mysqli, $sqlUpdate);

		if($run)
		{
			header("location: user_profile.php");
		}
		else
		{
			echo "Izmena podataka nije uspela";
		}
		

	}
}
else
{
	header("Location: index.php");
}
?>
