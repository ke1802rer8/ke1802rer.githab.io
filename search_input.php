<?php

   
    
    get_search($title){
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
    
        $resulttt = $mysqli->query("SELECT * FROM books WHERE title LIKE '%$title%' LIMIT 20;");
        $postt = mysqli_fetch_assoc($resulttt);
        
        return $postt;
    }
    
    
    //header('Location: search_page.php');
?>
           


    
    
        
    

    

     


	
