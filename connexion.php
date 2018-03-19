<?php
	
	include_once 'inc/connexion.include.php';
	include_once 'inc/debug.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with">
	<meta name="description" content="affordable and professionnel web publication">
	<meta name="keywords" content="web publication, affordable web publication, professionnel web publication">
	<meta name="author" content="Momo Seck">
	<title>Ecrits Web Publication | Connexion</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Ecrits</span> Web Publication</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="inscription.php">S'inscrire</a></li>
					<li class="current"><a href="connexion.php">Se connecter</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="inscription">
		<div class="container">
			<h1>Connectez-vous</h1>

			<?php $erreur ;?>
			<form class="quote" action="" method="POST">
				
				<div>
					<label>Pseudo ou Adresse E-mail:</label><br>
					<input type="text" name="pseudo" placeholder="Pseudo ou adresse E-mail">
				</div>
				
				<div>
					<label>Mot de Passe:</label><br>
					<input type="password" name="motDePasse" placeholder="Mot De Passe">
				</div>
				
			
					<button type="submit" class="button_1" name="submit">Je me connecte</button>
				
			</form>
		</div>
	</section>
	<div style="margin-bottom: 157px;"></div>

<?php include "inc/footer.php";?>