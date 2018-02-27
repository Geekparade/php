<?php 
	/**
	*
	* Créer un formulaire qui demande un login et un mot de passe
	* puis une fois le formulaire validé, afficher :
	* 
	* - Le login
	* - Le mot de passe
	* - L'adresse ip du client
	*/
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