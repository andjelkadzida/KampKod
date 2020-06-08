<?php
error_reporting(0);
include("functions.php");
session_start();
$kursevi_id = array();
//session_destroy();
if(isset($_SESSION['user_loged_in']) || isset($_SESSION['admin_loged_in']))
{
if($_POST['dodaj'])
{
	if(isset($_SESSION['potrosacka_korpa']))
	{
		$brojacProizvoda=count($_SESSION['potrosacka_korpa']);
		//Sekvencijalni red za spanjanje kljuceva reda i id kurseva
		$kursevi_id = array_column($_SESSION['potrosacka_korpa'], 'id');

		if(!in_array(filter_input(INPUT_GET, 'id'), $kursevi_id))
		{
			$_SESSION['potrosacka_korpa'][$brojacProizvoda]=array
			(
				'id'=> filter_input(INPUT_GET, 'id'),
				'naziv'=> filter_input(INPUT_POST, 'naziv'),
				'cena'=> filter_input(INPUT_POST, 'cena'),
				'kolicina'=> filter_input(INPUT_POST, 'kolicina')
			);
		}
		//proizvod vec postoji u korpi, povecava se kolicina
		else
		{
			//povezivanje kljuca niza i id kursa koji je dodat u korpu
			for($i=0; $i<count($kursevi_id); $i++)
			{
				if($kursevi_id[$i]==filter_input(INPUT_GET, 'id'))
				{
					//Povecavanje kolicine kursu koji se trenutno nalazi u redu
					$_SESSION['potrosacka_korpa'][$i]['kolicina']+=filter_input(INPUT_POST, 'kolicina');
				}
			}
		}
	}
	//Ako potrosacka korpa ne postoji, kreira se prvi proizvod sa kljucem 0. Niz se kreira koristeci podatke iz forme, pocevsci od kljuca 0 i popunjavanjem vrednosti
	else
	{
		$_SESSION['potrosacka_korpa'][0]=array
		(
			'id'=> filter_input(INPUT_GET, 'id'),
			'naziv'=> filter_input(INPUT_POST, 'naziv'),
			'cena'=> filter_input(INPUT_POST, 'cena'),
			'kolicina'=> filter_input(INPUT_POST, 'kolicina')
		);
	}
	
}
if(filter_input(INPUT_GET, 'action') == 'delete')
{
	//Prolazak kroz sve kurseve u korpi dok se ne poklope sa GET id promenljivom
	foreach ($_SESSION['potrosacka_korpa'] as $key => $kurs) 
	{
		if($kurs['id'] == filter_input(INPUT_GET, 'id'))
		{
			//uklanjanje kursa iz korpe kada se poklope id
			unset($_SESSION['potrosacka_korpa'][$key]);
			header("location: korpa_view.php");
		}
	}
	//resetujemo niz kljuceva u sesiji tako da se poklapa sa numerickim nizom $kusevi_id 
	$_SESSION['potrosacka_korpa']=array_values($_SESSION['potrosacka_korpa']);
}
}
else
{
	header("location:user_login_view.php");
}
?>