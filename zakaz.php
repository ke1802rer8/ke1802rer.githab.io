<?php
session_start();

require_once 'php/books_two.php';
$post_zakaz = zakaz_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    <link rel="stylesheet" href="css/booksstyle.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="zakaz.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/oformzakaza.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="search_header.css">
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
        <main class="main_users">
            <div class="container_user">
                <div class="container-user_leftside">
                    <div class="container-user_leftside">
                        <div class="account-menu">
                            <ul class="account-menu__list">
                                <li class="account-menu__list-item ">
                                    <a class="account-menu__link account-menu_active" href="zakaz.php">
                                        <i class="chg-icon chg-icon-zakaz account-menu__ico"></i>
                                        <span class="account-menu__text-link ">Мои заказы</span>
                                    </a>
                                </li>
                                <li class="account-menu__list-item">
                                    <a class="account-menu__link" href="profil.php">
                                        <i class="chg-icon chg-icon-person account-menu__ico"></i>
                                        <span class="account-menu__text-link ">Личные данные</span>
                                    </a>
                                </li>
                                <li class="account-menu__list-item">
                                    <a class="account-menu__link" href="exit.php">
                                        <i class="chg-icon chg-icon-exit account-menu__ico"></i>
                                        <span class="account-menu__text-link ">Выйти</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content content_full-w">
                    <h1 class="flex flex-align-center">
                        <i class="chg-icon chg-icon-cart"></i>
                        <span class="heading__text">Мои заказы</span>
                    </h1>
                    <table class="info-orders">
                        <tbody>
                            <tr>
                                <th>Заказ №</th>
                                <th>Статус</th>
                                <th>К оплате</th>
                                <th>Способ оплаты</th>
                               
                            </tr>
                            <?php foreach($post_zakaz as $zakaz):?>
                                <tr data-href="">
                                <td>
                                    <a href="" class="info-orders__order"><?=$zakaz['order_number']?></a>
                                    <div class="info-orders__items">Товаров: 2</div>
                                </td>
                                <td><a href="/profile/orders/29940932/" class="info-orders__status "><?=$zakaz['status']?></a></td>
                                <td>932 ₽</td>
                                <td>
                                    <div class="info-orders__pay-type"><?=$zakaz['payment_method_id']?></div>
                                </td>
                                </tr>
                                
                            <?php endforeach;?>
                        </tbody>
                    </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/filtersClick.js"></script>
    <script>
        
    </script>
 

</body>
</html>