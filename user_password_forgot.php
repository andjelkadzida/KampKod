<?php
session_start();
require_once("connection.php");
include("functions.php");
$greska=false;
$korisnik=get_user($mysqli, $_POST['korisnickoIme']);
if($_POST['resetujSifru'])
{
	if(empty($_POST['korisnickoIme']) || empty($_POST['sifra1']) || empty($_POST['sifra2']))
	{
		$greska=true;

		$poruka="Morate popuniti sva polja";

		print "<p>" .$poruka. "</p>";
	}
	if(!$korisnik)
	{
		$greska=true;

		$poruka="Korisničko ime koje ste uneli nije ispravno!";

		print "<p>" .$poruka. "</p>";
	}				
	if($_POST['sifra1'] !== $_POST['sifra2'])
	{
		$greska=true;

		$poruka="Lozinke se ne poklapaju!";

		print "<p>" .$poruka. "</p>";
	}
	if($greska)
	{
		$_SESSION['postoji_greska'] = true;
		$_SESSION['greske'] = $poruka;

			
		header("Location: user_password_forgot_view.php");
	}
	else
	{
		$_SESSION['postoji_greska'] = false;
		$korisnickoIme=$_POST['korisnickoIme'];
		$novaSifra=password_hash($_POST['sifra1'], PASSWORD_DEFAULT);
		$upit="UPDATE korisnici SET sifra = '$novaSifra' where korisnickoIme = '$korisnickoIme'";
		$izvrsenje=mysqli_query($mysqli,$upit);
		header("location: user_login_view.php");
	}
}

?>