<?php 
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registracija</title>
  <link rel="stylesheet" href="css/user_register.css">
  <script src ="js/skripte.js"></script>
</head>
<body>
  <div class="header">
    <h2>Registrujte se</h2>
  </div>
  <form method="post" action="user_register.php" name="formaRegistracija">
    <div class="input-group">
      <label>Korisničko ime:</label>
      <input type="text" name="korisnickoIme">
    </div>
    <div class="input-group">
      <label>Ime i prezime:</label>
      <input type="text" name="imePrezime" >
    </div>
    <div class="input-group">
      <label>E-mail:</label>
      <input type="email" name="email">
    </div>
    <div class="input-group">
      <label>Adresa:</label>
      <input type="text" name="adresa" >
    </div>
    <div class="input-group">
      <label>Poštanski broj:</label>
      <input type="text" name="postanskiBroj">
    </div>
    <div class="input-group">
      <label>Grad:</label>
      <input type="text" name="grad" >
    </div>   
    <div class="input-group">
      <label>Država:</label>
      <input type="text" name="drzava" >
    </div>
    <div class="input-group">
      <label>Šifra:</label>
      <input id="sifra1" type="password" name="sifra1" onblur="passwordPattern()">
    </div>
   <div class="input-group">
      <label>Ponovite šifru:</label>
      <input id="sifra2" type="password" name="sifra2">
    </div>
    <div>
      <input type="checkbox" name="prihvati"> Slažem se sa
      <a class="uslovi" style="margin-left: 2px; display: inline-block;" href="/store/opsteStranice/usloviKoriscenja.php">uslovima korišćenja</a> 
      <p style="margin-left: 2px; display: inline-block;">i</p> <a style="float:right; display: inline-block; margin-right: 55px;"class="uslovi" href="/store/opsteStranice/politikaPrivatnosti.php">politikom privatnosti</a></p>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="ovo_je_falilo" name="register">Registrujte se</button>
    </div>
    <p>
      Imate nalog? <a href="user_login_view.php">Ulogujte se</a>
    </p>
  </form>
  <?php if(isset($_SESSION['postoji_greska'])): ?>
    <pre class="registracijaGreske">
      <?php print($_SESSION['greske']);?>
    </pre>
  <?php endif; ?>
</body>
</html>