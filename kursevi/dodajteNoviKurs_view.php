<?php
	set_include_path("E:/XAMPP/htdocs/store/");
    session_start();
    include("functions.php");
    getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/store/css/navigacija.css">
  <link rel="stylesheet" href="/store/css/noviKursevi.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Dodavanje novog kursa</title>
</head>
<body>
<div class="header">
    <h2>Dodajte novi kurs na platformu</h2>
  </div>
  <form method="post" action="/store/kursevi/dodajteNoviKurs.php" name="formaRegistracija" enctype="multipart/form-data">
    <div class="input-group">
      <label>Naziv kursa:</label>
      <input type="text" name="nazivK">
    </div>
    <div class="input-group">
      <label>Sadržaj kursa:</label>
      <textarea name="sadrzajK"></textarea>
    </div>
    <div class="input-group">
      <label>Autor kursa:</label>
     <textarea name="autorK"></textarea>
    </div>
    <div class="input-group">
      <label>Stara cena:</label>
      <input type="money" name="staraC">
    </div>
   <div class="input-group">
      <label>Nova cena:</label>
      <input type="money" name="novaC">
    </div>
    <div>
      <label>Izaberite sliku:</label>
      <input type="file" name="slikaK">   
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="ovo_je_falilo" name="dodajKurs">Dodajte kurs</button>
    </div>
</form>
<?php if(isset($_SESSION['postoji_greska'])): ?>
    <pre class="kurseviGreske">
      <?php print($_SESSION['greske']);?>
    </pre>
  <?php endif; ?>
</body>
</html>