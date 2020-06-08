<?php
session_start();
require_once("connection.php");
require_once("functions.php");
 getNavigationByLoginStatus();
?>
<!DOCTYPE html>
<html>
<head>
  <title>O nama</title>
  <meta charset="utf-8">
  <link rel="stylesheet"  href="css/oNamaStil.css">
  <link rel="stylesheet" type="text/css" href="css/navigacija.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
  <img src="slike/logo.jpg" alt="Kamp kod">
</header>
<body>
 <h1>O nama</h1>
         <h2><strong>Ko smo mi?</strong></h2>
         <p>Mi smo inovativna online platforma za učenje koja vam pruža jeftine kurseve iz različitih oblasti.</p><br>
         <h2>Naš tim</h2>
         <p>Naš tim čine mladi ljudi sa višegodišnjim iskustvom u edukaciji.<br>Oni su stručnjaci iz različitih oblasti, uvek spremni da pomognu drugima. Entuzijazam i želja za napredovanjem su nešto što ih krasi od samog početka.
       </p><br>
        <h2>Čime se bavimo?</h2>
        <p>
          Već dugi niz godina bavimo se edukacijom sa akcentom na IT sektor i jezike.<br>
          Što se tiče IT sektora, nudimo Vam kurseve iz oblasti <a href="/store/kursevi/kurseviProgramiranja.php">programiranja</a> i učenje različitih <a href="/store/kursevi/kurseviPrograma.php">softvera</a> koji Vam mogu olakšati rad na računaru.<br>
          Druga oblast edukacije su <a href="/store/kursevi/kurseviJezika.php">kursevi jezika</a>.<br>
        </p><br>
        <h2>Zašto baš ove oblasti?</h2>       
        <p>I ako smo svesni da su je tržište prezasićeno kursevima iz ovih oblasti, želimo da polaznicima pružimo inovativno iskustvo, kao i mogućnost dobijanja kurseva u papirnoj formi.</p><br>
        <h2>U čemu smo različiti?</h2>
        <p>
          Prilagođenost kurseva nas čini posebnim na tržištu.<br><br>Šta mislimo pod "prilagođenost"?<br><br>Naše kurseve može pohađati svako, jer su...<br>
          <ul>
          <li>prilagođeni i deci i odrasima</li>
          <li>prilagođeni osobama sa različitim nivoom digitalne pismenosti</li>
          <li>prilagođeni slepim i slabovidim osobama</li>
          <li>prilagođeni osobama koje su gluvoneme ili imaju neko oštećenje sluha</li>
          <li>prilagođeni osobama koje su daltonisti</li>
          <li>dostupni u online i štampanom formatu</li>
          <li>dobijate sertifikat za svaki završen kurs</li>
          <li>imate mogućnost polaganja specijalizovanih testova na našoj platformi</li>
          </ul>
        </p><br>
        <h2>Imate pitanje?</h3>
        <a href="/store/konakt.php" class="link">Kontaktirajte nas</a><br><br>
      <address>
          <strong>Kamp kod</strong><br>
          Vlade Zečevića 25, <br>
          14000 Valjevo, Srbija<br>
          <abbr title="kontakt-telefon">Kontakt telefon:</abbr>+381 65 548 12 09
        </address>
        <address class="mailInfo">
          <strong>Anđelka Džida</strong><br>
          <a href="mailto:andjelkadzida@gmail.com">andjelkadzida@gmail.com</a><br>
          <a href="mailto:office@kampkod.com">office@kampkod.com</a>
        </address>
        <?php include("footer.php");?>
</body>
</html>