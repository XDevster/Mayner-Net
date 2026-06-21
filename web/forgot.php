<?php
	require_once "../include/config.php";
    $data = $_POST;

    if(isset($data['forgot'])){
        $users = R::findOne('users', 'email = ?', array($data['email']));
        if($users){
            $key = md5($users->email.rand(1000, 9999));
            $users->change_key =$key;
            R::store($users);

            $url = $site_url.'newpass.php?key='.$key;
            $message = $users->email.", был выполнен запрос на вашего измененения пароля \n\n Для Изменения перейдите по ссылке: ".$url."\n\n Если Это Были Не Вы, То советуем вам изменить ваш пароль!";

          mail($data['email'], 'Заявка на изменения пароля на сайте mayner net', $message);
          header('Location: /web/');

        }else{
            echo "Данный Email Не Привязан К Какой либо Учётной записи!";
        }
    }

?>

<html>
<head>
	<?php include '../include/html/head.php'; ?>
    <title>Mayner Net - Забыли Пароль</title>
</head>
<body>
	<?php include '../include/html/header.php'; ?>
	<div class="main_app">
		<div class="main">
            <form action="/web/" method="post" class="sign_form"
			<h1>Востановление Учётной записи</h1>
            <input type="email" name="email" placeholder="email"><br>
            <button type="submit" name="forgot">Отправить Письмо</button>
</a>
        </div>
	</div>
	<?php include "../include/html/footer.php" ?>
</body>
</html>

<?php mysqli_close($db);