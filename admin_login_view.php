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
  <title>Logovanje na admin panel</title>
  <link rel="stylesheet" href="css/admin_login.css">
</head>
<body>
  <div class="header">
    <h2>Ulogujte se na admin panel</h2>
  </div>
  <form method="post" action = "admin_login.php">
    <div class="input-group">
      <label>Admin ime:</label>
      <input type="text" name="adminName">
    </div>
     <div class="input-group">
      <label>Admin šifra:</label>
      <input type="password" name="adminSifra">
      <a href="admin_password_forgot_view.php" class="zaboravljenaSifra">Zaboravili ste šifru?</a>
       <?php if(isset($_SESSION['loginGreska'])): ?>
    <pre class="loginGreska">
   <?php print($_SESSION['tekstGresaka']);?>
    </pre>
  <?php else:?>
  	<pre>
  	</pre>
    <?php endif; ?>	
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="log" name="adminLogin">Pristupite admin panelu</button>
    </div>
    </form>
</body>
</html>