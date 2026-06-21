<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Эмодзи</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
                <h3>	
­­­­­­­­</h3>
	<div class="main_app">
		<div class="main">
			<h1>Вы Тут Можете Выбрать любой эмодзи и вставить его как ссылку</h1>
            <h3>Agree-Согласен https://mayner-net.42web.io/web/kolobki/agree.gif</h3>
            <h3>Agreesive-Агрессивный https://mayner-net.42web.io/web/kolobki/agreesive.gif</h3>
            <h3>Angel-Ангел https://mayner-net.42web.io/web/kolobki/angel.gif</h3>
            <h3>Assassin-Ассасин https://mayner-net.42web.io/web/kolobki/assassin.gif</h3>
            <h3>Bad-Плохой https://mayner-net.42web.io/web/kolobki/bad.gif</h3>
            <h3>Banned-Забанен https://mayner-net.42web.io/web/kolobki/banned.gif</h3>
            <h3>Beach-Пляж https://mayner-net.42web.io/web/kolobki/beach.gif</h3>
            <h3>Beta-Бэта https://mayner-net.42web.io/web/kolobki/beta.gif</h3>
            <h3>Crazy-Сумашедший https://mayner-net.42web.io/web/kolobki/crazy.gif</h3>
            <a href="http://mayner-net.42web.io/web/profile.php">
  <button>Вернуться На Ваш Профиль</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);