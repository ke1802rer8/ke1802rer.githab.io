<?php
$r++;
if(isset($_POST['search-form__btn'])){
    
    header('Location: categories.php');
}

//echo $_SESSION['SEARCH'];
?>
<header >
            
    <div class="header_container">
        <div class="header_contant">
            <?php 
            if($_COOKIE['user'] == ''):
                

            ?>
        
                    <div class="container_two">
                        <div class=" header__column header_logo">
                            <a class="header__BB" href="index.php">
                                <img src="img/logo.svg" alt="" width="250" height="80">
                            </a>
                        </div>
                        <div class="header__column header__search">
                            <div class="search__area">
                                <form action="search.php" method="post" class="header__form--search">

                                    <button name="search_id" class="btn btn--search" type="submit">
                                        <svg viewBox="0 0 24 24"  width="24" height="24" ><path fill-rule="evenodd" clip-rule="evenodd" d="M18.753 10.877a7.84 7.84 0 01-1.568 4.717l3.522 3.521a1 1 0 010 1.414l-.178.177a1 1 0 01-1.414 0l-3.52-3.52a7.877 7.877 0 113.16-6.308zm-7.822 5.87a5.816 5.816 0 100-11.632 5.816 5.816 0 000 11.632z"></path></svg>
                                    </button>
                                    <input type="text" class="search__input" placeholder="Поиск..." name="search">
                                    <div class="search__result">
                                    <div class="search__result--row">
                                        <div class="search__result--title">Подходящие товары</div>
                                        <div class="search__result--list">
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Лисья нора</div>
                                                    <div class="search-item__subtitle">Сара Майкл</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo"> 
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Неночь</div>
                                                    <div class="search-item__subtitle">Джордж Борд</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Королевский Убица</div>
                                                    <div class="search-item__subtitle">Робин Хобб</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Лисья нора</div>
                                                    <div class="search-item__subtitle">Сара Майкл</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search__result--link">
                                            <a href="/" class="search__result--all">все результаты поиска</a>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="header__column header__controls">
                            <ul class="headerControls">
                                <li class="headerControls__item">
                                    <div class="btn__container ">
                                        <a id="myBtn" href="#" class="btn btn--user btn--main">
                                            <span class="btn-auth__text text--xs">Войти</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="headerControls__item headerControls__color">
                                    <a href="pageblock.php" class="btn btn--main">
                                        <span class="btn--svg">
                                        
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </span>
                                        <?php 
                                        if(isset($_SESSION['cart'])){
                                            $count = count($_SESSION['cart']);
                                            echo "<span id=\"cart__count\" class=\"btn--title js--price\">$count</span>";
                                        }
                                        else{
                                            echo "<span id=\"cart__count\" class=\"btn--title js--price\">0</span>";
                                        }?>
                                        
                                           
                                      
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
       
        
        
            <?php else: ?>
            <!--Нужно проработать с пользователем <div class="header_contant">
            <div class="container_two">
                <div class="header_logo">
                    <a href="index.php">
                        <img src="img/logo.svg" alt="" width="250" height="80">
                    </a>
                </div>
                <div class="header__column">
                    <ul class="header-menu_user">
                        
                        <a href="profil.php">
                            <li class="header-menu__item">
                                <div class="btn-icon-user"></div>
                                <button class="click-user">
                                    <?=$_COOKIE['user']?>
                                </button>
                            </li>
                        </a>
                        
                        
                    </ul>
                    
                </div>
                <form action="" class="search-new">
                    <input type="text" value="" placeholder="Поиск книг, авторов" class="search-form__input " name="" autocomplete="">
                    <button class="search-form__btn">
                        <i class="chg-icon chg-icon-search"></i>
                    </button>
                </form>
                
                
            </div>-->
            <div class="container_two">
                        <div class=" header__column header_logo">
                            <a class="header__BB" href="index.php">
                                <img src="img/logo.svg" alt="" width="250" height="80">
                            </a>
                        </div>
                        <div class="header__column header__search">
                            <div class="search__area">
                                <form action="search.php" method="post" class="header__form--search">
                                    <button name="search_id" class="btn btn--search" type="submit">
                                        <svg viewBox="0 0 24 24"  width="24" height="24" ><path fill-rule="evenodd" clip-rule="evenodd" d="M18.753 10.877a7.84 7.84 0 01-1.568 4.717l3.522 3.521a1 1 0 010 1.414l-.178.177a1 1 0 01-1.414 0l-3.52-3.52a7.877 7.877 0 113.16-6.308zm-7.822 5.87a5.816 5.816 0 100-11.632 5.816 5.816 0 000 11.632z"></path></svg>
                                    </button>
                                    <input type="text" class="search__input" placeholder="Поиск..." name="search">
                                    <div class="search__result">
                                    <div class="search__result--row">
                                        <div class="search__result--title">Подходящие товары</div>
                                        <div class="search__result--list">
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Лисья нора</div>
                                                    <div class="search-item__subtitle">Сара Майкл</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo"> 
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Неночь</div>
                                                    <div class="search-item__subtitle">Джордж Борд</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Королевский Убица</div>
                                                    <div class="search-item__subtitle">Робин Хобб</div>
                                                </div>
                                            </div>
                                            <div class="search__list--item">
                                                <div class="search-item__photo">
                                                    <img src="img/Позже.jpg" alt="">
                                                </div>
                                                <div class="search-item__text">
                                                    <div class="search-item__title">Лисья нора</div>
                                                    <div class="search-item__subtitle">Сара Майкл</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search__result--link">
                                            <a href="/" class="search__result--all">все результаты поиска</a>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="header__column header__controls">
                            <ul class="headerControls">
                                <li class="headerControls__item">
                                    
                                    <div class="btn__container ">
                                        <a href="profil.php" class="btn btn--user btn--main">
                                            <span class="btn-auth__text text--xs"><?=$_COOKIE['user']?></span>
                                        </a>
                                    </div>
                                        
                                    
                                </li>
                                <li class="headerControls__item headerControls__color">
                                    <a href="pageblock.php" class="btn btn--main">
                                        
                                       
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                      
                                        <?php 
                                        if(isset($_SESSION['cart'])){
                                            $count = count($_SESSION['cart']);
                                            echo "<span id=\"cart__count\" class=\"btn--title js--price\">$count</span>";
                                        }
                                        else{
                                            echo "<span id=\"cart__count\" class=\"btn--title js--price\">0</span>";
                                        }?> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
           
        
            <?php endif;?>
    

            <div class="header_menu">
                <nav class="container">
                    <ul class="menu">
                    <li class="nav_item">
                        <a href="categories.php" class="activ"><b>Книги</b></a> 
                        <div class="catalog">
                            <ul class="categories">
                                <li class="cat_item"><a href="literature.php">Литература</a></li>
                                <li class="cat_item"><a href="horrors.php">Ужасы и мистика</a></li>
                                <li class="cat_item"><a href="fantastic.php">Фантастика. Фэнтези</a></li>
                                <li class="cat_item"><a href="romans.php">Романтика</a></li>
                                <li class="cat_item"><a href="thriller.php">Боевики</a></li>
                                <li class="cat_item"><a href="detective.php">Детективы</a></li>
                                <li class="cat_item"><a href="adventure.php">Приключения</a></li>
                                <li class="cat_item"><a href="skill.php">Знания и навыки</a></li>
                                <li class="cat_item"><a href="children.php">Книги для детей</a></li>
                                <li class="cat_item"><a href="history.php">История</a></li>
                                <li class="cat_item"><a href="psychology.php">Психология</a></li>
                                <li class="cat_item"><a href="education.php">Образование</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav_item"><a href="">Новинки</a> </li> 
                    <li class="nav_item"><a href="">Популярное</a> </li> 
                    <li class="nav_item"><a href="">Что почитать?</a> </li> 
                    <li class="nav_item"><a href="">Компания</a> </li> 
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div id="cd-login" > 
    <div id="window">
        <div class="form">
            <div class="header__popup">
                <div class="popup_title">Войти</div>
                <span class="close">&times;</span>
            </div>
            <div class="popup__body">
                <form action="user.php" method="post">
                    <div class="form-group">
                        <label class="form-group_label">Логин</label>
                        <input type="login" placeholder="" name="login" class="input">
                    </div>
                    <div class="form-group">
                        <label class="form-group_label">Пароль</label>
                        <input type="password" placeholder="" name="pass2" class="input">
                    </div>

                            
                    <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="sub_user">Войти</button>
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
                        <form class="formWithValidation" action="regis.php" method="post">
                            <div class="form-group">
                                <label class="form-group_label">Электронная почта</label>
                                <input type="email js_field" placeholder="email@email.com" name="email_user" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Логин</label>
                                <input type="login js_field" placeholder="Имя" name="name1" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Пароль</label>
                                <input type="password js_field" placeholder="hty89UyT" name="pass" class="input">
                            </div>
                            
                            <div class="form-footer checkbox">
                                <label for="registration-popup"> Хочу быть в курсе скидок новинок и секретных акций"</label>
                            
                            </div>
                            <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="do_signup" >Зарегистрироваться</button>
                            
                        </form>
                        
                        <div class="popup__btns">
                            <button class="line-btn js__alreadyReg">Я уже зарегестрирован</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

