<?php
session_start();
require 'controller/frontend.php';


if(isset($_GET['page'])){
	displayPage($_GET['page']);
} else if (isset($_SESSION['mail'])){
	displayUserPage();
}else if(isset($_POST['email']) && isset($_POST['password'])){
	checkLogin($_POST['email'],$_POST['password']);
}else if(isset($_GET['login'])){
	displayLogin();
} else {
	displayMenu();
}
