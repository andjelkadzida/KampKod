<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Logovanje</title>
  <link rel="stylesheet" href="css/admin_login.css">
  <script src ="js/skripte.js"></script>
</head>
<body>
  <div class="header">
    <h2>Resetujte lozinku</h2>
  </div>
  <form method="post" action="admin_password_forgot.php" name="formaRegistracija">
    <div class="input-group">
    	<div class="input-group">
      <label>Admin ime:</label>
      <input type="text" name="korisnickoIme">
    </div>
      <label>Nova šifra:</label>
      <input type="password" name="sifra1" id="sifra1" onblur="passwordPattern()">
    </div>
     <div class="input-group">
      <label>Ponovite šifru:</label>
      <input type="password" name="sifra2" id="sifra2">
       <?php if(isset($_SESSION['postoji_greska'])): ?>
    <pre class="loginGreska">
   <?php print($_SESSION['greske']);?>
    </pre>
  <? php else:?>
  	<pre>
  	</pre>
    <?php endif; ?>	
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="log" name="resetujSifru">Resetujte šifru</button>
    </div>
    </form>
</body>
</html>