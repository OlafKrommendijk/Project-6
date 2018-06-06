function controle(){
	var mail = document.getElementById('mail').value; 
	var email = mail.toString();
	var email1= email.toLowerCase();

	var tekst = document.getElementById('Bericht').value;

	var apenstaartje = email1.indexOf("@");
		if (apenstaartje !== -1){
				var domein = email1.indexOf(".nl");
				var domeinB = email1.indexOf(".com");

				if (domein !== -1){
					document.getElementById("formulier").innerHTML = "<h2> Uw Bericht is verzonden </h2> <br />" + tekst;
				}

				else if (domeinB !== -1) {
					document.getElementById("Formulier").innerHTML = "<h2> Uw Bericht is verzonden </h2> <br />" + tekst;
				}

				else alert("voer een geldig domein in");
		}
		else alert("Voer een geldig emailadres in");


}