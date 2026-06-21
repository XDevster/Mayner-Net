<?php
	require_once "../include/config.php";
?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title><?php echo($lang_authors); ?></title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
            <h2><?php echo($lang_authors1); ?></h2>
			<table class="user">
				<tr>
					<td><img class="img100" src="https://avatars.githubusercontent.com/u/85364286?v=4"></td>
					<td class="info">
						<a href="https://github.com/KovshKomeij">
							<h1>Дибоф (KovshKomeij или dibof228)</h1>
						</a>
					</td>
				</tr>
			</table>

            <h2><?php echo('Mayner Net (Сам Форк) сделали эти люди'); ?></h2>
				
				<table class="user">
					<tr>
					<td><img class="img100" src="https://mayner-net.42web.io/cdn/66327acf7ea19.jpg"></td>
                    					<td class="infom">
                    						<a href="https://mayner-net.42web.io/web/user.php?id=1">
                                            							<h1>matveymayner (РазРАБ)</h1>
					<tr>
                                					<td><img class="img100" src="https://avatars.githubusercontent.com/u/119345764?v=4"></td>
                    					<td class="infom">
                    						<a href="https://mayner-net.42web.io/web/user.php?id=24">
                                            							<h1>Rasbur (Дизайнер)</h1>
								</h1>
							</a>
						</td>
					</tr>
                    </tr>
				</table>

            <h2><?php echo($lang_authors3); ?></h2>
		</div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);