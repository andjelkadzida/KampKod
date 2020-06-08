<?php 

//Konekcija sa bazom

	$mysqli = @mysqli_connect( "localhost", "andja", "12345", "prodavnica" );

	if( mysqli_connect_error() )
	{
		die("Pogresni parametri!");
	}