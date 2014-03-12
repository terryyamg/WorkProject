<?php
//require_once('../../FirePHPCore/FirePHP.class.php');
//ob_start();

$user = isset($_POST["user"]) ? $_POST["user"] : $_GET["user"]; 
$pass = isset($_POST["pass"]) ? $_POST["pass"] : $_GET["pass"]; 
$correct_user = "root";
$correct_pass = "123";
if($user == $correct_user && $pass == $correct_pass){
	echo 1;
}else{
	echo 2;
}


?>


