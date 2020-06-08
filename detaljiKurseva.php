<?php
error_reporting(E_ALL);

if($_POST['detalji'])
{
	//Prolazak kroz sve kurseve u korpi dok se ne poklope sa GET id promenljivom
	foreach ($_SESSION['detalji_kurseva'] as $key => $kurs) 
	{
		if($kurs['id'] == filter_input(INPUT_GET, 'id'))
		{
			header("location: /store/detaljiKurseva_view.php");
		}
	}
}
?>