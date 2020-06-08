<?php
session_start();

// Ako se korisnik koji je registrovan pokusa
// prijaviti ponovo
if( $_SESSION['user_loged_in'] )
{
	header("Location: user_profile.php");
}

require_once('connection.php');
require_once('functions.php');

$greska = false;

$tekstGreske = "";
//Provera da li je prazno
if(empty($_POST['korisnickoIme']) || empty($_POST['sifra']))
{
	$greska = true;

	$tekstGreske = "Morate popuniti sva polja!";

	print "<p>" .$tekstGreske. "</p>";
}
//ako nije
else
{
	$user = get_user($mysqli, $_POST['korisnickoIme']);
//provera korisnickog imena
	if(!$user) 
	{
    	$greska = true;

    	$tekstGreske = "Korisničko ime koje ste uneli nije ispravno!";

    	print "<p>" .$tekstGreske. "</p>";
    
	}
//provera sifre
	else if(!password_verify($_POST['sifra'], $user['sifra'])) 
	{
    	$greska = true;	

    	$tekstGreske = "Šifra koju ste uneli nije ispravna!";

    	print "<p>" .$tekstGreske. "</p>";

	}

	else 
	{
		$_SESSION['tekstGresaka'] = "";
		// mi smo ulogovani
		$_SESSION['user_loged_in'] = true;
		$_SESSION['user_data'] = $user; 
		header("Location: user_profile.php");
	}

}
//provera gresaka
if($greska)
{
	$_SESSION['loginGreska'] = true;

	$_SESSION['tekstGresaka'] = $tekstGreske;

	header("Location: user_login_view.php");
			
}	
else
{
	$_SESSION['loginGreska'] = false;

	$_SESSION['tekstGresaka'] = "";

	header("Location: user_profile.php");
}
	
?>