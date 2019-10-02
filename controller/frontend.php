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
	var_dump($user);
	if(password_verify($password, $user['password'])){
		require 'view/loginResultView.php';
		$_SESSION['mail']= $email;
		$_SESSION['password']= $password;
	} else {
		echo 'Mauvais login';
		require 'view/loginView.php';
	}

	
}

function displayUserPage(){
	var_dump($_SESSION);
	$email = $_SESSION['mail'];
	$password = $_SESSION['password'];
	require 'view/loginResultView.php';
}