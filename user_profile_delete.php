<?php
session_start();
require_once("connection.php");
require_once("functions.php");
if(isset($_POST['brisanje']))
{
	if(isset($_SESSION['user_loged_in']))
	{
		$korisnicko = $_SESSION['user_data']['korisnickoIme'];
		//print($korisnicko);
		delete_user($mysqli, $korisnicko);
		
	}
}
session_destroy();
getNavigationByLoginStatus();
header("location: index.php");
?>