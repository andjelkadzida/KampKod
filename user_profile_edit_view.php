<?php
session_start();
error_reporting(0);
require_once('connection.php');
include('navigation_user_loggedin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/update_profile.css">
	<script src ="js/skripte.js"></script>
	<title>Izmena podataka</title>
</head>
<body>
	<div class="header">
		<h2>Izmenite Vaše podatke</h2>
	</div>
<form method="post" action="user_profile_edit.php" name="formaIzmenaPodataka">
	<div class="input-group">
      <label>Korisničko ime:</label>
      <input type="text" name="korisnickoIme" readonly="true" value="<?php echo $_SESSION['user_data']['korisnickoIme'];?>">
    </div>
    <div class="input-group">
      <label>Ime i prezime:</label>
      <input type="text" name="imePrezime" value="<?php echo $_SESSION['user_data']['imePrezime'];?>">
    </div>
    <div class="input-group">
      <label>E-mail:</label>
      <input type="email" name="email" value="<?php echo $_SESSION['user_data']['email']; ?>">
    </div>
    <div class="input-group">
      <label>Adresa:</label>
      <input type="text" name="adresa" value="<?php echo $_SESSION['user_data']['adresa'];?>">
    </div>
    <div class="input-group">
      <label>Poštanski broj:</label>
      <input type="text" name="postanskiBroj" value="<?php echo $_SESSION['user_data']['postanskiBroj'];?>">
    </div>
    <div class="input-group">
      <label>Grad:</label>
      <input type="text" name="grad" value="<?php echo $_SESSION['user_data']['grad'];?>">
    </div>
    <div class="input-group">
      <label>Država:</label>
      <input type="text" name="drzava" value="<?php echo $_SESSION['user_data']['drzava'];?>">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="update" name="update">Sačuvajte izmene</button>
    </div>
    <div class="input-group">
    	<button type="reset" class="btn-reset" value="reset" name="reset">Obriši sve</button>
    </div>
</form>
<?php if(isset($_SESSION['updateGreska'])): ?>
    <pre class="updateGreska">
      <?php print($_SESSION['opisGreske']);?>
    </pre>
  <?php endif; ?>
</body>
</html>
