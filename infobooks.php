<?php

    session_start();
    if(isset($_POST['add']))
    {
    //print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");
            //print_r($_SESSION['cart']);
            if(in_array($_POST['product_id'], $item_array_id)){

            }
            else{
                $price_all +=  $_POST['price_header'];
                $count = count($_SESSION['cart']);
                $item_array = array('product_id' => $_POST['product_id']);
                $_SESSION['cart'][$count] = $item_array;
                $product_id = array_column($_SESSION['cart'], 'product_id');
                //print_r($_SESSION['cart']);
                //foreach($product_id as $id){
                    //print_r($id);
                //}
            }
                
                
            
        }else{
            $item_array=array('product_id' => $_POST['product_id']);
            $_SESSION['cart'][0] = $item_array;
            //print_r($_SESSION['cart']);
            $product_id = array_column($_SESSION['cart'], 'product_id');
            #print_r($product_id);
        }

    
    
    }
       
    $post_id = $_GET['post_id'];
    
    if(!is_numeric($post_id))  exit();
    require_once 'php/books_two.php';

    $post = get_post_by_id($post_id);//вывод информации книги
    $post_review = get_post_review($post_id);//вывод отзывов
    
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
    
        //подсчет кол-ва отзывов
       $sql_review = $conn->query("SELECT COUNT(*) AS total FROM reviews WHERE reviews.book_id = ".$post_id);

       $rReview = $sql_review->fetch_array();
       $result3 = $rReview['total'];

       if($result3 == 1){
           $ru = 'отзыв';
       }
       else if($result3 == 0 || $result3 > 4){
            $ru = 'отзывов';
       }
       else{
           $ru = 'отзыва';
        }
        //написание отзыва
        if(isset($_POST['send'])){
            require_once 'review.php';
        }
        //подсчет кол-ва оценок
        $sql_rating = $conn->query("SELECT COUNT(*) AS total FROM rating WHERE rating.book_id = ".$post_id);
        $rRating = $sql_rating->fetch_array();
        $rating_count = $rRating['total'];
    
    //$ratedIndex = $_POST['ratedIndex'];
    //$ratedIndex = $_GET['ratdIndex'];
    //$ratedIndex = 4;
    
    //echo real_escape_string($_POST['ratdIndex']);
    //echo json_encode($uid);
    
    //$ratedIndex = $_POST['ratdIndex'];
    //echo $ratedIndex;
    //$ratedIndex++;
    //$conn->query("INSERT INTO `rating` (`rate_index`) VALUES ('$ratedIndex')");
    //$conn->close();
     
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="booksstyle.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css"> 
    <link rel="stylesheet" href="css/mediastyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d4346b87e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="search_header2.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    
    
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
      
        <main class="main">
        
            <div class="product">
                <div class="container_for_infobook">
                    <div class="product_main">
                        <div class="product_media-block">
                            <div class="product__image js__show_gallery" data-media="photo">
                                <img class=" lazyloaded" alt="" title="" itemprop="image" src="img/<?=$post['img']?>.jpg">
                                
                            </div>
        
                        </div>

                        
                        <div class="product__header">
                            <h1 class="product__title js-analytic-product-title" itemprop="name">
                            <?=$post['title']?>
                            </h1>
                            <a class="link product__author">
                            <?=$post['name_author']?> <?=$post['surname']?> 
                            </a>
                        </div>
                        <div class="product__rating" id="starRatingUpd" data-u="5677212" data-prod="2849211" data-type="1" data-my="0">
                            <div class="rating">
                                <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                <span class="js__rating_count">0.00</span>
                            </div>
                            <div class="star-rating">
                                <div class="star-rating__status js__star_rating_status">
                                    <span class="star-rating__text js__star_rating_text"><?=$rating_count?> оценок</span>
                                    <button class="star-rating__btn js__star_rating_btn">Оценить</button>
                                </div>

                                <form class="star-rating__stars js__star_rating_stars hidden">
                                    <!--<input class="star-rating__star-input js__star_rating" id="star-4" name="star-rating" value="5" type="radio">
                                    <label class="star-rating__star-label" for="star-4">
                                        <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                    </label>

                                    <input class="star-rating__star-input js__star_rating" id="star-3" name="star-rating" value="4" type="radio">
                                    <label class="star-rating__star-label" for="star-3">
                                        <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                    </label>

                                    <input class="star-rating__star-input js__star_rating" id="star-2" name="star-rating" value="3" type="radio">
                                    <label class="star-rating__star-label" for="star-2">
                                        <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                    </label>

                                    <input class="star-rating__star-input js__star_rating" id="star-1" name="star-rating" value="2" type="radio">
                                    <label class="star-rating__star-label" for="star-1">
                                        <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                    </label>

                                    <input class="star-rating__star-input js__star_rating" id="star-0" name="star-rating" value="1" type="radio">
                                    <label class="star-rating__star-label" for="star-0">
                                        <svg class="star"><use xlink:href="#star-icon" href="#star-icon"></use></svg>
                                    </label>-->
                                    <div class="centre">
                                    
                                        <i class="fa fa-star fa-x" data-index="0"></i>
                                        <i class="fa fa-star fa-x" data-index="1"></i>
                                        <i class="fa fa-star fa-x" data-index="2"></i>
                                        <i class="fa fa-star fa-x" data-index="3"></i>
                                        <i class="fa fa-star fa-x" data-index="4"></i>
                                    </div>
                                </form>
                            </div>

                            <div class="reviews js__go_to_reviews">
                                <i class="chg-icon chg-icon-chat"></i>
                                <span><?=$result3?> <?=$ru?> </span>
                            </div>
                        </div>
                        
                        <div  class="product__trade-block">
                            <div class="trade-container">
                                <div class="price-block">
                                    <div class="product__price">
                                        <div class="price"><?=$post['price']?> </div>
                                    </div>
                                </div>
                                <?php 
                                $ok = $post['id'];
                                $lo = 0;
                                $product_id = array_column($_SESSION['cart'], 'product_id');
                                foreach($product_id as $id){
                                    if($id == $ok){
                                        $lo = 1;
                                    }
                                }   
                                if($lo == 1):?> 
                                    <button class="button button_product product-action js__product_card_button" data-book-id="" data-status="buy" data-element="" data-productprice="" data-oldproductprice="" data-chg-add-to-cart="">
                                        <span class="js__card_button_text">Товар в корзине</span>
                                    </button>
                                <?php else:?>
                                    <button type="submit" method="POST" class="button button_product product-action js__product_card_button"  data-status="buy" name="add"  >
                                        <span class="js__card_button_text">Добавить в корзину</span>
                                    </button>
                                    
                                <?php endif;?>
                                <input type="hidden" name="product_id" value="<?=$post['id']?>">
                            </div>
                            
                        </div>
                        <div class="product__properties">
                            <div class="product__props">
                                <div class="product-prop">
                                    <div class="product-prop__title">ID товара</div>
                                    <div class="product-prop__value"><?=$post['id']?></div>
                                    <input type="hidden" id="id_bookkk" value="<?=$post['id']?>">
                                </div>
                                <div class="product-prop">
                                    <div class="product-prop__title">Издательство</div>
                                    <div class="product-prop__value"><?=$post['name']?></div>
                                </div>
                                <div class="product-prop">
                                    <div class="product-prop__title">Год издания</div>
                                    <div class="product-prop__value"><?=$post['published_date']?></div>
                                </div>
                                <div class="product-prop">
                                    <div class="product-prop__title">Количество страниц</div>
                                    <div class="product-prop__value"><?=$post['pages']?></div>
                                </div>
                                <div class="product-prop">
                                    <div class="product-prop__title">Тип обложки</div>
                                    <div class="product-prop__value"><?=$post['cover_type']?></div>
                                </div>
                                <div class="product-prop">
                                    <div class="product-prop__title">Возрастное ограничение</div>
                                    <div class="product-prop__value"><?=$post['age_limit']?>+</div>
                                </div>
                            </div>

                        </div>
                       
                        <div class="product__description">
                            <div class="product__position">
                                <div class="title_infobooks"><p>Аннотация</p></div>
                                <div itemprop="description" class="title__description">
                                <?=$post['annotation']?>
                                </div>
                            </div>
                                            
                        </div>
                    </div>
                </div>
                <div class="container_for_infobook" id="#">
                    <h2 class="title_infobooks">Отзывы покупателей</h2>
                    <button class="btn_large js__add_review_btn">Оставить отзыв</button>
                    <section class="review_form js__review_form hidden">
                        <div class="review_title">
                            <h3 class="review_title-color">Оставить отзыв</h3>
                            
                        </div>
                        <div class="review-form__close js__review_form_close">
                            <span class="header-features__close js__close">×</span>
                        </div>
                        <div class="review_text">
                            Поделитесь впечатлением об опыте использования товара
                        </div>
                        <div class="review_form-container">
                            <form method="post" >
                                <div class="review-form__input-wrap">
                                    <div class="input-wrap">
                                        <label for="reviewTitle" class="input-label">Заголовок</label>
                                        <input type="text" id="reviewTitle" class="input_review" name="title" required="required">
                                    </div>
                                    <div class="input__error color_red js__title_error hidden"></div>
                                </div>
                                <div class="review-form__input-wrap input-wrap_textarea">
                                    <div class="input-wrap">
                                        <label for="reviewText" class="input-label">Комментарий</label>
                                        <textarea type="text" id="reviewText" class="input_review input_textarea" name="text" required="required"></textarea>
                                    </div>
                                    <div class="input__error color_red js__text_error hidden"></div>
                                </div>
                                <div class="input-wrap review-form__input-wrap">
                                    <label for="name" class="input-label">Имя</label>
                                    <input type="text" id="name" class="input_review" name="user_name" value="">
                                </div>
                                <button class="btn_large submit_review js__submit_form" name="send">Опубликовать</button>
                            
                            </form>
                        </div>
                    </section>
                    <?php foreach($post_review as $post): ?>
                    <section class="review-list product__review-list">
                        <div class="review-item">
                            <div class="review-content">
                                <p class="review-title"><?=$post['heading']?></p>
                                <p class="review-text"><?=$post['review']?></p>

                            </div>
                            <div class="review-footer">
                                <span class="review-author"><?=$post['name_user']?></span>
                            </div>
                        </div>
                    
                        
                    </section>
                    <?php endforeach;?>
                </div>
            </div>
        </main>
        <?php include "footer.php"; ?>
        
        <div id="fancybox-stage">
            <form action="/" class="fancybox-container">

                <div class="filter__inner">
                    <div class="filterHead">
                        <div class="filterHead__button">
                            <h1 class="main__title">
                                Каталог
                            </h1>
                        </div>
                    </div>
                    <nuv class="nav--catalog">
                        <ul class="navigation">
                            <li class="navigation__item"><a href="" class="navigation__link">Литература</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Ужасы и мистика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Фантастика. Фэнтези</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Романтика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Боевики</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Детективы</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Приключения</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Знания и навыки</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Книги для детей</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">История</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Психология</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Образование</a></li>
                        </ul>

                    </nuv>
                </div>
            </form>
         
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtersClick.js"></script>
    <script src="js/catalogclikc.js"></script>
<script>
        var ratedIndex = -1, ru = 1;
        var id_book = document.getElementById('id_bookkk').value;
        $(document).ready(function(){
            //вызываем функцию изменения цвета рейтинга
            
            resetStarColors();
            if(localStorage.getItem('ratedIndex') != -1){
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                //uID = localStorage.getItem('uID');
                
            }

            $('.fa-star').on('click', function(){
                ratedIndex = parseInt($(this).data('index'));
                localStorage.setItem('ratedIndex', ratedIndex);
                saveToTheDB();
                //console.log(ratedIndex);
            });
            $('.fa-star').mouseover(function(){
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);

            }); 

            $('.fa-star').mouseleave(function(){
                
                if(ratedIndex != -1)
                    
                    setStars(ratedIndex);
                else
                    resetStarColors();

            });
        });
        function saveToTheDB(){
            $.ajax({
                url: "rating.php",
                method: "POST",
                data:{
                    i_book:id_book,
                    ratdIndex:ratedIndex},
                success: function(data){
                    console.log('получилось');
                }, error: function(){
                        console.log('ERROR');
                    }     
                          
            });
        }
        function setStars(max){
            for(var i=0; i <= max; i++){
                $('.fa-star:eq('+i+')').css('color', 'orange');
            }
        }
         //функция изменения цвета 
        function resetStarColors(){
            $('.fa-star').css('color', 'gray');
        }
</script>


    <script>
        document.querySelector('.js__add_review_btn').addEventListener('click', () => {
            document.querySelector('.js__review_form').classList.remove('hidden');
            document.querySelector('.js__add_review_btn').classList.toggle('hidden');
        });
        document.querySelector('.js__close').addEventListener('click', () => {
            document.querySelector('.js__review_form').classList.toggle('hidden');
            document.querySelector('.js__add_review_btn').classList.remove('hidden');
        });
        document.querySelector('.js__star_rating_btn').addEventListener('click', () => {
            document.querySelector('.js__star_rating_stars').classList.remove('hidden');
            document.querySelector('.js__star_rating_status').classList.toggle('hidden');
        });
        document.querySelector('.centre').addEventListener('click', () => {
            document.querySelector('.js__star_rating_stars').classList.toggle('hidden');
            document.querySelector('.js__star_rating_status').classList.remove('hidden');
        });
    </script>
    <script src="js/sorts_books.js"></script>

</body>
</html>
