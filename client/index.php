<?php 
	include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pehap</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 100vh;
			margin: 0;
			padding: 0;
			font-family: 'Yaldevi', sans-serif;
			background: url("./wallpaper.jpg");
			background-size: cover;
		}
		.modal {
			width: 30vw;
			display: flex;
			flex-direction: column;
			border-radius: 1rem;
			padding: 2rem;
			background-color: white;
		}
		.textField {
			margin-top: 1rem;
			text-align: left;
			font-size: 1.2rem;
		}
		.submit {
			background-color: #663344;
			border: none;
			border-radius: 1rem;
			color: white;
			padding: 0.5rem;
			width: 14ch;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<h1>Hello world</h1>
	<?php 
		if(isset($_SESSION["user"])){
			include("profile.php");
		}else{
			include("signInPage.php");
		}
	?>
</body>
</html>