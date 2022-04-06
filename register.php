<? php 
      requrie_once 'user.php';
      if (!empty($_POST)) {
      	$user = new User();
      	$user->loadFromFrom($_POST);
      	$user->saveToSession();
      	$_SESSION['authorized'] = 1;
      	// ерекидываем на главную страницу 
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
			<h3>Регистрация</h3>
			<input type="text" name="name" placeholder="Имя"><br>
			<input type="text" name="login" placeholder="Логин"><br>
			<input type="text" name="pas" placeholder="Пароль"><br>
			<input type="submit" name="">
		</from>
	</div>
</body>
</html>