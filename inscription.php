<?php
	include "inc/inscription.include.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with">
	<meta name="description" content="affordable and professionnel web publication">
	<meta name="keywords" content="web publication, affordable web publication, professionnel web publication">
	<meta name="author" content="Momo Seck">
	<title>Ecrits Web Publication | Inscription</title>
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
					<li class="current"><a href="inscription.php">S'inscrire</a></li>
					<li><a href="connexion.php">Se connecter</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<!--<section id="newsletter">
		<div class="container">
			<h1>Souscrire Aux newsletter</h1>
			<form>
				<input type="email" name="email" placeholder="Entrer Votre Adresse E-mail">
				<button type="submit" class="button_1">Souscrire</button>
			</form>
		</div>
	</section>-->

	<section id="inscription">
	<div class="container">
		<h1>Inscrivez-vous</h1>
		<form class="quote" action="" method="POST">
			<div>
				<label>Nom:</label><br>
				<input type="text" name="nom" placeholder="Nom">
			</div>
			<div>
				<label>Prénom:</label><br>
				<input type="text" name="prenom" placeholder="Prénom">
			</div>
			<div>
				<label>Pseudo:</label><br>
				<input type="text" name="pseudo" placeholder="Pseudo">
			</div>
			<div>
				<label>E-mail:</label><br>
				<input type="email" name="mail" placeholder="E-mail">
			</div>
			<div>
				<label>Mot de Passe:</label><br>
				<input type="password" name="MotDePasse" placeholder="Mot De Passe">
			</div>
			<div>
				<label>Confirmer Votre Mot De passe:</label><br>
				<input type="password" name="MotDePasseConfirm" placeholder="Confirmer Votre Mot De passe">
			</div>
		
				<button type="submit" class="button_1" name="submit">Je m'inscris</button>
			
		</form>
	</div>
	</section>
</body>

<?php include "inc/footer.php";?>

