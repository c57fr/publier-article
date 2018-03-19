<?php 
	//inclure la baase de données
	require_once "bd.php";

	require "debug.php";
	if(!empty($_POST)){

		//variable erreur
		$erreur = array();

		//condition pour que le champs nom soit rempli
		if(empty($_POST['nom']) || !preg_match('/^[a-zA-Z]+$/', $_POST['nom'])){
			$erreur['nom'] = "Vous devez renseigner un nom valide (Alphanumérique)";
		}
		//var_dump($erreur["nom"]);

		//condition pour que le champs prénom soit rempli
		if(empty($_POST['prenom']) || !preg_match('/^[a-zA-Z ]+$/', $_POST['prenom'])){
			$erreur['prenom'] = "Vous devez renseigner un prénom valide (Alphanumérique)";
		}

		//condition pour que le champs pseudo soit rempli
		if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z@ _-]+$/', $_POST['pseudo'])){
			$erreur['pseudo'] = "Vous devez remplir un pseudo valide (Alphanumérique)";
		}else{
			$req = $bdd -> prepare("SELECT id FROM users WHERE pseudo = ?");
			$req -> execute([$_POST['pseudo']]);
			$user = $req -> fetch();
			if($user){
				$erreur = "Ce pseudo est déjà utilisé par quelqu'un d'autre.";
			}
		}

		//condition pour que le champs E-mail soit rempli
		if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			$erreur ['mail']= "L'adresse E-mail n'est pas valide";
		}else{
			$req = $bdd -> prepare("SELECT * FROM users WHERE mail = ?");

			$req -> execute([$_POST['mail']]);
			$user = $req -> fetch();
			if($user){
				$erreur = "Ce mail est déjà utilisé par quelqu'un d'autre.";
			}
		}

		//condition pour que le champs motDePasse soit rempli
		if(empty($_POST['MotDePasse']) || $_POST['MotDePasse'] != $_POST['MotDePasseConfirm']){
			$erreur['motDePasse'] = "Vous devez renseigner un mot de passe valide";
		}

		
		//condition pour inserer les informations dans la base de donnée s'il n'y a pas d'erreurs
		if(empty($erreur)){

			//préparer les requêtes
			$req = $bdd -> prepare("INSERT INTO users SET nom = ?, prenom = ?, pseudo = ?, mail = ?, MotDePasse = ?");
			$password = password_hash($_POST['MotDePasse'], PASSWORD_BCRYPT);
			$req -> execute([$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $password]);
			die('Votre compte  bien été créé.');
				//var_dump($req);
		}

		//debug($erreur);
	}

