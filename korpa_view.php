<?php
require("korpa.php");
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Korpa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/navigacija.css">
	<link rel="stylesheet"  href="css/korpa_view.css">
	<link rel="stylesheet"  href="css/naplata.css">
</head>
<body>
<div class="table-responsive">
		<table class="table">
			<tr><th colspan="5"><h3>Detalji narudžbine</h3></th></tr>
			<tr>
				<th width="40%">Naziv proizvoda</th>
				<th width="10%">Količina</th>
				<th width="20%">Cena</th>
				<th width="15%">Ukupno</th>
				<th width="5%">Akcija</th>
			</tr>
			<?php
			if(!empty($_SESSION['potrosacka_korpa'])):
				$ukupno=0;
				foreach ($_SESSION['potrosacka_korpa'] as $key => $kurs):
			?>
			<tr>
				<td><?php echo $kurs['naziv'];?></td>
				<td><?php echo $kurs['kolicina'];?></td>
				<td>&euro; <?php echo $kurs['cena'];?></td>
				<td>&euro; <?php echo number_format($kurs['kolicina']*$kurs['cena'], 2);?></td>
				<td>
					<a href="/store/korpa_view.php?action=delete&id=<?php echo $kurs['id'];?>" id="dugmeIzbaci">
						<div class="btn-izbaci">Izbaci</div>
					</a>

				</td>
			</tr>
			<?php
				$ukupno=$ukupno+($kurs['kolicina']*$kurs['cena']);
			endforeach;
			?>
			<tr>
				<td colspan="4" align="center"><strong>Ukupno: &euro; <?php echo number_format($ukupno,2);?></strong></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<?php
					if(isset($_SESSION['potrosacka_korpa'])):
						if(count($_SESSION['potrosacka_korpa'])>0):
					?>
					<form method="post" action="korpa_view.php" class="form">
					<input type="submit" name="naplata" value="Naplata" class="naplata">
					</form>
					<?php
				endif;
			endif;
					?>
					</td>
			</tr>
			<?php
		endif;
			?>
		</table>
	</div>
	<?php
	if(isset($_POST['naplata'])): 
	?>
 <div class="header">
	<h2>Podaci za naplatu i dostavu računa</h2>
</div>
	<form method="post" action="naplata.php" class="forma">
	<div class="input-group">
      <label>Ime i prezime:</label>
      <input type="text" name="imePrezime" value="<?php echo $_SESSION['user_data']['imePrezime'];?>" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Adresa:</label>
      <input type="text" name="adresa" value="<?php echo $_SESSION['user_data']['adresa'];?>" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Poštanski broj:</label>
      <input type="text" name="postanskiBroj" id="postanskiBroj" value="<?php echo $_SESSION['user_data']['postanskiBroj'];?>" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Grad:</label>
      <input type="text" name="grad" value="<?php echo $_SESSION['user_data']['grad'];?>" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="input-group">
      <label>Država:</label>
      <input type="text" name="drzava" value="<?php echo $_SESSION['user_data']['drzava'];?>" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
    </div>
    <div class="radio-button">
    	<label>Izaberite način plaćanja:</label>
    	<input type="radio" name="plati" value="kes" required oninvalid="this.setCustomValidity('Molimo Vas izaberite način plaćanja')" 
      oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')"> Keš
    	<input type="radio" name="plati" value="kartica" > Kartica
    </div>
    <div class="input-group">
    	<label>Ukupno za naplatu: <b>&euro; <?php echo number_format($ukupno, 2);?></b></label>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" value="potvrda" name="potvrda">Potvrdite</button>
    </div>
    <div class="input-group">
    	<button type="reset" class="btn-reset" value="reset" name="reset">Poništite</button>
    </div>
    </form>
    <?php
endif;
    ?>
</body>
</html>	