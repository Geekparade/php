<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ma première page en P.H.P</title>
</head>
	<body>
		<form method="post">
			<label for="">Votre Prénom</label>
			<input type="text" name="login" placeholder="Prénom">
			<label for="">Votre Mot de passe</label>	
			<input type="password" name="pw" placeholder="Mot de Passe">
			<input type="submit" name="send" value="Valider">
		</form>
		<?php 
		
			if (!empty($_POST)){
				$firstname = $_POST["login"];
				$password = $_POST["pw"];
				$ip = $_SERVER["REMOTE_ADDR"];
				$button = $_POST["send"];
				
				if (empty($firstname) || empty($password)){
					echo "<p> Veuillez remplir les champs </p>";
				
				} else {		
					echo "<p> Votre Prénom : $firstname </p>";
					echo "<p> Votre Mot de Passe : $password </p>";
					echo "<p> Votre Adresse Ip : $ip </p>";
				}
			}	
		?>			
	</body>
</html>