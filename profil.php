<?php
session_start();
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
    <link rel="stylesheet" href="css/zakaz.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/oformzakaza.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/modal.css">
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
                                    <a class="account-menu__link" href="zakaz.php">
                                        <i class="chg-icon chg-icon-zakaz account-menu__ico"></i>
                                        <span class="account-menu__text-link ">Мои заказы</span>
                                    </a>
                                </li>
                                <li class="account-menu__list-item ">
                                    <a class="account-menu__link account-menu_active" href="profil.php">
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
                        <i class="chg-icon chg-icon-users"></i>
                        <span class="heading__text">Мой профиль</span>
                    </h1>
                    <div class="short-personal__fio">Рошка Екатерина Руслановна</div>
                    <div class="container-for__user">
                        <div class="short-personal__contact">
                            <div class="short__label">Эл. почта</div>
                            <div class="short__content">katya.roshka00@mail.ru</div>
                        </div>
                        <div class="short-personal__contact">
                            <div class="short__label">Телефон</div>
                            <div class="short__content">+798511292732</div>
                        </div>
                    </div>
                    <div class="user_short">Личные данные</div>
                    <form method="post" name="form1" action="" id="userInfo" class="user-info" enctype="multipart/form-data" data-free="" novalidate="novalidate">

                        <div class="input-wrap">
                            <label for="surname" class="input__label">Фамилия</label>
                            <div class="input__validation-icon">
                                <input type="text" id="surname" name="surname" maxlength="50" value="Рошка" class="input_user">
                            </div>
                        </div>
                        <div class="input-wrap">
                            <label for="name" class="input__label">Имя</label>
                            <div class="input__validation-icon">
                                <input type="text" id="name" name="name" value="Екатерина" class="input_user">
                            </div>
                        </div>
                        <div class="input-wrap">
                            <label for="second_name" class="input__label">Отчество</label>
                            <div class="input__validation-icon">
                                <input type="text" id="second_name" name="second_name" value="Руслановна" class="input_user">
                            </div>
                        </div>
                        <div class="input-wrap">
                            <label for="email" class="input__label">Эл. почта</label>
                            <div class="input__validation-icon">
                                <input type="text" id="email" name="email" maxlength="255" value="katya.roshka00@mail.ru" class="input_user">
                            </div>
                        </div>
        
                        <div class="input-wrap" id="phoneValidation">
                            <label for="phone" class="input__label">Телефон</label>
                            <div class="input__validation-icon">
                                <input type="text" id="phone" class="input_user input-phone" name="phone" value="+79511292732" data-phone="" inputmode="text">
                            </div>
                        </div>
        
                        
                        
        
                        <button type="submit" value="Подтвердить" class="btn_normal user-info__btn">
                            Сохранить изменения
                        </button>
                    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/filtersClick.js"></script>
    <script>
        
    </script>
 

</body>
</html>