<?php

function connect() {
	try {

		$bdd = new PDO('mysql:host=localhost;dbname=go_games;charset=utf8', 'root', '');
	}
	catch (Exception $e) {

		die('Erreur : ' . $e->getMessage());
	}
	return $bdd;
}

function getUser($email){
	$bdd = connect();

	$request = $bdd->prepare('SELECT * FROM players WHERE mail = :email');

	$request->bindValue(':email',htmlentities($email));
	$request->execute();

	return $request->fetch(PDO::FETCH_ASSOC);

}