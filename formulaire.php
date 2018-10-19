<!DOCTYPE html>
<html>
	<head>
	<title>
		Traitement de formulaire en PHP
		</title>
		<script language="javascript">
			function confirmer_formulaire()
			{
				return window.confirm('Avez-vous dûment rempli tous les champs ?');
			}
		</script>
		<style type="text/css">
			.error
			{
				font-weight: bold;
				color: #cc0000;
			}
		</style>
	</head>
		<form method="get" action="traitement_formulaire.php">
			<fieldset><legend>Formulaire de contact</legend>
				
			<?php
				if(! empty($_GET["errors"]))
					{
						echo("<p class='error'/>");
						echo("Tous les schamps doivent être remplis");
						echo("</p>");
					}
			?>
				
				Prénom : <input type="text" name="prenom" value="<?php if(isset($_GET(['prenom'])) echo $_GET['prenom']; ?>"/> <br/>
				Nom : <input type="text" name="nom" value="<?php if(isset($_GET(['nom'])) echo $_GET['nom']; ?>"/> <br/>
				Adresse email : <input type="email" name="email" value="<?php if(isset($_GET(['email'])) echo $_GET['email']; ?>"/> <br/>
				Message : <textarea name="message"> <?php if(isset($_GET(['message'])) echo $_GET['message']; ?>"</textarea>
				<input style="submit" value="Envoyer" onclick="return confirmer_formulaire();"/>
			</fieldset>
	</form>
	<body>
		<header>
		
		</header>
	
	</body>
</html>
