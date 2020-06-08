<div class="topnav" id="myTopnav">
  <a href="/store/index.php" class="active">Početna</a>
  <div class="dropdown">
    <button class="dropbtn">Kursevi 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/store/kursevi/kurseviProgramiranja_admin_view.php">Kursevi programiranja</a>
      <a href="/store/kursevi/kurseviPrograma_admin_view.php">Kursevi programa</a>
      <a href="/store/kursevi/kurseviJezika_admin_view.php">Kursevi jezika</a>
    </div>
  </div> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>	
   <a href="/store/kursevi/dodajteNoviKurs_view.php">Dodajte novi kurs</a>
  <a href="/store/kursevi/brisiKurseve_view.php">Brisanje kurseva</a>
  <div class="register">
    <a href="/store/admin_profile.php"><?php $ime=$_SESSION['admin_data']['adminName']; echo ucfirst($ime);?></a>
    <a href="/store/admin_register_view.php">Dodajte administratora</a>
  	 <a href="/store/admin_logout.php">Izlogujte se</a>
  	   </div>
</div>