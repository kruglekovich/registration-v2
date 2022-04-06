<?php
require_once 'user.php';
$user = new User();
$user->loadFromSession();
//
if ($user->authorize($_POST) === true){
	//
	$_SESSION['authorized'] = 1;
	$user->saveToSession();
	//
	echo '<script>window.location="index.php"</script>';
}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Авторизация</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="content"
		<from action="" method="post">
			<h3>Авторизация</h3>
			<input type="text" name="login" placeholder="Логин"><br>
			<input type="text" name="pas" placeholder="Пароль"><br>
			<input type="submit" name="">
			</from>
			<a href="register.php">Регистрация</a>
		</div>
	</body>
	</html>