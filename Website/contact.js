function controle(){
	var mail = document.getElementById('mail').value; 
	var email = mail.toString();
	var email1= email.toLowerCase();

	var apenstaartje = email1.indexOf("@");
		if (apenstaartje !== -1){
				var domein = email1.indexOf(".nl");
				var domeinB = email1.indexOf(".com");

				if (domein !== -1){
					window.location.replace("http://www.ompatelefoons.icthardenberg.nl/Contactverstuurd.html")
				}

				else if (domeinB !== -1) {
					window.location.replace("http://www.ompatelefoons.icthardenberg.nl/Contactverstuurd.html")
				}

				else alert("voer een geldig domein in");
		}
		else alert("Voer een geldig emailadres in");


}