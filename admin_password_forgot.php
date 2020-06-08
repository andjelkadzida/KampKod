<?php
session_start();
require_once("connection.php");
include("functions.php");
$greska=false;
$admin=get_admin($mysqli, $_POST['korisnickoIme']);
if($_POST['resetujSifru'])
{
  if(empty($_POST['korisnickoIme']) || empty($_POST['sifra1']) || empty($_POST['sifra2']))
  {
    $greska=true;

    $poruka="Morate popuniti sva polja";

    print "<p>" .$poruka. "</p>";
  }
  if(!$admin)
  {
    $greska=true;

    $poruka="Admin ime koje ste uneli nije ispravno!";

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

      
    header("Location: admin_password_forgot_view.php");
  }
  else
  {
    $_SESSION['postoji_greska'] = false;
    $adminIme=$_POST['korisnickoIme'];
    $novaSifra=password_hash($_POST['sifra1'], PASSWORD_DEFAULT);
    $upit="UPDATE admin SET adminPass = '$novaSifra' where adminName = '$adminIme'";
    $izvrsenje=mysqli_query($mysqli,$upit);
    header("location: admin_login_view.php");
  }
}

?>