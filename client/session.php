<?php 
	session_start();
	include("signIn.php");
	if(isset($_POST["signOut"])){
		session_destroy();
	}
	$user = $_SESSION["user"];
?>