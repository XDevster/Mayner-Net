<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Flash</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<h2>Добро пожаловать на страницу с flash играм/Мультфильмами</h2>			            <a href="../web/MoviesHub.php">  <button>Мультфильмы</button></a>			            <a href="../web/games.php">  <button>Игры - Mayner Игры</button></a>
            <a href="../web/uc.php">  <button>Ваши Flash игры</button></a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);