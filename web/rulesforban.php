<?php 
    require_once '../include/config.php';

        if(!isset($_SESSION['user'])){
                header("Location: login.php");
                    }

                        $data = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM users WHERE id = ' .$_SESSION['user']['user_id']));

                            if($data['ban'] != 1){
                                    $_SESSION['user']['ban'] = 0;
                                            header("Location: index.php");
                                                }

                                                    $bandata = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM banlist WHERE user_id = ' .$_SESSION['user']['user_id']));

?>

<a href="http://mayner-net.42web.io/web/ban.php">
<button>Вернуться к Блокировке</button>
</a>
­­­­­­­­</h2>
		<h3><?php echo($lang_main_rules1); ?></h3>
        <h3><?php echo($lang_main_rules2); ?></h3>
        <h3><?php echo($lang_main_rules3); ?></h3>
        <h3><?php echo($lang_main_rules4); ?></h3>
        <h3><?php echo($lang_main_rules5); ?></h3>
        <h3><?php echo($lang_main_rules6); ?></h3>
        <h3><?php echo($lang_main_rules7); ?></h3>
        <h3><?php echo($lang_main_rules8); ?></h3>
        <h3><?php echo($lang_main_rules9); ?></h3>
        <h3><?php echo($lang_main_rules10); ?></h3>
        <h3><?php echo($lang_main_rules11); ?></h3>
        <h3><?php echo($lang_main_rules12); ?></h3>
        <h3><?php echo($lang_main_rules13); ?></h3>
        <h3><?php echo($lang_main_rules14); ?></h3>
        <h3><?php echo($lang_main_rules15); ?></h3>
        <h3><?php echo($lang_main_rules16); ?></h3>
        <h3><?php echo($lang_main_rules17); ?></h3>
        <h3><?php echo($lang_main_rules18); ?></h3>
        <h3><?php echo($lang_main_rules19); ?></h3>
        <h3><?php echo($lang_main_rules20); ?></h3>
        <h3><?php echo($lang_main_rules21); ?></h3>
        <h3><?php echo($lang_main_rules22); ?></h3>
        <h3><?php echo($lang_main_rules23); ?></h3>
        <h3><?php echo($lang_main_rules24); ?></h3>
        <h3><?php echo($lang_rules_sogl); ?></h3>
        </div>
	</div>