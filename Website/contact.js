function controle(){
	var mail = document.getElementById('mail').value; 
	var email = mail.toString();
	var email1= email.toLowerCase();

	var apenstaartje = email1.indexOf("@");
		if (apenstaartje !== -1){
		}
		else alert("Voer een geldig emailadres in");

	var domein = email1.indexOf(".nl");
	var domeinB = email1.indexOf(".com");
		if (domein !== -1){
		}

		else if (domeinB !== -1) {
		}
			else alert("voer een geldig domein in");
}