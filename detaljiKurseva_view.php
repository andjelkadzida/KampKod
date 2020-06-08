<?php
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
  <link rel="stylesheet" type="text/css" href="/store/css/kursevi.css">
	<link rel="stylesheet" type="text/css" href="/store/css/navigacija.css">
</head>
<body>
	<?php 
	$var = $_GET['id'];
	 $upit = "SELECT * from kursevi where idKursa = '$var'";
    $rezultat = mysqli_query($mysqli,$upit);
    if($rezultat):
      if(mysqli_num_rows($rezultat)>0):
        while ($kurs=mysqli_fetch_assoc($rezultat)):
        	?>
        	<form method="post" action="/store/detaljiKurseva_view.php?detalji&id=<?php echo $kurs['idKursa'];?>">
        	<div class="row">
          <h1>Osnovne informacije o kursu "<?php echo $kurs['nazivKursa'];?>"</h1>
          <img src="<?php echo 'data:ikonicaKursa/png;base64,'.base64_encode( $kurs['ikonicaKursa'] );?>"  width=410 height=463 class="img-responsive">
          <h2>Ko je autor kursa?</h2>
          <p class="text-info"><?php echo $kurs['autorKursa'];?></p>
          <h2>Sadržaj kursa</h2>
          <p><?php echo $kurs['sadrzajKursa'];?></p>
          <h3 class="text-info">Cena kursa: &euro; <?php echo $kurs['cenaKursa'];?></h3>
          <input type="hidden" name="sadrzaj" value="<?php echo $kurs['sadrzajKursa'];?>">
          <input type="hidden" name="autor" value="<?php echo $kurs['autorKursa'];?>">
          <input type="hidden" name="naziv" value="<?php echo $kurs['nazivKursa'];?>">
          <input type="hidden" name="cena" value="<?php echo $kurs['cenaKursa'];?>">
</form>
<?php
endwhile;
endif;
endif;
?>
</body>
</html>
     
     	