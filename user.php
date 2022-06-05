<?php

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $password = filter_var(trim($_POST['pass2']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 3 || mb_strlen($login) > 50) {
        
        exit();
    }else if(mb_strlen($password) < 8 || mb_strlen($password) > 50){
        
        exit();
    }


    $password = md5($password."HelloBoooksBar");

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'sakila';
    $db_port = 8889;


    $mysqli = new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db,
        $db_port
    
    );
    
    $result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password_user` = '$password'");
    $user = $result->fetch_assoc();
    
    if(count($user) == 0){
        echo "NO USER FAUND";
        exit();
    }
    setcookie('user', $user['login'], time() + 3600, "/");
    setcookie('id_user', $user['id']);
    
    $mysqli->close();

    header('Location: index.php');
    
   

    

?>