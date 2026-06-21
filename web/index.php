<?php
	require_once "../include/config.php";

	if(isset($_SESSION['user'])){
		$all = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM users WHERE id = ' .(int)$_SESSION['user']['user_id']));

		if($all['ban'] == 1){
			$_SESSION['user']['ban'] = 1;
			header("Location: ban.php");
		}
    }
?>

<html>
<head>
	<?php include "../include/html/head.php" ?>
    <title><?php echo($sitename); ?></title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>

	<div class="main_app">
		<div class="main">
			<?php echo($lang_welcome); ?>
            <li><img src="APPICO/1.png" alt="" class="templatemo-item"></li>
            <h>Version 1.1</h>
            <a href="https://mega.nz/file/WYlxGYgK#HUkOgNEpKII3TCzWUza-Sw6qX4rn_kxC7E9MlboWwcA">
           <button>Скачать BatchDown</button>
            <h2>ㅤ</h2>
            <li><img src="APPICO/tomaticon.png" alt="" class="templatemo-item"></li>
            <h>Version 1.0</h>
            <a href="https://mega.nz/file/KE9WyZKZ#yLxE3QeZ3vydwnCRlgUQ_--qhGN3NxPckXLgWcSm-v4">
           <button>Скачать Andrey the Tomato: Ketchup Chronicles</button>
		</div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>
<?php mysqli_close($db);