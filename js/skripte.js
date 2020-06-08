function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 

function passwordPattern()
{
	var test = /^[A-Za-z0-9]{8,20}$/;
	var tekst = document.formaRegistracija.sifra1.value;
	var rezultat = tekst.match(test);
	if(rezultat!=null)
	{ 	
		document.getElementById("sifra2").disabled=false;
	}
	else
	{
		alert("Lozika mora sadrzati od 8 do 20 karaktera");
		document.getElementById("sifra2").disabled=true;
	}
}

function proveraCVV()
{
	var patern = /^[0-9]{3}$/;
	var element = document.formaKartica.cvv.value;
	var unos = element.match(patern);
	if(unos!=null)
	{ 	
		document.getElementById("potvrda").disabled=false;
	}
	else
	{
		alert("CVV mora sadržati tačno tri broja");
		document.getElementById("potvrda").disabled=true;
	}
}
function proveraBrojaKartice()
{
	var sara = /^[0-9]{13,19}$/;
	var kartica = document.formaKartica.brojKartice.value;
	var uneto = kartica.match(sara);
	if(uneto!=null)
	{
		document.getElementById("vlasnikKartice").disabled=false;
		document.getElementById("cvv").disabled=false;
		document.getElementById("datum").disabled=false;
	}
	else
	{
		alert("Kartica mora imati od 13 do 19 brojeva");
		document.getElementById("vlasnikKartice").disabled=true;
		document.getElementById("cvv").disabled=true;
		document.getElementById("datum").disabled=true;
	}
}
function dateValidation()
{
	var danas; 
	var nekiDatum;
	uneto= document.formaKartica.datum.value;
	danas = new Date();
	nekiDatum=new Date(uneto);
	if(nekiDatum<=danas)
	{
		alert("Kartica je istekla");
		document.getElementById("cvv").disabled=true;
	}
	else
	{
		document.getElementById("cvv").disabled=false;
	}
}
