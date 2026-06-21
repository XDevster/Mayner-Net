<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Movies Hub</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
			<h1>Movies Hub</h1>
            <a href="../web/flash.php">
  <button>Вернуться К прошлой странице</button>
</a>
            <a href="../web/masyana.php">
  <button>Масяня</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</a>
</body>
</html>

<?php mysqli_close($db);