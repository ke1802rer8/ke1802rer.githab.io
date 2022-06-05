<?php
    if (isset($_POST['send'])) {
        $form['prod_id'] = intval($_POST['prod_id']);  // ID товара
        $form['rating']  = intval($_POST['rating']);   // Оценка
        $form['name']    = $_POST['name'];             // Имя
        $form['text']    = $_POST['text'];             // Отзыв
     
        $dbh = new PDO('mysql:dbname=db_name;host=localhost', 'логин', 'пароль');
        $sth = $dbh->prepare("
            INSERT INTO 
                `reviews` 
            SET 
                `prod_id` = :prod_id, 
                `rating`  = :rating,
                `name`    = :name,
                `text`    = :text,
                `date`    = UNIX_TIMESTAMP()
        ");
        $sth->execute($form);
    }
?>