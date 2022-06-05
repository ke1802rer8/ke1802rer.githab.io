<?php

    function get_pag(){
        $myPHPArray = json_decode($_POST["activitiesArray"]);
        return $myPHPArray;
    }
    
    function get_posts($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, authors, authors_books WHERE books.publisher_id = publishers.id_publish and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }
    
    function get_genre($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Литература'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_adventure($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books 
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Приключение'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_children($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books 
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_idand and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Книги для детей'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_detectiv($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Детектив'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }

    function get_education($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Образование'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_psychology($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Психология'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_romans($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Роман'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_skill($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Навык'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_fantastic($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Фантастика'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_history($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'История'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_horrors($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Ужасы'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_thriller($id = FALSE){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        
        $sql = "SELECT * FROM books, publishers, genres, genres_books, authors, authors_books  
        WHERE books.publisher_id = publishers.id_publish and books.id = genres_books.book_id and genres.id_genres = genres_books.genre_id and books.id = authors_books.book_ID and authors.id_authors = authors_books.author_ID and genres.name_genre = 'Боевик'";
        
        if($id){
            if($id == 'pricea'){
                $sql .= ' ORDER BY price ASC';

            }
            else if($id == 'priced'){
                $sql .= ' ORDER BY price DESC';
            }
            else if($id == 'new'){
                $sql .= 'ORDER BY published_date ASC';
            }
        }
        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;

    }
    function get_published(){
        $link = mysqli_connect('localhost', 'root', 'root', 'sakila');
        $sql = "SELECT * FROM books, publishers WHERE books.published_id = publishers.id";
        $result = mysqli_query($link, $sql);
        $published = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $published;

    }
    
?>