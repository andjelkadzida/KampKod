<?php
session_start();
require_once("connection.php");
require_once("functions.php");
getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kamp kod</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/korpa.css">
  <link rel="stylesheet" href="css/navigacija.css">
  <link rel="stylesheet" href="css/stil.css">
  <script src="js/skripte.js"></script>
</head>
<body>
   <img src="slike/logo.jpg" alt="Kamp kod" id="baner">
   <h1 class="text-center">Ponuda kurseva</h1>
  <div class="container"> 
    <?php
    require_once("connection.php");
    $upit = "SELECT * from kursevi order by idKursa ASC";
    $rezultat = mysqli_query($mysqli,$upit);
    if($rezultat):
      if(mysqli_num_rows($rezultat)>0):
        while ($kurs=mysqli_fetch_assoc($rezultat)):
    ?>
    <div class="column">
      <form method="post" action="korpa_view.php?action=add&id=<?php echo $kurs['idKursa'];?>">
        <div class="row">
          <img src="<?php echo 'data:ikonicaKursa/jpg;base64,'.base64_encode($kurs['ikonicaKursa']);?>"  width=410 height=463 class="img-responsive">
          <h4 class="text-info"><s>&euro;<?php echo $kurs['staraCena'];?></s></h4>
          <h4 class="text-info"><?php echo $kurs['nazivKursa'];?></h4>
          <h4 class="text-info">&euro;<?php echo $kurs['cenaKursa'];?></h4>
          <input type="text" name="kolicina" value="1" class="form-control">
          <input type="hidden" name="naziv" value="<?php echo $kurs['nazivKursa'];?>">
          <input type="hidden" name="cena" value="<?php echo $kurs['cenaKursa'];?>">
          <input type="submit" name="dodaj" value="Dodajte kurs u korpu" style="margin-top: 5px;" class="dugme">
        </div>
      </form>
     <a href="detaljiKurseva_view.php?detalji&id=<?php echo $kurs['idKursa'];?>" class="dugme-detalji" id="dugme-detalji">Detalji</a>
    </div>
    <?php
  endwhile;
endif;
endif;
    ?>
  </div>
</body>
<br>
<?php include("footer.php");?>
</html>