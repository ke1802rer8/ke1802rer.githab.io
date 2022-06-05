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
    

    $heading = filter_var(trim($_POST['title']),
        FILTER_SANITIZE_STRING);

        $text = filter_var(trim($_POST['text']),
        FILTER_SANITIZE_STRING);

        $name = filter_var(trim($_POST['user_name']),
        FILTER_SANITIZE_STRING);

        $book_id = $post_id;


        $mysqli->query("INSERT INTO  `reviews` (`name_user`, `heading`, `review`, `book_id`) 
        VALUES ('$name', '$heading', '$text', '$book_id')");

        $mysqli->close();
        header('Location: infobooks.php?post_id='.$book_id);
  
    
    

    

     
?>

	
