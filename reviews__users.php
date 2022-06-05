<?php
session_start();
require_once 'php/books_two.php';

$post_review= review_admin();

$db_host = 'localhost'; $db_user = 'root'; $db_password = 'root'; $db_db = 'sakila'; $db_port = 8889;

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

if(isset($_POST['review'])){
	
	$review_id = $_POST['review_id'];
	$mysqli->query("DELETE FROM reviews WHERE id_review =".$review_id);
	$mysqli->close();

	header('Location: reviews__users.php');
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
</head>
<body>
	<?php include "header_admin.php"; ?>
	<main class="main">
		<div class="pagewrapAdmin">
			<div class="headPageAdmin">
				<div class="headPaddinTop">
					<h1 class="headTitle">Отзывы</h1>

				</div>
				<div class="main__catalog-review">
					<?php foreach($post_review as $review):?>
					<form action="" method="POST" class="catalog__review">
						<div class="basket__wrap">
							<div class="basket__name">
								<div class="review__title"><?=$review['heading']?></div>
								
							</div>
							<div class="book__links" >
								<button type="submit" method="POST" class="book__change" name="review">Удалить</button>
								<input type="hidden" name="review_id" value="<?=$review['id_review']?>">
							</div>
						</div>
						<div class="review__text"><?=$review['review']?> </div>
						<div class="basket__name">
								<div class="review__title"><?=$review['heading']?></div>
								
						</div>
					</form>	
					<?php endforeach;?>				
				</div>
			</div>
		</div>
	</main>
</body>
</html>
<script>
	window.onload=function(){
		document.getElementById('toggler').onclick = function(){
			openbox('box', this);
			return false;
		}
	}

	function openbox(id, toggler){
		var div = document.getElementById(id);
		if(div.style.display == 'block') {
			div.style.display = 'none';
			toggler.innerHTML = 'Редактировать';
		}
		else{
			div.style.display = 'block';
			toggler.innerHTML = 'Закрыть';
		}
	}
</script>