<?php
	require "../include/config.php";
       $ban = mysqli_query($db, "UPDATE users SET ban = 1 WHERE id = " .(int)$_SESSION['id']);
?>