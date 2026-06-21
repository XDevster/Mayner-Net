<?php
	require_once "../include/config.php";
    include '../include/user.php';
    mysqli_query($db, "UPDATE users SET del = 1 WHERE id = " .(int)$_SESSION['user']['user_id']);
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Удаление</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<h1>Рады Были Вас Видеть на MaynerNet! Грустно что вы ушли...</h1>
            <a href="http://mayner-net.42web.io/web/logout.php">
  <button>Выйти из аккаунта</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</a>
</body>
</html>

<?php mysqli_close($db);