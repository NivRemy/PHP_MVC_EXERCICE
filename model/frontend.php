<?php

function connect() {
	try {

		$bdd = new PDO('mysql:host=localhost;dbname=go_games;charset=utf8', 'root', '');
		return $bdd;
	}
	catch (Exception $e) {

		die('Erreur : ' . $e->getMessage());
	}
	
}

function getUser($email){
	$bdd = connect();

	$request = $bdd->prepare('SELECT * FROM players WHERE mail = :email');

	$request->bindValue(':email',htmlentities($email));
	$request->execute();

	return $request->fetch(PDO::FETCH_ASSOC);

}

function addUser($email,$password,$fName,$lName,$rank){
	$bdd = connect();

	$request = $bdd->prepare('INSERT INTO players VALUES (NULL,:email,:password,:last_name,:first_name,:rank)');

	$request->bindValue(':email',htmlentities($email));
	$request->bindValue(':password',password_hash($password,PASSWORD_DEFAULT));
	$request->bindValue(':last_name',htmlentities($lName));
	$request->bindValue(':first_name',htmlentities($fName));
	$request->bindValue(':rank',htmlentities($rank));
	$request->execute();
}