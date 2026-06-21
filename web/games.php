<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Mayner Игры</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
    <h2>	
­­­­­­­­</h2>
	<div class="main_app">
		<div class="main">
			<h1>Рады Вас Видеть На Mayner Игры</h1>
            <a href="../web/flash.php">
  <button>Вернуться</button>
</a>
            <a href="../web/ETP.php">
  <button>Escape The Prison</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);