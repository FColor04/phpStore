<?php
	if(!isset($_SESSION["user"])){
		include("signIn.php");
//SING IN FORM
?>
<form action="index.php" method="POST" class="modal">
	<h1>Sign In</h1>
	<?php 
		if(isset($_POST["signOut"])){
			echo "Signed out";
		}
		if(isset($_POST["badPassword"])){
			echo "Incorrect username or password";
		}
	?>
	<input placeholder="Username" class="textField" type="text" name="username" id="username">
	<input placeholder="Password" class="textField" type="password" name="password" id="password">
	<input type="hidden" name="badPassword">
	<input type="submit" class="textField submit" value="Sign in">
</form>
<?php
	}else{
//REDIRECT
?>

<?php
	}
?>