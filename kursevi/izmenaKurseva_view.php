<?php
set_include_path("E:/XAMPP/htdocs/store/");
session_start();
require_once("connection.php");
require_once("functions.php");
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detalji kurseva</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/store/css/navigacija.css">
	<link rel="stylesheet" type="text/css" href="/store/css/izmenaKurseva.css">
</head>
<body>
<img src="/store/slike/logo.jpg" id="logo">
	<?php 
	$var = $_GET['id'];
	 $upit = "SELECT * from kursevi where idKursa = '$var'";
    $rezultat = mysqli_query($mysqli,$upit);
    if($rezultat):
      if(mysqli_num_rows($rezultat)>0):
        while ($kurs=mysqli_fetch_assoc($rezultat)):
        	?>
        	<form method="post" action="/store/kursevi/izmenaKurseva_view.php?potvrdaIzmene&id=<?php echo $kurs['idKursa'];?>">
        	<div class="row">
          <h1>Osnovne informacije o kursu "<?php echo $kurs['nazivKursa'];?>"</h1>
          <img src="<?php echo 'data:ikonicaKursa/png;base64,'.base64_encode( $kurs['ikonicaKursa'] );?>"  width=410 height=463 class="img-responsive">
          <h2>Ko je autor kursa?</h2>
          <textarea name="autorK" cols="40" rows="5" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')"><?php echo $kurs['autorKursa'];?></textarea>
          <h2>Sadržaj kursa:</h2>
   		  <textarea name="sadrazjK" cols="40" rows="5" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')"><?php echo $kurs['sadrzajKursa'];?></textarea>
          <h3 class="text-info">Stara cena: &euro; <input type="money" name="staraC" value="<?php echo $kurs['staraCena'];?>" class="stara" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')"></h3>
          <h3 class="text-info">Cena kursa: &euro; <input type="money" name="cenaK" value="<?php echo $kurs['cenaKursa'];?>" class="nova" required oninvalid="this.setCustomValidity('Ovo polje je obavezno')" oninput="this.setCustomValidity('')" onautocomplete="this.setCustomValidity('')" onchange="this.setCustomValidity('')"></h3>
          <input type="submit" name="potvrdaIzmene" value="Potvrdite izmenu">
          <input type="reset" name="reset" value="Poništite unos">
</form>
<?php
endwhile;
endif;
endif;
?>
</body>
</html>
<?php
if(isset($_POST['potvrdaIzmene']))
{
	$id=filter_input(INPUT_GET, 'id');
	$autor=$_POST['autorK'];
	$cena=$_POST['cenaK'];
	$sadrzaj=$_POST['sadrazjK'];
	$stara=$_POST['staraC'];
	$upitA="UPDATE kursevi set sadrzajKursa='$sadrzaj', autorKursa='$autor', cenaKursa='$cena', staraCena='$stara' where idKursa='$id'";
	if(mysqli_query($mysqli,$upitA))
  {
     echo '<div align="left">'."<p style='color:red;'>"."Kurs je uspešno ažuriran!". "</p>". '</div>';
  }
  else
  {
     echo '<div align="left">'."<p style='color:red;'>"."Došlo je do greške. Molimo Vas pokušajte ponovo.". "</p>". '</div>';
  }

}
?>
     
     	