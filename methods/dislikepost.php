<?php
	require_once "../include/config.php";
	include '../include/user.php';

	$dislike = 'INSERT INTO Dislike (post_id, user_id) VALUES (' .(int)$_GET['id']. ', ' .$_SESSION['user']['user_id']. ')';
	$undislike = 'DELETE FROM Dislike WHERE post_id = ' .(int)$_GET['id']. ' AND user_id =' .$_SESSION['user']['user_id'];
    $dislikeinf = mysqli_query($db, 'SELECT * FROM Dislike WHERE post_id = ' .(int)$_GET['id']. ' AND user_id =' .$_SESSION['user']['user_id']);
	$dislikedata = mysqli_fetch_assoc($dislikeinf);

	if(token_data($_SESSION['user']['access_token'])['error'] == 0){
		if(!empty($likedata)){
			mysqli_query($db, $unlike);
			header("Location: " .$_SERVER['HTTP_REFERER']. "#post" .(int)$_GET['id']);
		} elseif(empty($likedata)){
			mysqli_query($db, $like);
			header("Location: " .$_SERVER['HTTP_REFERER']. "#post" .(int)$_GET['id']);
		}
	} else {
		http_response_code(400);
		$error = "Bad request / token";
	}

	echo($error);
?>