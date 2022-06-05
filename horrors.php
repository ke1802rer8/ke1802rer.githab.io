<?php
require_once 'php/books.php';
if($_GET['sort_id']){
    $id = strip_tags($_GET['sort_id']);
    $posts = get_horrors($id);
    
    foreach ($posts as $post){
        printf('<div class="grid__items">
        <div class="img-product_block">
            <a class="product-card__img js-analytic-productlink" href="" >
                <img alt="%s" title="%s" class=" ls-is-cached lazyloaded" src="img/%s_preview.jpg">
            </a>
        </div>
        <div class="product-card">
            <a class="product-card__link js-watch-productlink" href="infobooks.php?post_id=%s"  title="%s">
                <div class="product-card__title js-analytic-product-title">
                    %s
                </div>
                <div class="product-card__author">
                    Михаил
                </div>
            </a>
            <div class="product-card__footer">
                <div class="product-card__price">
                    <span class="product-price__value">%s ₽</span>
                </div>
    
                <button type="button" class="button js__product_card_button product-card__button button_product" data-status="in-basket" data-book-id="2839595" data-element="2840408" data-productprice="389" data-oldproductprice="" data-chg-add-to-cart="2839595">
                    <span class="js__card_button_text">В корзине</span>
                </button>
            </div>
        </div>
    </div>',$post['title'],$post['title'],$post['img'],$post['id'],$post['title'],$post['title'],$post['price']);
    }
    exit();
}
else{
    $posts = get_horrors();
    
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
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/zakaz.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/oformzakaza.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!--если проблема то замени на css/style.css-->
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/header.css">
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
        <div class="section">    
                  
            <div class="container__books">     
                
                <div class="headPage">
                    
                    <div class="headerCard">
                        <a href="index.php" class="navigation__back">Главная</a>
                        <a href="categories.php" class="navigation__back">Книги</a>
                        <span class="navigation__title" itemprop="name">Ужасы и мистика</a>
                    </div>
                    <div class="title--wrapper">
                        <h1 class="main__title">
                            Ужасы и мистика
                        </h1>
                        <div class="headPage__rightButton hiddenDesktop">
                            <button id="myBtnCatalog" class="btn btn--secondaryIcon" >
                                <span>Каталог</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="section--menu">
            <div class="container__books">
                <div class="section--border">
                    <div class="container__leftside">
                        <ul class="navigation">
                        <li class="navigation__item"><a href="literature.php" class="navigation__link">Литература</a></li>
                            <li class="navigation__item"><a href="horrors.php" class="navigation__link">Ужасы и мистика</a></li>
                            <li class="navigation__item"><a href="fantastic.php" class="navigation__link">Фантастика. Фэнтези</a></li>
                            <li class="navigation__item"><a href="romans.php" class="navigation__link">Романтика</a></li>
                            <li class="navigation__item"><a href="thriller.php" class="navigation__link">Боевики</a></li>
                            <li class="navigation__item"><a href="detective.php" class="navigation__link">Детективы</a></li>
                            <li class="navigation__item"><a href="adventure.php" class="navigation__link">Приключения</a></li>
                            <li class="navigation__item"><a href="skill.php" class="navigation__link">Знания и навыки</a></li>
                            <li class="navigation__item"><a href="children.php" class="navigation__link">Книги для детей</a></li>
                            <li class="navigation__item"><a href="history.php" class="navigation__link">История</a></li>
                            <li class="navigation__item"><a href="psychology.php" class="navigation__link">Психология</a></li>
                            <li class="navigation__item"><a href="education.php" class="navigation__link">Образование</a></li>
                        </ul>
                    </div>
                    <div class="section--content">
                        <div class="filters">   
                            <button id="" type="button" class="selectbox">
                                <span class="b24-select-control__button ">Сначала новые</span> 
                                <span class="b24-select-control__button hidden">По возрастанию цены</span> 
                                <span class="b24-select-control__button hidden">Сначала новые</span> 
                                <span class="b24-select-control__slot _before">

                            </button>
                            <ul class="b24--select--catalog ">
                                <li class="b24--select--catalog_item">
                                    <button type="button" class="button__item">
                                        <!---->
                                        <span class="b24-element-item__text">
                                            Сначала новые
                                        </span>
                                        <!---->
                                    </button>
                                </li>
                                <li class="b24--select--catalog_item">
                                    <button type="button" class="button__item">
                                        <!---->
                                        <span id="pricea" class="b24-element-item__text">
                                            По возрастанию цены
                                        </span>
                                        <!---->
                                    </button>
                                </li>
                                <li class="b24--select--catalog_item">
                                    <button type="button" class="button__item">
                                        <!---->
                                        <span id="priced" class="b24-element-item__text">
                                            По убыванию цены
                                        </span>
                                        <!---->
                                    </button>
                                </li>

                            </ul>     
                        </div>
                        <div class="section--catalog">
                            
                            <?php foreach($posts as $post): ?>
                            <div class="grid__items">
                                <div class="img-product_block">
                                    <a class="product-card__img js-analytic-productlink" href="infobooks.php?post_id=<?=$post['id']?>" >
                                        <img alt="Доктор Гарин" title="Доктор Гарин" class=" ls-is-cached lazyloaded" data-src="https://img-gorod.ru/28/424/2842415_preview.jpg" src="https://img-gorod.ru/28/424/2842415_preview.jpg">
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a class="product-card__link js-watch-productlink" href="infobooks.php?post_id=<?=$post['id']?>"  title="<?=$post['title']?>">
                                        <div class="product-card__title js-analytic-product-title">
                                            <?=$post['title']?>
                                        </div>
                                        <div class="product-card__author">
                                        <?=$post['name_genre']?>
                                        </div>
                                    </a>
                                    <div class="product-card__footer">
                                        <div class="product-card__price">
                                            <span class="product-price__value"><?=$post['price']?> ₽</span>
                                        </div>
                            
                                        <button type="button" class="button js__product_card_button product-card__button button_product" data-status="in-basket" data-book-id="2839595" data-element="2840408" data-productprice="389" data-oldproductprice="" data-chg-add-to-cart="2839595">
                                            <span class="js__card_button_text">В корзине</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                            
                            
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/popups.js"></script>
    <script src="js/filtersClick.js"></script>
    <script src="js/code.js"></script>
    <script>
        $(document).ready(function(){
            $(".b24--select--catalog span").click(function(){

                var id = $(this).attr('id');
                $.ajax({
                    url:'horrors.php',
                    data: 'sort_id=' +id, 
                    type: 'get',
                    success: function(html){

                        $(".section--catalog").html(html).hide().fadeIn(2000);
                        
                    }

                });
            });
        });
    </script>
 

</body>
</html>