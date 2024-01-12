<?php
//fonction pour la connexion au serveur et la base
function connexion(){ 
    global $bdd;
	try{
		// global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=sing-up-site;charset=utf8', 'root', '');
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
}
?>