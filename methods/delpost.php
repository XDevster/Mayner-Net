<?php
	require_once "../include/config.php";
	include '../include/user.php';
    include '../admin/checkuser.php';

	$post_id = (int)$_GET['id'];

	// Получаем информацию о посте
	$postinf = mysqli_query($db, 'SELECT * FROM post WHERE id = ' . $post_id);
	$postdata = mysqli_fetch_assoc($postinf);

	// Получаем информацию о пользователе
	$user_data = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM users WHERE id = ' . $_SESSION['user']['user_id']));

	// Проверяем токен
	if(token_data($_SESSION['user']['access_token'])['error'] == 0){
		// Проверка прав: является ли автором поста или имеет привилегию >= 2
		if($postdata['id_user'] == $_SESSION['user']['user_id'] || $user_data['priv'] >= 2){
			// Удаляем пост и связанные данные
			$delete = 'DELETE FROM post WHERE id = ' . $post_id;
			if(mysqli_query($db, $delete)){
				mysqli_query($db, 'DELETE FROM likes WHERE post_id = ' . $post_id);
				mysqli_query($db, 'DELETE FROM comments WHERE post_id = ' . $post_id);
				if (!empty($postdata['img'])) {
					unlink($postdata['img']); // Удаляем изображение поста
				}
				header("Location: " . $_SERVER['HTTP_REFERER']);
				exit;
			}
		} else {
			// Если нет прав на удаление, перенаправляем на index.php
			if($_SESSION['user']['admin'] != 1){
            mysqli_query($db, "UPDATE users SET ban = 1 WHERE id = " .(int)$_SESSION['user']['user_id']);
            mysqli_query($db, "INSERT INTO banlist (user_id, reason) VALUES (" .$_SESSION['user']['user_id']. ", 'Забаньте его по IP! за 8.4')");
            header("Location: $url");
            }  
			exit;
		}
	} else {
		// Неверный токен, возвращаем ошибку
		http_response_code(400);
		$error = "Bad request / token";
	}

	echo($error);
?>
