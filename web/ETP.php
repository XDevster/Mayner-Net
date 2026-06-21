<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - ProsonNG</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
<center><embed src="../flash/PrisonNG.swf" width="800" height="500" play="true" loop="false" quality="medium" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
            <a href="../web/games.php">
  <button>Вернуться На Предедущию страницу</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);