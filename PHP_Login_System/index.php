<?php 
session_start() 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<style type="text/css">
		* {
			margin-top: 10px;
			margin-bottom: 5px;
			padding: 0 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	if (!isset($_SESSION['login'])) {
		if (isset($_POST['submit'])) {
			$login = 'Vitor';
			$password = '123456';

			$loginForm = $_POST['login'];
			$passwordForm = $_POST['password'];

			if ($login == $loginForm && $password == $passwordForm) {
				$_SESSION['login'] = $loginForm;
				header('Location: home.php');
			} else {
				echo 'Dados inválidos.'.'<br>';
			}
		}

		include('login.php');
	}

	else {
		include('home.php');
	}
	?>
</body>
</html>