<?php
function Inloggen(){
	$gebruikersnaam = $_POST["gebruikersnaam"];
	$wachtwoord = $_POST["wachtwoord"];
	if ($gebruikersnaam == "user" && $wachtwoord == "welkom123"){
			header("Location:klanten.html");
		}
		else{
			echo "fout bij het inloggen";
			}
}
	if(isset($_POST['submit'])){
	Inloggen();
}

function Personeel(){
	$Voornaam = array("Jan", "Piet", "Jaap", "Henk", "Joep", "Gea", "Tea", "Fien", "Olaf", "Tim", "Jesse", "Rob", "Robin", "Max", "Niels");

       echo "<td>" . "<strong>Ons Personeel:</strong>" . "</td>";

	foreach ($Voornaam as $value) {
		echo "<br>";
		echo "<img id='one' src='nobody.JPG'>";
		echo "<br>";
        echo "<td>" . "<strong>Voornaam:</strong> <i>$value</i>" . "</td>";
        echo "<br>";
        echo "<td>" . "<strong>Achternaam:</strong> <i>Familie</i>" . "</td>";
        echo "<br>";
        echo "<td>" . "<strong>Werkende als:</strong> <i>JEEEEEE</i>" . "</td>";
		}
	}
?>