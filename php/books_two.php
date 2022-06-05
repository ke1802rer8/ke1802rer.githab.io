<?php
    function get_post_by_id($post_id){

        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'sakila';
        $db_port = 8889;

        $links = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db,
            $db_port
        );
        $links = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sqlu = "SELECT * FROM books, publishers , authors, authors_books WHERE books.publisher_id = publishers.id_publish AND books.id = authors_books.book_id  AND 
        authors.id_authors = authors_books.author_id  AND books.id = ".$post_id;
        $resulty = mysqli_query($links, $sqlu);
        $post = mysqli_fetch_assoc($resulty);
        return $post;
    }
    function get_card(){
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'sakila';
        $db_port = 8889;

        $links = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db,
            $db_port
        );
        $links = mysqli_connect('localhost', 'root', 'root', 'sakila');

        $sqlu = "SELECT * FROM books, publishers , authors, authors_books WHERE books.publisher_id = publishers.id_publish AND books.id = authors_books.book_id  AND 
        authors.id_authors = authors_books.author_id ";
        $resulty = mysqli_query($links, $sqlu);
        $post = mysqli_fetch_assoc($resulty, MYSQLI_ASSOC);
        return $post;
    }
    
    function get_post_review($post_id){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM reviews WHERE reviews.book_id = ".$post_id;
        
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }

    function count_review($post_id){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT COUNT(*) FROM reviews WHERE reviews.book_id = ".$post_id;
        
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }

    function zakaz_user(){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        $user_ids = $_COOKIE['id_user'];
        $sql = "SELECT * FROM orders WHERE orders.user_id = ".$user_ids;
        
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }
    function zakaz_admin(){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        $sql = "SELECT * FROM orders ";
        
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }
    function review_admin(){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        $sql = "SELECT * FROM reviews";
        
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }
?>