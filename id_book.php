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
    

    
        $number = 9;


        
        $mysqli->query("INSERT INTO `stars` (`rateIndex`) VALUES ('$number')");
        
        $mysqli->close();
        header('Location: infobooks.php?post_id='.$book_id);
  
    
    

    

     
?>

	
