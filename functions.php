<?php 

function check_mysqli($mysql)
{
	print_r($mysql);
}

//KORISNIK

/** Dupli korisnik **/
function user_exists($mysqli, $username)
{
	// Filter
	$username = htmlentities($username);

	// Query 
	$sql = "SELECT * FROM korisnici WHERE korisnickoIme = '$username'";

	//
	$result = mysqli_query($mysqli, $sql);

	return mysqli_num_rows($result);

}

/** Dodaj korisnika **/
function add_user($mysqli, $user_data)
{
	/** Podaci */
	$korIme = $user_data['korisnickoIme'];
	$korPod = $user_data['imePrezime'];
	$email  = $user_data['email'];
	$adresa = $user_data['adresa'];
	$postanskiBroj = $user_data['postanskiBroj'];
	$grad = $user_data['grad'];	
	$drzava = $user_data['drzava'];
	$sifra  = password_hash($user_data['sifra1'], PASSWORD_DEFAULT);

	$sql  = "INSERT INTO korisnici VALUES ( null, '$korIme', '$korPod', '$email', '$adresa', '$postanskiBroj', '$grad',  '$drzava', '$sifra')";

	return mysqli_query($mysqli, $sql);

}

/*uzmi korisnika*/
function get_user ($mysqli, $username)
{
	$upit = "SELECT * FROM korisnici WHERE korisnickoIme = '$username'";

	$rezult = mysqli_query($mysqli, $upit);

	return mysqli_fetch_assoc($rezult);
}

//ADMINISTRATOR

function get_admin($mysqli, $admin)
{
	$adminQuery = "SELECT * FROM admin WHERE adminName = '$admin'";

	$adminResult = mysqli_query($mysqli, $adminQuery);

	return mysqli_fetch_assoc($adminResult);
}

/** Dupli admin **/
function admin_exists($mysqli, $admin)
{

	$admin = htmlentities($admin);

	$AdminSql = "SELECT * FROM admin WHERE adminName = '$admin'";

	$adResult = mysqli_query($mysqli, $AdminSql);

	return mysqli_num_rows($adResult);

}

//Dodaj
function add_admin($mysqli, $admin_data)
{
	/** Podaci */
	$adIme = $admin_data['adminName'];
	$adPod = $admin_data['adImePrezime'];
	$adEmail  = $admin_data['adEmail'];
	$adSifra  = password_hash($admin_data['adSifra1'], PASSWORD_DEFAULT);

	$adminRegister  = "INSERT INTO admin VALUES ( null, '$adIme', '$adPod', '$adEmail', '$adSifra')";

	return mysqli_query($mysqli, $adminRegister);

}
//selektovanje kurseva
function get_course($mysqli, $kurs)
{
	$kursUpit = "SELECT * from kursevi where idKursa = '$kurs'";

	$res = mysqli_query($mysqli, $kursUpit);

	return mysqli_fetch_assoc($res);
}
//Navigacija na osnovu ulogovanog korisnika
function getNavigationByLoginStatus()
{
	if(isset($_SESSION['user_loged_in']))
	{
	  include("navigacije/navigation_user_loggedin.php");
	}
	if(isset($_SESSION['admin_loged_in']))
	{
	  include("navigacije/navigation_admin_loggedin.php");
	}
	if(!isset($_SESSION['admin_loged_in']) && !isset($_SESSION['user_loged_in']))
	{
	  include("navigacije/navigation.php"); 
	}
}

//Brisanje korisnika
function delete_user($mysqli,$korisnik)
{
	$brisanje = "DELETE FROM korisnici where korisnickoIme = '$korisnik'";

	return mysqli_query($mysqli, $brisanje);
}
//Selektovanje kursa prema nazivu
function get_course_name($mysqli,$kurs)
{
	$upit = "SELECT * from kursevi where nazivKursa = '$kurs'";

	$rezultat = mysqli_query($mysqli, $upit);

	return mysqli_fetch_assoc($rezultat);
}