<?php 
session_start() 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Home</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		header {
			background-color: #070;
			padding: 5px 10px;
			text-align: center;
		}

		a {
			display: inline-block;
			margin: 0 10px;
			color: white;
			font-size: 20px;
		}

		section {
			text-align: center;
			margin: 0 10px;
			margin-top: 100px;
			color: green;
			font-size: 30px;	
		}
	</style>
</head>
<body>
	<header>
		<?php 
		$pages= ['home'=>'<h2>Welcome '.$_SESSION['login'].'!</h2>'.'<br>', 'contact'=>'<h2>E-mail: vat2@cin.ufpe.br'.'</h2>'.'<br>'];

		foreach ($pages as $key => $value) {
			echo '<a href="?page='.$key.'">'.ucfirst($key).' </a>';
		} 

		echo '<a href="?logout">Logout</a>';
		?>
	</header>
	<section>
		<?php 
		$page = (isset($_GET['page']) ? $_GET['page'] : 'home');
		if (!array_key_exists($page, $pages)) {
			$page = 'home';
		}

		if (isset($_GET['logout'])) {
			unset($_SESSION['login']);
			session_destroy();
			header('Location: index.php');
			include('index.php');
		}

		echo $pages[$page];
		?>
	</section>
</body>
</html>