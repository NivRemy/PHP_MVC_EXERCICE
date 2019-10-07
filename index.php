<?php
session_start();
require 'controller/frontend.php';

if(isset($_GET['logout'])){
	session_destroy();
	header('Location: index.php');
}

//Affichage du formulaire d'inscription
if(isset($_GET['signin'])){
	displaySigninForm();
}
//INscription au site
else if(isset($_POST['signinEmail']) && isset($_POST['signinFName']) && isset($_POST['signinEmail']) && isset($_POST['signinPassword'])){
	signin($_POST['signinEmail'],$_POST['signinPassword'],$_POST['signinFName'],$_POST['signinLName'],$_POST['rank']);
}
//Tentative de connexion
else if(isset($_POST['email']) && isset($_POST['password'])){
	checkLogin($_POST['email'],$_POST['password']);
}
// AFfichage du formulaire de login
else if(isset($_GET['login'])){
	displayLogin();
}
//Test si la personne est connectée
else if (isset($_SESSION['mail'])){
	//Page spécifique utilisateur
	if(isset($_GET['page'])){
		displayPage($_GET['page']);
	}
	//Page par défault utilisateur
	else{
		displayUserPage();
	}

}
//Page par défault personnes non connectées
else {
	displayMenu();
}
