<?php
require("korpa.php");
if(isset($_POST['potvrda'])):
	if(isset($_POST['plati']))
  {
     $radioValue=$_POST['plati'];
    if($radioValue=="kartica")
    {
      unset($_SESSION['potrosacka_korpa']);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/naplata.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src ="js/skripte.js"></script>
	<title>Plaćanje karticom</title>
</head>
<body>
	<img src="slike/logo.jpg">
 <div class="header">
	<h2>Podaci o kartici</h2>
</div>
	<form class="forma-kartica" method="post" name="formaKartica" action="potvrdaKupovine_kartica.php">
	<div class="input-group">
      <label>Ime i prezime vlasnika kartice:</label>
      <input type="text" name="vlasnikKartice" id="vlasnikKartice" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Broj kartice:</label>
      <input type="text" name="brojKartice" id="brojKartice" required placeholder="XXXXXXXXXXXXXXXXXXXX" oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')" onblur="proveraBrojaKartice()">
    </div>
    <div class="input-group">
      <label>Datum isteka kartice:</label>
      <input type="month" name="datum" id="datum" onblur="dateValidation()" required oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Ovo polje je obavezno')">
    </div>
    <div class="input-group">
      <label>CVV:</label>
      <input type="text" name="cvv" id="cvv" onblur="proveraCVV()" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')" placeholder="XXX">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="potvrda" name="potvrda" id="potvrda">Potvrdite</button>
    </div>
    <div class="input-group">
    	<button type="reset" class="btn-reset" value="reset" name="reset">Poništite</button>
    </div>
    </form>
</body>
</html>
<?php
endif;
if(isset($_POST['plati']))
{
  $radioValue=$_POST['plati'];
  if($radioValue=="kes")
  {
    unset ($_SESSION['potrosacka_korpa']);
    header("location:potvrdaKupovine_kes.php");
  }
}
?>