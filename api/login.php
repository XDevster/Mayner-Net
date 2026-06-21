<?php 
    require_once "../include/config.php";

    header('Content-Type: application/json');

    $json = array();
    $user = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM users where login = "' .mysqli_real_escape_string($db, $_REQUEST['username']). '"'));

    function createtoken($login, $pass){
        $token = array("id" => (int)$login, "pass" => $pass);
        return(base64_encode(json_encode($token)));
    };

    if(empty($user)){
        $json['error_code'] = 28;
        $json['error_msg'] = "Неверный логин или пароль";
    }

    if(!password_verify(mysqli_real_escape_string($db, $_REQUEST['password']), $user['pass'])){
        $json['error_code'] = 28;
        $json['error_msg'] = "Неверный логин или пароль";
    }

    if(trim(empty($_REQUEST['username'])) or trim(empty($_REQUEST['password']))){
        $json['error_code'] = 100;
        $json['error_msg'] = "Нужен Логин и пароль!";
    }

    if(empty($json['error_code'])){
        $json['access_token'] = createtoken($user['id'], $_REQUEST['password']);
        $json['user_id'] = (int)$user['id'];
    }
    
    echo(json_encode($json));
    
    mysqli_close($db);