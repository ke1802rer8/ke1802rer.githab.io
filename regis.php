<?php
    
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'sakila';
    $db_port = 8889;

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

    if(isset($_POST['do_signup']))
    {
        $email = filter_var(trim($_POST['email_user']),
        FILTER_SANITIZE_STRING);
    
        $number = filter_var(trim($_POST['number1']),
        FILTER_SANITIZE_STRING);
        
        $login = filter_var(trim($_POST['name1']),
        FILTER_SANITIZE_STRING);
    
        $password = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

        if(mb_strlen($login) < 3 || mb_strlen($login) > 50) {
            exit();
        }else if(mb_strlen($password) < 8 || mb_strlen($password) > 50){
            
            exit();
        }

        $password = md5($password."HelloBoooksBar");

        $mysqli->query("INSERT INTO  `users` (`login`, `email`, `password_user`, `phone_number`) 
        VALUES ('$login', '$email', '$password', '$number')");

        $mysqli->close();

        header('Location: index.php');
        
    }  
?>

	
