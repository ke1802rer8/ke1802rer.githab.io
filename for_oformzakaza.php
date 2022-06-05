<?php
    
       
    session_start();
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

        //выбор оплаты =
        //$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
        $note = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
        $city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
        $payment_method = filter_var(trim($_POST['payment-method']), FILTER_SANITIZE_STRING);
        $postal_code = filter_var(trim($_POST['postal_code']), FILTER_SANITIZE_STRING);
        $phone_number = filter_var(trim($_POST['phone_number']), FILTER_SANITIZE_STRING);
        $street = filter_var(trim($_POST['street']), FILTER_SANITIZE_STRING);
        $bulding_no = filter_var(trim($_POST['bulding']), FILTER_SANITIZE_STRING);
        $flat_no = filter_var(trim($_POST['flat']), FILTER_SANITIZE_STRING);
        $user_id = $_COOKIE['id_user'];
        $order_number = 1;
        $status = 'ожидание подтверждения';

        $mysqli->query("INSERT INTO  `orders` (`order_number`, `status`, `city`, `street`, `bulding_no`, `flat_no`, `postal_code`, `phone_number`, `note`, `user_id`, `payment_method_id`) 
        VALUES ( '$order_number', '$status', '$city', '$street', '$bulding_no', '$flat_no', '$postal_code', '$phone_number', '$note', '$user_id', '$payment_method')");

        //для добавления ключей order_books
        $amount = 1;
        $order_id = 3;
        $product_id = array_column($_SESSION['cart'], 'product_id');
        foreach($product_id as $id){
            $mysqli->query("INSERT INTO `orders_books` (`order_id`, `book_id`, `amount`) VALUES ( '$order_id', '$id', '$amount')");
        }
        $mysqli->close();

        header('Location: oformzakaza.php');

       
       
?>