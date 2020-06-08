<?php
// Turn off all error reporting
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Logovanje</title>
  <link rel="stylesheet" href="css/user_login.css">
</head>
<body>
  <div class="header">
    <h2>Ulogujte se</h2>
  </div>
  <form method="post" action="user_login.php">
    <div class="input-group">
      <label>Korisničko ime:</label>
      <input type="text" name="korisnickoIme">
    </div>
     <div class="input-group">
      <label>Šifra:</label>
      <input type="password" name="sifra"><br>
       <a href="user_password_forgot_view.php" class="zaboravljenaSifra">Zaboravili ste šifru?</a>
       <?php if(isset($_SESSION['loginGreska'])): ?>
    <pre class="loginGreska">
   <?php print($_SESSION['tekstGresaka']);?>
    </pre>
  <?php else:?>
    <?php endif; ?>	
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="log" name="login">Ulogujte se</button>
    </div>
    <p>
      Nemate nalog? <a href="user_register_view.php">Registrujte se</a>
    </p>
    </form>
</body>
</html>