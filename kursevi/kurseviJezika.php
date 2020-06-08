<!DOCTYPE html>
<html>
<head>
	<title>Kursevi jezika</title>
	<meta charset="utf-8">
    <link rel="stylesheet"  href="/store/css/navigacija.css">
   <link rel="stylesheet" href="/store/css/valjdaCeDaValja.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="script" href="js/skripte.js">
</head>
<!-- Navigacija -->
<?php set_include_path("E:/XAMPP/htdocs/store/");
      session_start();
      require_once("connection.php");
      require_once("functions.php");
     getNavigationByLoginStatus();
?>

<body>
  <img src="/store/slike/logo.jpg" alt="Kamp kod" id="baner"><br>
    <h1 class="text-center">Kursevi jezika</h1>
<!--Snizeni kursevi-->
  	 <div class="container"> 
    <?php
    require_once("connection.php");
    $upit = "SELECT * from kursevi where idKursa = 6 || idKursa = 5";
    $rezultat = mysqli_query($mysqli,$upit);
    if($rezultat):
      if(mysqli_num_rows($rezultat)>0):
        while ($kurs=mysqli_fetch_assoc($rezultat)):
    ?>
    <div class="column">
      <form method="post" action="/store/korpa_view.php?action=add&id=<?php echo $kurs['idKursa'];?>">
        <div class="row">
          <img src="<?php echo 'data:ikonicaKursa/png;base64,'.base64_encode( $kurs['ikonicaKursa'] );?>"  width=410 height=463 class="img-responsive">
          <h4 class="text-info"><s>&euro;<?php echo $kurs['staraCena'];?></s></h4>
          <h4 class="text-info"><?php echo $kurs['nazivKursa'];?></h4>
          <h4 class="text-info">&euro;<?php echo $kurs['cenaKursa'];?></h4>
           <input type="hidden" name="kolicina" value="1" class="form-control">
          <input type="hidden" name="naziv" value="<?php echo $kurs['nazivKursa'];?>">
          <input type="hidden" name="cena" value="<?php echo $kurs['cenaKursa'];?>">
         <div class="dugmeDiv">
          <input type="submit" name="dodaj" value="Dodajte kurs u korpu" class="dugme" id="dugmeDodaj">
          </div>
        </div>
      </form>
     <a href="/store/detaljiKurseva_view.php?detalji&id=<?php echo $kurs['idKursa'];?>" class="dugme-detalji" id="dugme-detalji" name="detalji">Detalji</a>
    </div>
    <?php
  endwhile;
endif;
endif;
    ?>
  </div>
<h1 class="h1">Kursevi u pripremi</h1>
      <div class="row">
        <div class="column">
           <img src="/store/slike/spanski.jpg" alt="Osnove španskog jezika" width="410" height="463" id="slika1">
        </div>
        <div class="column">
          <div class="column">
            <img src="/store/slike/engleski.jpg" alt="Osnove engleskog jezika" width="410" height="463" id="slika2">
          </div>       
        </div>
      </div>
  </body>
  <?php include("footer.php");?>
  </html>