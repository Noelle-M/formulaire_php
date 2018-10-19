<!DOCTYPE html>
<html>
	<head>
		<title>Redirection après traitement ok</title>
	</head>
	
	<body>
		<header>
		<fieldset><legend>Traitement de votre message</legend>
			<strong>Emetteur</strong><br/><?php echo $_GET['nom']; ?><br/>
													<?php echo $_GET['prenom']; ?><br/><br/>
			<strong>Adrees email</strong><br/><?php echo $_GET['email']; ?><br/>
			<strong>Messagee</strong><br/><?php echo $_GET['message']; ?><br/>
			</fieldset>
		</header>
	
	</body>
</html>
