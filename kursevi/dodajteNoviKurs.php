<?php
	set_include_path("E:/XAMPP/htdocs/store/");
	session_start();
	error_reporting(E_ALL);
    require_once("connection.php");
    include("functions.php");
    $is_error = false;
if($_POST['dodajKurs'])
{
	if(empty($_POST['nazivK']) || empty($_POST['sadrzajK']) || empty($_POST['autorK']) || empty($_POST['novaC']) || empty($_FILES['slikaK']))
	{
		$uploadUspeo=0;
		$is_error=true;
		$errors="Morate popuniti sva polja!";
		print "<p>" .$errors. "</p>";
	}
	// Provera kurseva
	if(get_course_name($mysqli, $_POST['nazivK']))
	{
		$is_error = true;
		$errors = "Kurs sa ovim nazivom već postoji!";
		print "<p>" .$errors. "</p>";
	}
	// 
	if($is_error)
	{
		// Postoji greska
		$_SESSION['postoji_greska'] = true;
		$_SESSION['greske'] = $errors;

		// Vrati na formu
		header("Location: dodajteNoviKurs_view.php");
	}
	else 
	{
		// Ponistimo greske
		$_SESSION['postoji_greska'] = false;

		// Dodaj kurs
		$nazivKursa = $_POST['nazivK'];
		$autorKursa = $_POST['autorK'];
		$staraCena = $_POST['staraC'];
		$novaCena = $_POST['novaC'];
		$sadrzajKursa = $_POST['sadrzajK'];
		$slika=addslashes(file_get_contents($_FILES['slikaK']['tmp_name']));


		$dodaj="INSERT INTO kursevi VALUES (null, '$nazivKursa', '$sadrzajKursa', '$autorKursa', '$staraCena', '$novaCena', '$slika')";
		mysqli_query($mysqli, $dodaj);	
		header("Location: /store/index.php");
	}
}
else 
{
	// Pokusaj direktnog pristupa stranici
	header("Location: /store/index.php");
}
?>