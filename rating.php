<?php
   session_start();
   require_once 'php/books_two.php';
   //Рейтинг звезд
   if(isset($_POST['ratdIndex'])){

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
       
       //$uID = $conn->real_escape_string($_POST['uID']);
       $ratdIndex = $conn->real_escape_string($_POST['ratdIndex']);
       $id_book = $conn->real_escape_string($_POST['i_book']);
       $ratdIndex++;
       

       
       $conn->query("INSERT INTO `rating` (`rate_index`, `book_id`) VALUES ('$ratdIndex', '$id_book')");
           //$sql = $conn->query("SELECT `id` FROM `stars` ORDER BY id DESC LIMIT 1 ");
           //$uData = $sql->fetch_assoc();
           //$uID = $uData['id'];
           
       $conn->close();
       header('Location: infobooks.php');
           //$conn->query("UPDATE `stars` SET `rateIndex`='$ratedIndex' WHERE `id`='$uID' ");
           
       //exit(json_encode(array('id' => $uID)));
       
   }
?>