<!DOCTYPE html>
<html>
<head>
	<title>Kursevi programiranja</title>
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
    <h1 class="text-center">Kursevi programiranja</h1>
<!--Snizeni kursevi-->
  	 <div class="container"> 
    <?php
    require_once("connection.php");
    $upit = "SELECT * from kursevi where idKursa = 1 || idKursa = 2";
    $rezultat = mysqli_query($mysqli,$upit);
    if($rezultat):
      if(mysqli_num_rows($rezultat)>0):
        while ($kurs=mysqli_fetch_assoc($rezultat)):
    ?>
    <div class="column">
      <form method="post" action="/store/kursevi/izmenaKurseva_view.php?izmena&id=<?php echo $kurs['idKursa'];?>">
        <div class="row">
          <img src="<?php echo 'data:ikonicaKursa/png;base64,'.base64_encode( $kurs['ikonicaKursa'] );?>"  width=410 height=463 class="img-responsive">
          <h4 class="text-info"><s>&euro;<?php echo $kurs['staraCena'];?></s></h4>
          <h4 class="text-info"><?php echo $kurs['nazivKursa'];?></h4>
          <h4 class="text-info">&euro;<?php echo $kurs['cenaKursa'];?></h4>
           <input type="hidden" name="kolicina" value="1" class="form-control">
          <input type="hidden" name="naziv" value="<?php echo $kurs['nazivKursa'];?>">
          <input type="hidden" name="cena" value="<?php echo $kurs['cenaKursa'];?>">
         <div class="dugmeDiv">
          <input type="submit" name="izmeni" value="Izmenite kurs" class="dugme" id="dugmeDodaj">
          </div>
        </div>
      </form>
    </div>
    <?php
  endwhile;
endif;
endif;
    ?>
  </div>
  </body>
  <?php include("footer.php");?>
  </html>