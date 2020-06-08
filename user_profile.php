<?php
session_start();
error_reporting(0);
include('navigacije/navigation_user_loggedin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link rel="stylesheet" href="css/navigacija.css">
    <link rel="stylesheet" href="css/user_profile.css">
</head>
<body>
    <img src="slike/logo.jpg" alt="Kamp kod">
	<h1>Vaši lični podaci</h1><br>
    <div class="klasa">
        <label>Korisničko ime:</label>
        <label><strong><?php echo $_SESSION['user_data']['korisnickoIme']; ?></strong></label><br><br>
    </div>
	<div class="klasa">
         <label>Ime i prezime:</label>
         <label><strong><?php echo $_SESSION['user_data']['imePrezime']; ?></strong></label><br><br>
    </div>
   <div class="klasa">
      <label>E-mail:</label>
        <label><strong><?php echo $_SESSION['user_data']['email']; ?></strong></label><br><br>
   </div>
    <div class="klasa">
         <label>Adresa:</label>
        <label><strong><?php echo $_SESSION['user_data']['adresa']; ?></strong></label><br><br>
    </div>
   <div class="klasa">
        <label>Poštanski broj:</label>
        <label><strong><?php echo $_SESSION['user_data']['postanskiBroj']; ?></strong></label><br><br>
   </div>
   <div class="klasa">
       <label>Grad:</label>
        <label><strong><?php echo $_SESSION['user_data']['grad']; ?></strong></label><br><br>
   </div>
    <div class="klasa">
         <label>Država:</label>
         <label><strong><?php echo $_SESSION['user_data']['drzava']; ?></strong></label><br><br>
    </div>
    <div class="izmena">
       <button value="izmena" name="izmena" id="izmena" onclick="location.href = 'user_profile_edit_view.php';">Izmenite podatke</button>
    </div>
    <form method="post" action="user_profile_delete.php">
    <div class="brisanje">
      <button type="submit" value="brisanje" name="brisanje" id="brisanje">Obrišite nalog</button> 
    </div>   
    </form>
</body>
</html>