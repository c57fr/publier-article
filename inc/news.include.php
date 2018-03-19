<?php
session_start();
require_once 'bd.php';
//$_SESSION['id'] = 2;
$idConnecte = $_SESSION['id'];
$req = $bdd->query( 'SELECT * FROM users WHERE id=' . $idConnecte ); 
$rep = $req->fetch();
echo $rep->pseudo; 
/*var_dump($rep);

$idConnecte = $_SESSION['id'];
var_dump($idConnecte);*/

//var_dump($_SESSION);