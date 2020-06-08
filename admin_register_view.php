<?php 

session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registracija na admin panel</title>
  <link rel="stylesheet" href="css/admin_register.css">
  <script src ="js/skripte.js"></script>
</head>
<body>
  <div class="header">
    <h2>Registrujte se na admin panel</h2>
  </div>
  <form method="post" action="admin_register.php" name="formaRegistracija">
    <div class="input-group">
      <label>Admin ime:</label>
      <input type="text" name="adminName">
    </div>
    <div class="input-group">
      <label>Ime i prezime:</label>
      <input type="text" name="adImePrezime">
    </div>
    <div class="input-group">
      <label>E-mail:</label>
      <input type="email" name="adEmail">
    </div>
    <div class="input-group">
      <label>Šifra:</label>
      <input id="sifra1" type="password" name="adSifra1" onblur="passwordPattern()">
    </div>
   <div class="input-group">
      <label>Ponovite šifru:</label>
      <input id="sifra2" type="password" name="adSifra2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="ovo_je_falilo" name="adminRegister">Registrujte se</button>
    </div>
    <p>
      Imate nalog? <a href="admin_login_view.php">Ulogujte se na admin panel</a>
    </p>
  </form>
   <?php if(isset($_SESSION['greska_postoji'])):?>
    <pre class="registracijaGreske">
      <?php print($_SESSION['greske_opis']);?>
    </pre>
  <?php endif; ?>
</body>
</html>