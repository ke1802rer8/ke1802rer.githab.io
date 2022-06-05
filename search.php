<?php

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
    session_start();

    
    if(isset($_POST['search_id'])){
        $_SESSION['SEARCH'] = filter_var(trim($_POST['search']), FILTER_SANITIZE_STRING);
        //$title = $_SESSION['SEARCH'];
        header("Location: search_page.php");
        //return $post;
        //echo '<ul>';
                   // <!-- Создаем элементы списка. При клике на результат вызываем функцию обработчика fill() из файла "script.js". В параметре передаем найденное имя-->
            
                    
                    
        //}
    }
    
    
    
    //header('Location: search_page.php');
?>
           


    
    
        
    

    

     


	
