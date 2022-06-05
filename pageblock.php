<?php
session_start();

require_once 'php/books.php';
$rows = get_posts();
$posts = get_posts();
//если пользователь нажмет удалить какой-либо товар то
if (isset($_POST['remove'])){
    print_r($t);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/booksstyle.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="search_header.css">
    <link rel="stylesheet" href="slider.css">
    
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
        <main class="main">    
            <div class="container__books">     
                <div class="cart" data-chg-name="Корзина" data-chg-event-group="basket">

                    <div class="headPage">
                
                        <div class="title--wrapper">
                            <h1 class="main__title--basket">
                                Корзина
                            </h1>
                            
                        </div>
    
                    </div>
                    <ul class="cart-nav">
                        <div class="delete-all-items js__delete-all-items-button" data-chg-delete-all-items="">
                            Удалить все товары
                        </div>
                    </ul>
                    <div class="card-tab">
                        <div class="card_items">
                            <div class="cart-items__empty js_cart-items__empty hidden">
                                <div class="text">Ваша корзина пуста</div>
                            </div>
                            <div class="js-simplebar">
                               <?php
                                $total = 0;
                                $product_id = array_column($_SESSION['cart'], 'product_id');
                                foreach($rows as $row){
                                    foreach($product_id as $id){
                                        if($row['id'] == $id){
                                                printf('
                                            <form class="basket-item js_basket-item js_product" bb-id="%s">
                                                <div class="basket__wrapper">
                                                    <a href= "infobooks.php?post_id=%s" target="" class="basket-item__block basket-item__image">
                                                        <img src="img/%s_preview.jpg">
                                                    </a>
                                                    <div class="basket-item_block basket-item_info">
                                                        <div class="basket-item__main">
                                                            <div class="basket-item__name js-analytic-product-title">
                                                                <a href="infobooks.php?post_id=%s" target="_blank" class="basket-item__link">%s</a>
                                                            </div>
                                                            <div class="basket-item__author">%s %s</div>
                                                        </div>
                                                    </div>
                                                        <div class="basket-item__block basket-item__numbers">
                                        
                                                            <div class="basket-item__counter">
                                                                <div class="item-counter" data-book-id="2839595">
                                                                    <div class="item-counter__btn js__item-counter__btn_minus" data-product="2840408" data-productprice="389" >
                                                                    –
                                                                    </div>
                                                                    <input class="item-counter__value js__item-counter__value"  data-book-id="" type="text" data-max-count="300" value="1">
                                                                    <div class="item-counter__btn js__item-counter__btn_plus" data-product="2840408" data-productprice="389" data-oldproductprice="">
                                                                    +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="basket-item__price" data-currency="₽">
                                                        
                                                                <div class="basket-item__price-total js__price">
                                                        
                                                                    <span class="basket-item__price-total_discount js__total-price">%s&nbsp;₽</span>
                                                                </div>
                                                                <div class="basket-item__price-composition">
                                                                    <span class="js__item-price">%s</span>&nbsp;₽ х
                                                                    <span class="js__product_count">1</span> шт.
                                                                
                                                                </div>
                                                    
                                                    
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="basket-item__block basket-item__controls" >
                                        
                                                            <button type="submit" method="POST" class="basket-item__control basket-item__control_delete js__delete-item-button" name="remove">
                                                            
                                                                Удалить
                                                            </button>
                                                        </div>
                                                </div>
                                            </form>', $row['id'], $row['id'], $row['img'], $row['id'], $row['title'], $row['name_author'], $row['surname'] ,$row['price'],$row['price']);
                                            $total = $total + (int)$row['price'];
                                            
                                            } 
                                            
                                    }                   
                               } 
                               $price_al = $total;         
                               ?>
                                
                            </div>
                        </div>
                        <div class="basket-bottom ">
                            <div class="basket-bottom__content">
                                <div class="basket-total">
                                    <div class="basket-total_left">
                                        <div class="basket-total_title">
                                          
                                            <span class="js_item-count">  В корзине 
                                                <?php 
                                                    if(isset($_SESSION['cart'])){
                                                        $count = count($_SESSION['cart']);
                                                        if($count == 1){
                                                            echo "$count товар";
                                                        }
                                                        elseif($count > 4 || $count == 0){
                                                            echo "$count товаров";
                                                        }
                                                        else{
                                                            echo "$count товара";
                                                        }
                                                        
                                                    }
                                                ?> 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="basket-total_right">
                                        <div>Итого без доставки</div>
                                        <div class="sum_space">
                                            <span class="js__total_sum">
                                                <?php 
                                                    echo "$total ₽";
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php if($_COOKIE['user'] == ''):?>
                                    <button id="myBtn" class="basket-btn js_basket-btn">
        
                                        Оформить заказ
                                    </button>
                                <?php else:?>
                                    <button name="write" class="basket-btn js_basket-btn">
        
                                        Оформить заказ
                                    </button>
                                <?php endif;?>
                            </div>  
                        </div>
                    </div>
                </div>            
                <div class="cart_recomend">
                    <div class="headPage">
                        <div class="title--wrapper">
                            <h1 class="main__title--basket">
                                Возможно вам может быть интересно
                            </h1>
                        </div>
                    </div>
                    <div class="card-tab">
                        <div class="section_pageblock">
                            <?php foreach($posts as $post): ?>
                                <div class="grid__items" data-bb-id="<?=$post['id']?>">
                                    <div class="img-product_block">
                                        <a class="product-card__img js-analytic-productlink" href="infobooks.php?post_id=<<?=$post['id']?>">
                                            <img alt="<?=$post['title']?>" title="<<?=$post['title']?>" class=" ls-is-cached lazyloaded" src="img/<?=$post['img']?>_preview.jpg">
                                        </a>
                                    </div>
                                    <div class="product-card">
                                        <a class="product-card__link js-watch-productlink" href="infobooks.php?post_id=<?=$post['id']?>"  title="<?=$post['title']?>">
                                            <div class="product-card__title js-analytic-product-title">
                                                <?=$post['title']?>
                                            </div>
                                            <div class="product-card__author js-analytic-product-author">
                                            <?=$post['name_author']?> <?=$post['surname']?>
                                            </div>
                                        </a>
                                        <div class="product-card__footer">
                                            <div class="product-card__price">
                                                <span class="product-price__value"><?=$post['price']?> ₽</span>
                                            </div>
                                
                                            
                                                <button type="button" class="button js__product_card_button product-card__button button_product" data-book-id="<?=$post['id']?>" >
                                                    <span class="js__card_button_text" name="keep">Добавить</span>
                                                </button>      
                                        </div>
                                    </div>
                                </div>       
                            <?php endforeach;?>                 
                        </div>
                    </div>
                </div>  
            </div>
        </main>
        <?php include "footer.php"; ?>
        <div id="cd-login" > 
            <div id="window">
                <div class="form">
                    <div class="header__popup">
                        <div class="popup_title">Войти</div>
                        <span class="close">&times;</span>
                    </div>
                    <div class="popup__body">
                        <form action="index.html" name="f2">
                            <div class="form-group">
                                <label class="form-group_label">Логин</label>
                                <input type="email" placeholder="" name="email2" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Пароль</label>
                                <input type="password" placeholder="" name="email2" class="input">
                            </div>

                            
                            <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="sub">Войти</button>
                        </form>
                        <div class="popup__btns">
                            <button class="line-btn js_btn" >Регистрация</button>
                            <button class="line-btn fl-right js__resetPass" >Забыли пароль?</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cd-signup" >
            <div id="window">
                <div class="form">
                    <div class="header__popup">
                        <div class="popup_title">Регистрация</div>
                        <span class="close">&times;</span>
                    </div>
                    <div class="popup__body">
                        <form action="index.html" name="f1">
                            <div class="form-group">
                                <label class="form-group_label">Электронная почта</label>
                                <input type="email" placeholder="email@email.com" name="email1" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Номер телефона</label>
                                <input type="number" placeholder="+79511292732" name="number1" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Имя</label>
                                <input type="text" placeholder="Имя" name="name1" class="input">
                            </div>
                            <div class="form-footer checkbox">
                                <label for="registration-popup"> Хочу быть в курсе скидок новинок и секретных акций"</label>
                            
                            </div>
                            <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="sub" >Зарегистрироваться</button>
                            
                        </form>
                        <div class="popup__text">
                            Регистрируясь, вы подтверждаете, что
                            <br>
                            вам 18 или больше лет и вы соглашаетесь 
                            <br>
                            <a class="link" href="/about/agreement/">правилами использования</a>
                            и
                            <a class="link" href="/about/policy/">политикой конфиденциальности</a>
                        </div>
                        <div class="popup__btns">
                            <button class="line-btn js__alreadyReg">Я уже зарегестрирован</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script >
        const minusBtn = document.querySelector('.js__item-counter__btn_minus');
        const plusBtn = document.querySelector('.js__item-counter__btn_plus');
        const valueBtn = document.querySelector('.js__item-counter__value');
        console.log(plusBtn);
        </script>
    <script>
        $('button[name="write"]').click(function () {
            location.href = "oformzakaza.php";
        });
    </script>
    <script>
    /*const cartProductsBar = document.querySelector('.js-simplebar');
    const cartProductsEmpty = document.querySelector('.js_cart-items__empty');
    function loadCart(){
                    if(localStorage.getItem('cart')){

                        cartProductsBar.classList.remove('hidden');
                        cartProductsEmpty.classList.add('hidden');
                        cart = JSON.parse(localStorage.getItem('cart'));
                            //cartProductsList.insertAdjacentHTML('afterbegin', generateCartProduct(title, img, priceNumber, id));
                        showMiniCart(title, img, priceNumber, id);

                    }
                    else{
                        cartProductsBar.classList.add('hidden');
                        cartProductsEmpty.classList.remove('hidden');
                    }

                    
                }
    $(document).ready(function(){
        loadCart();
    })*/
    </script>
    <script>
    $(document).ready(function(){
        $('.section_pageblock').slick({
            slidesToShow: 4,
        });
    });
   
    </script>
</body>
</html>