<?php
session_start();
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['motDePasse'])){
	// connexion à la base de données
	require_once 'bd.php';
	require_once 'debug.php';
	//session_start();

	//vérification de l'inscription de la personne dans la base de données
    $req = $bdd->prepare("SELECT * FROM users WHERE pseudo = :pseudo || mail = :pseudo");
    $req -> execute(['pseudo' => $_POST['pseudo']]);
   	$user = $req->fetch();

    //debug($_POST['motDePasse']);
    //debug($user->motDePasse);
    //debug(password_verify($_POST['motDePasse'], $user->motDePasse));
    //erreur = array();

  if(password_verify($_POST['motDePasse'], $user->motDePasse)){
    	$_SESSION['auth'] = $user;
    	header('Location:news.php');
    	exit();
    }else{
    	 echo 'Identifiants ou mot de passe incorrect';
    }
    
}
