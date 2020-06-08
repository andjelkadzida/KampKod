<?php
header('Content-type: text/plain; charset=utf-8');
if(isset($_POST['kontaktForma']))
{
	$to = "office@localhost.com";
	$naslovPoruke = $_POST['naslov'];
	$ime = $_POST['imePrezime'];
	$email = $_POST['mail'];
	$tekst = "Pošiljalac: " .$ime. PHP_EOL. PHP_EOL. "(".$email.")" .PHP_EOL .PHP_EOL .$_POST['poruka'];
	$sender = "postmaster@localhost";
	$heder = "From: "  .$sender;	
	if(mail($to, $naslovPoruke, $tekst, $heder))
	{
		#AutoResponse
		$odgovorAuto = "Hvala što ste nas kontaktirali! Odgovor ćete dobiti u najkraćem mogućem roku. " .PHP_EOL. "Napomena: Ovo je automatski odgovor. Molimo Vas nemojte odgovarati na ovaj mail.";
		$sender = "office@localhost.com";
		$heder = "From: " .$sender;
		mail($email, $naslovPoruke, $odgovorAuto, $heder);
		
		header("location:hvala.php");
	}
}

?>