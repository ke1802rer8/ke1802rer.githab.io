<?php
   get_rating_count($post_id){

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'sakila';
    $db_port = 8889;

    $conn = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db,
            $db_port
    );

    $sql_rating = $conn->query("SELECT COUNT(*) AS total FROM rating WHERE rating.book_id = ".$post_id);
    $rRating = $sql_rating->fetch_array();
    $rating_count = $rRating['total'];
    return $rating_count;
   }
?>