<!DOCTYPE html>
<html>
	<head>
		<title>
		Traitement du formulaire
		</title>
	</head>
	
	<body>
		<header>
		<?php
			if(empty($_GET['nom']) || empty($_GET['prenom']) || empty($_GET['email']) || empty($_GET['message']))
			{
				/*En cas d'erreur renvoi vers la page formulaire */
				header('Location: index.php?errors=vide&nom='.urlencode($_GET['nom']).'&prenom='.urlencode($_GET['prenom']).'&email='.urlencode($_GET['email']).'&message='.urlencode($_GET['message']));
			}
			else
			{
				/* sinon étape suivante */
				header('Location: redirection.php?nom='.urlencode($_GET['nom']).'&prenom='.urlencode($_GET['prenom']).'&email='.urlencode($_GET['email']).'&message='.urlencode($_GET['message']));
			}
			?>
		</header>
	
	</body>
</html>
