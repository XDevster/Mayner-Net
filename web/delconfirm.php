<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Точно Хотите???</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<h1>Удалить Ваш Аккаунт?</h1>
            <p></p>
            <a href="https://mayner-net.42web.io/web/delete.php">
  <button>Да</button>
</a>

            <a href="https://mayner-net.42web.io/web/edit.php">
  <button>Нет, Я перешёл сюда случайно! </button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);