<?php
      error_reporting(0);
      session_start();
      require_once("connection.php");
      require_once("functions.php");
       getNavigationByLoginStatus();
?>
<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontaktirajte nas</title>
  <link rel="stylesheet" href="css/navigacija.css">
  <link rel="stylesheet" href="css/kontakt.css">
</haead>
<body>
<img src="slike/logo.jpg" alt="Kamp kod" id="baner">
  <div class="header">
    <h1>Kontaktirajte nas</h1>
  </div>
  <form method="post" action="kontakt.php" name="kontaktForma">
    <div class="input-group">
      <label>Ime i prezime:</label>
      <input type="text" name="imePrezime" placeholder="Anđelka Džida" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>E-mail:</label>
      <input type="email" name="mail" placeholder="example@mail.com" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Naslov poruke:</label>
      <input type="text" name="naslov" placeholder="Naslov poruke" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
   <div class="input-group">
      <label>Poruka:</label>
      <textarea name="poruka" rows="20" cols="30" placeholder="Unesite poruku..." required oninvalid="this.setCustomValidity('Ovo polje je obavezno')"  oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')"></textarea>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="ovo_je_falilo" name="kontaktForma">Pošaljite</button> 
    </div>
    <div class="input-group">
      <button type="reset" class="btn-reset" value="obrisi" name="obrisi">Poništite</button>
    </div>    
  </form>
  </pre>
</body>
</html>