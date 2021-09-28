<?php 
	$username = isset($_POST["username"]) ? $_POST["username"] : "";
	$password = isset($_POST["password"]) ? $_POST["password"] : "";
	if($username === "Login" && $password === "Haslo"){
		$_SESSION["user"] = "test data";
	}
?>