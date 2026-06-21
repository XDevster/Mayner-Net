<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - 404</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<h1>Error 404</h1>
            <a href="http://mayner-net.42web.io/web/index.php">
  <button>Вернуться На Главную Страницу</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
    <a href="http://mayner-net.42web.io/web/tamago4i.php">
  <button>???</button>
</a>
</body>
</html>

<?php mysqli_close($db);