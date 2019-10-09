<?php
require_once 'model/frontend.php';

function displayMenu(){
	require 'view/menuView.php';	
}

function displayPage($pageNumber){
	switch ($pageNumber) {
		case 1:
			require 'view/page1View.php';
			break;

		case 2:
			require 'view/page2View.php';
			break;
		case 3:
			$players=getPlayers();
			require 'view/page3View.php';
			break;
		
		default:
			displayMenu();
			break;
	}
}

function displayLogin(){
	require 'view/loginView.php';
}

function checkLogin($email,$password){
	$user = getUser($email);
	if(password_verify($password, $user['password'])){
		$_SESSION['mail']= $email;
		$_SESSION['password']= $password;
		require 'view/loginResultView.php';
	} else {
		echo 'Mauvais login';
		require 'view/loginView.php';
	}

	
}

function displayUserPage(){
	$email = $_SESSION['mail'];
	$password = $_SESSION['password'];
	require 'view/loginResultView.php';
}

function displaySigninForm(){
	require 'view/SigninFormView.php';
}

function signin($email,$password,$fName,$lName,$rank){
	if(getUser($email)){
		echo 'Utilisateur déjà existant';
	}
	else{
		addUser($email,$password,$fName,$lName,$rank);
	}
	
	displayMenu();
}
