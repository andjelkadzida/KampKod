<?php
session_start();
unset($_SESSION["korisnickoIme"]);
session_destroy();
session_start();
if( $_SESSION['admin_loged_in'] )
{
	header("Location: admin_profile.php");
}

require_once('connection.php');
require_once('functions.php');

$greska = false;

$tekstGreske = "";

//Provera da li je prazno

if(empty($_POST['adminName']) || empty($_POST['adminSifra']))
{
	$greska = true;

	$tekstGreske = "Morate popuniti sva polja!";

	print "<p>" .$tekstGreske. "</p>";
}
//ako nije
else
{
	$admin = get_admin($mysqli, $_POST['adminName']);

//provera korisnickog imena
	if(!$admin) 
	{
    	$greska = true;

    	$tekstGreske = "Admin ime koje ste uneli nije ispravno!";

    	print "<p>" .$tekstGreske. "</p>";
    
	}
//provera sifre
	else if(!password_verify($_POST['adminSifra'], $admin['adminPass']))
	{
    	$greska = true;	

    	$tekstGreske = "Šifra koju ste uneli nije ispravna!";

    	print "<p>" .$tekstGreske. "</p>";	
	}

	else 
	{
		$_SESSION['tekstGresaka'] = "";
		// mi smo ulogovani
		$_SESSION['admin_loged_in'] = true;
		$_SESSION['admin_data'] = $admin; 
		header("Location: admin_profile.php");
	}

}
//provera gresaka
if($greska)
{
	$_SESSION['loginGreska'] = true;

	$_SESSION['tekstGresaka'] = $tekstGreske;

	header("Location: admin_login_view.php");
			
}	
else
{
	$_SESSION['loginGreska'] = false;

	$_SESSION['tekstGresaka'] = "";


	header("Location: admin_profile.php");
}
	
?>