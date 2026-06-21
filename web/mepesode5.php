<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Сереия 3</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
<script>
                window.RufflePlayer = window.RufflePlayer || {};
                window.RufflePlayer.config = {
                    "warnOnUnsupportedContent": false, 
                    "autoplay": "on",
                    "quality": "high",
                    "unmuteOverlay": "hidden"
                };
            </script>
        <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
        <embed src="../flash/m05.swf" width="400" height="300">
            <a href="../web/masyana.php">
  <button>Вернуться На Предедущию страницу</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);