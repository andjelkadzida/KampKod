<?php 

// Start Session
session_start();
//Iskljucivanje notifikacija php
error_reporting(0);

// Load Connection and Function
require_once("connection.php");
require_once("functions.php");



// Set Errors
$is_error = false;

if( $_POST['register'] )
{
	if(empty($_POST['korisnickoIme']) || empty($_POST['imePrezime']) || empty($_POST['email']) || empty($_POST['sifra1'])|| empty($_POST['sifra2']) || empty($_POST['adresa']|| empty($_POST['postanskiBroj']) || empty($_POST['grad'])|| empty($_POST['drzava'])) || empty($_POST['prihvati']))
	{
		$is_error=true;
		$errors="Morate popuniti sva polja!";
		print "<p>" .$errors. "</p>";
	}
	// Kada se forma popuni 
	// Provera da li se lozinke poklapaju
	if($_POST['sifra1'] !== $_POST['sifra2'])
	{
		$is_error = true;
		$errors = "Lozinke se ne poklapaju!";
		print "<p>" .$errors. "</p>";
	}

	// Provera korisnika
	if(user_exists($mysqli, $_POST['korisnickoIme']))
	{
		$is_error = true;
		$errors = "Korisnik sa ovim imenom je već registrovan!";
		print "<p>" .$errors. "</p>";
	}

	// 
	if($is_error)
	{
		// Postoji greska
		$_SESSION['postoji_greska'] = true;
		$_SESSION['greske'] = $errors;

		// Vrati  na register formu
		header("Location: user_register_view.php");
	}
	else 
	{
		// Ponistimo greske
		$_SESSION['postoji_greska'] = false;

		// Registruj ga
		if(add_user($mysqli, $_POST))
		{
			header("Location: user_login_view.php");
		}
		else 
		{
			echo "Registracija nije uspela";
		}
	}
}
else 
{
	// Pokusaj direktnog pristupa stranici
	header("Location: index.php");
}
?>