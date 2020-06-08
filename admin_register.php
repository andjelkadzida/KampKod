<?php 

// Start Session
session_start();
//Iskljucivanje notifikacija php
error_reporting(0);

// Load Connection and Function
require_once("connection.php");
require_once("functions.php");



// Set Errors
$postoji_error = false;
	if($_POST['adminRegister'])
	{
		if(empty($_POST['adminName']) || empty($_POST['adImePrezime']) || empty($_POST['adEmail']) || empty($_POST['adSifra1'])|| empty($_POST['adSifra2']))
		{
			$postoji_error=true;
			$errors="Morate popuniti sva polja!";
			print "<p>" .$errors. "</p>";
		}
		// Kada se forma popuni 
		// Provera da li se lozinke poklapaju
		if($_POST['adSifra1'] !== $_POST['adSifra2'])
		{
			$postoji_error = true;
			$errors = "Lozinke se ne poklapaju!";
			print "<p>" .$errors. "</p>";
		}

		// Provera admina
		if(admin_exists($mysqli, $_POST['adminName']))
		{
			$postoji_error = true;
			$errors = "Administrator sa ovim imenom je već registrovan!";
			print "<p>" .$errors. "</p>";
		}

		// 
		if($postoji_error)
		{
			// Postoji greska
			$_SESSION['greska_postoji'] = true;
			$_SESSION['greske_opis'] = $errors;

			// Vrati  na register formu
			header("Location: admin_register_view.php");
		}
		else 
		{
			// Ponistimo greske
			$_SESSION['greska_postoji'] = false;

			// Registruj ga
			if(add_admin($mysqli, $_POST))
			{
				header("Location: admin_login_view.php");
			}
			else 
			{
				echo "Registracija nije uspela";
			}
		}
	}
else 
{
	// Vrati na pocetak
	header("Location: /store/index.php");
}
