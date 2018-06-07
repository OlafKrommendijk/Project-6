	<?php
	include "Functies.php";
	?>
<!DOCTYPE html>
	<HTML>
		<HEAD>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<LINK href="Sjabloon.css" rel="stylesheet" type="text/css" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<TITLE> Ompa Telefoons </TITLE>
		</HEAD>
			<BODY>
			<div id="container">
				<div id="header">
				<a href="index.html"> <img src="logo.png" id="logo" alt="Logo" title="Logo" /></a>	
					<div id="HText">
						<h2><strong>INLOGGEN</strong></h2>
					</div>
						<div id="zoeken">
								<input type="text" id="InloggenBox" placeholder="zoeken">
									<button>Zoeken</button><button id="knop" <i class="fa fa-shopping-cart"></i></button>
						</div>

				</div>
					<div class="nav">
						<div class="Home">
							<a class="dropbtn" href="index.html"><strong>HOME</strong></a></button>
							<a class="dropbtn" href="Informatie.html"><strong>INFORMATIE</strong></a></button>
							<a class="dropbtn" href="Producten.html"><strong>PRODUCTEN</strong></a></button>
							<a class="dropbtn" href="Contact.html"><strong>CONTACT</strong></a></button>
							<a class="dropbtn" href="Inloggen.html"><strong>INLOGGEN</strong></a></button>
							<a class="dropbtn" href="Personeel.html"><strong>PERSONEEL</strong></a></button>
						</div>
					</div>
					<?php
					Personeel();
					?>
					<footer>
						<div id="footer">
							<div id="FooterText">
								<p>&copy; Copyright 2018 Ompa Telefoons</p>
							</div>
						</div>
					</footer>
			</BODY>
	</html>