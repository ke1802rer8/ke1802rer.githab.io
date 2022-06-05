<?php
session_start();

require_once 'php/books_two.php';

$post_zakaz = zakaz_admin();

$db_host = 'localhost'; $db_user = 'root'; $db_password = 'root'; $db_db = 'sakila'; $db_port = 8889;

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
	
if(isset($_POST['change']))
{
	$status_name = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
	$status_id = $_POST['zakaz_id'];
	$mysqli->query("UPDATE orders SET status_name = '$status_name' WHERE id =".$status_id);
	$mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="header__admin.css">
	<link rel="stylesheet" href="catalog__books.css">
	<link rel="stylesheet" href="zakaz.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="oformzakaza.css">
</head>
<body>
    <div class="html">
	<?php include "header_admin.php"; ?>
        <main class="main_admin">
            <div class="container_user">
                
                <div class="content_admin content_full-w">
                    <h1 class="flex flex-align-center">
                    
                        <span class="heading__text">Заказы</span>
                    </h1>
                    <table class="info-orders">
                        <tbody>
                            <tr>
                                <th>Заказ №</th>
                                <th>Статус</th>
                                <th>К оплате</th>
								<th>Способ оплаты</th>
								<th>id пользователя</th>
								<th>Изменить</th>
                            </tr>
                            <?php foreach($post_zakaz as $zakaz):?>
							<form action="" method="POST">
							<tr data-href="">
							<td>
								<a href="" class="info-orders__order"><?=$zakaz['order_number']?></a>
								<div class="info-orders__items">Товаров: 2</div>
							</td>
							<td>
							<div class="formCategory--body">
								<div class="grid grid--formFields">
									<div class=" columnDesktop--12 columnMobile--12">
									   <div class="vs__dropdown">
										   <p>
											   <input name="status" list="harakte" class="vs__search">
											<datalist id="harakte">
												<option value="Готовится к отправке"></option>
												<option value="Ждет отправки"></option>
												<option value="В пути"></option>
												<option value="Доставлен"></option>		
											</datalist></p>
											<div class="info-orders__pay-type"><?=$zakaz['status_name']?></div>
									   </div>
									</div>
									<h2 id="foo"></h2>
								</div>
							</div></td>
							<td><?=$zakaz['payment_method_id']?>₽</td>
							<td>
								<div class="info-orders__pay-type">Наличка</div>
							</td>
							<td>
								<a href="" class="info-orders__order"><?=$zakaz['user_id']?></a>
							</td>
							<td>
								<button type="submit" method="POST" class="info-orders__button" name="change">отправить</button>
								<input type="hidden" name="zakaz_id" value="<?=$zakaz['id']?>">
							</td>
							</tr>
							</form>
							<?php endforeach;?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php include "footer.php"; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
        
    </script>
 

</body>
</html>