<?php
	require_once "../include/config.php";

	#if(empty($_SESSION['user'])){
		#header("Location: login.php");
	#}

	$change = "UPDATE users SET pass = '" .password_hash($_POST['pass'], PASSWORD_DEFAULT). "' WHERE id = '" .$_SESSION['user']['user_id']. "'";
	$user = mysqli_fetch_assoc(mysqli_query($db, 'SELECT pass FROM users where id = ' .(int)$_SESSION['user']['user_id']));

	if(isset($_POST['do_change'])){
		if(!password_verify($_POST['Email'], $user['email'])){
			$error = 'Ваша почта не верна!';
		}

		if($_POST['pass'] != $_POST['pass2']){
			$error = '2 пароль не верный';
		}

		if(empty(trim($_POST['pass']))){
			$error = 'Пароль пустой';
		}
		
		if(empty($error)){
			mysqli_query($db, $change);
			header("Location: logout.php");
		}
	}
?>

<?php
	require_once "../include/config.php";

	if(isset($_SESSION['user'])){
		header("Location: $url");
	}

	if(isset($_POST['do_login'])){
		$data = json_decode(file_get_contents($url. '/api/login.php?username=' .urlencode($_POST['username']). '&password=' .urlencode($_POST['password'])), true);

		if(empty($data['error_code'])){
			$_SESSION['user'] = $data;

			header("Location: $url");
		} else {
			$error = $data['error_msg'];
		}
	}
?>
<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Востановление Учётной Записи</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<form action="pass.php" method="POST">
				<p>
					<p>Почта: </p>
					<input type="" name="Email">
				</p>
				<p>
					<p>Новый Пароль: </p>
					<input type="password" name="pass">
				</p>
				<p>
					<p>Повторите новый пароль:</p>
					<input type="password" name="pass2">
				</p>
				<p>
					<button type="submit" name="do_change">Изменить пароль</button>
				</p>
			</form>
			<p><?php echo($error); ?></p>
		</div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>
<?php mysqli_close($db);