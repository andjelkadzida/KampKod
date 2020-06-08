<div class="topnav" id="myTopnav">
  <a href="/store/index.php" class="active">Početna</a>
  <a href="/store/kontakt_view.php">Kontakt</a>
  <div class="dropdown">
    <button class="dropbtn">Informacije
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/store/onama.php">O nama</a>
      <a href="/store/opsteStranice/politikaPrivatnosti.php">Politika privatnosti</a>
      <a href="/store/opsteStranice/usloviKoriscenja.php">Uslovi korišćenja</a>
      <a href="/store/opsteStranice/FAQ.php">FAQ</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Kursevi 
      <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-content">
       <a href="/store/kursevi/kurseviProgramiranja.php">Kursevi programiranja</a>
      <a href="/store/kursevi/kurseviPrograma.php">Kursevi programa</a>
      <a href="/store/kursevi/kurseviJezika.php">Kursevi jezika</a>
    </div>
  </div> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>	
  <div class="register">
    <a href="/store/user_profile.php"><?php $ime=$_SESSION['user_data']['korisnickoIme']; echo ucfirst($ime);?></a>
    <a href="/store/korpa_view.php">Korpa</a>
  	 <a href="/store/user_logout.php">Izlogujte se</a>
  	   </div>
</div>