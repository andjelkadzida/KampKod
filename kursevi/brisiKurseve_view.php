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
	<meta charset="utf-8">
	<link rel="stylesheet"  href="/store/css/navigacija.css">
	<link rel="stylesheet" type="text/css" href="/store/css/brisanjeKurseva.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Brisanje kurseva</title>
</head>
<body>
<img src="/store/slike/logo.jpg" alt="Kamp kod" id="baner"><br>
 <h1 class="text-center">Brisanje kurseva</h1>
 <form method="post" action="/store/kursevi/brisiKurseve_view.php">
 	<div class="input-group">
 		<label>Izaberite kurs koji želite da obrišete</label>
    <div class="custom-select">
    <select id="nazivK" name="nazivK" style="width: 350px; border-radius: 5px; font-size: 20px; border-color: #4c60af;  margin-left: 120px; margin-top: 10px;">
      <?php
          $upit="SELECT * from kursevi";
          $resenje=mysqli_query($mysqli,$upit);
          while ($red=mysqli_fetch_array($resenje))
          {?>
            <option value="<?php echo $red['nazivKursa'];?>" style="color: #FFF; background: #99c4ff ;"><?php echo $red['nazivKursa'];?></option>
          <?php
          }
          ?>
    </select>
  </div>
  </div>
 	<input type="submit" name="brisanje" value="Potvrdite brisanje" class="brisanje">
 </form>
</body>
</html>
<?php
if(isset($_POST['brisanje']))
{
    $naziv=$_POST['nazivK'];
    $brisi="DELETE from kursevi where nazivKursa='$naziv'";
    if(mysqli_query($mysqli,$brisi))
    {
      header("location: /store/index.php");
    }
    else
    {
      echo '<div align="center">'."<p style='color:red;'>"."Došlo je do greške. Molimo Vas pokušajte ponovo.". "</p>". '</div>';
    }
}

?>