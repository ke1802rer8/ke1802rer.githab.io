<?php
    session_start();
    if(isset($_POST['oform_zakaza'])){
        require_once 'for_oformzakaza.php';
            

    

       
        //$productе_id = 3;
        
        //print_r($productе_id);
            //$mysqli->query("INSERT INTO `orders_books` (`order_id`, `book_id`, `amount`) VALUES ( '$order_id', '$idd', '$amount')");
        
        

        //header('Location: oformzakaza.php');
    }
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
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/oformzakaza.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="search_header2.css">
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
        <div class="pageWrapper">
            <div class="section">    
                  
                <div class="container__books">     
                    
                    <div class="headPage">
                        
                        <div class="headerCard">
                            <a href="pageblock.php" class="navigation__back_for_oform">Вернуться обратно в корзину</a>
                    
                        </div>
                        <div class="title--wrapper">
                            <h1 class="main__title">
                                Оформление заказа
                            </h1>
                            
                        </div>
                    </div>
                </div>
    
            </div>
            <form class="section--order" method="post">
                <div class="container section_inner">
                    <div class="grid--remove">
                        <div class="column-1">

                            <div class="order">
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Город
                                        </span>
                                    </div>
                                    <div class="formCategory--body">
                                        <div class="grid grid--formFields">
                                            <div class=" columnDesktop--12 columnMobile--12">
                                               <div class="vs__dropdown">
                                                   <p><input name="city" list="harakte" class="vs__search">
                                                    <datalist id="harakte">
                                                        <option value=""></option>
                                                        <option value="Челябинск"></option>
                                                        <option value="Москва"></option>
                                                        <option value="Калининград"></option>
                                                        <option value="Санкт-Петербург"></option>
                                                        <option value="Уфа"></option>
                                                        <option value="Нижний Уфалей"></option>
                                                        <option value="Курган"></option>
                                                        <option value="Ростов-на-Дону"></option>
                                                    </datalist></p>
                                               </div>
                                            </div>
                                            <h2 id="foo"></h2>
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Способы получения
                                        </span>
                                    </div>
                                    <div class="formCategory--body">

                                        <div class="selectorElement">
                                            
                                            <label class="selectElementLabel">
                                                <span class="selectElementLabel__border"></span>
                                                <span class="selectElementLabel__title">Служба доставки</span> 
                                                <span class="text--xs gray">от 219 ₽</span> 
                                                <input type="radio" name="delivery" class="selectElementLabel__radio" value="service"></input>

                                            </label>
                                            <label class="selectElementLabel">
                                                <span class="selectElementLabel__border"></span> 
                                                <span class="selectElementLabel__title">Курьерская доставка</span>
                                                <span class="text--xs gray">от 367 ₽</span> 
                                                <input type="radio" name="delivery" class="selectElementLabel__radio" value="courier"></input>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="column-2">
                            <div class="cartBox">
                                <div class="cartBox_inner">
                                    <div class="cartBox-title20">Ваш заказ</div>
                                    <ul class="cartBoxList">
                                        <li class="cartBox__item">
                                            <div class="cartBoxList_left">
                                                <div class=" text text--sm">Стоимость товаров</div>
                                            </div>
                                            <div class=" text text--sm">
                                                <span  class="price_ruble">
                                                    <?php 
                                                        echo "$total ";
                                                    ?>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="cartBox__item">
                                            <div class="cartBoxList_left">
                                                <div class="text text--sm"> Доставка </div>
                                            </div> 
                                            <div class="text text--sm">
                                                <span class="price_ruble"> 0 </span>
                                            </div>
                                        </li>
                                        <li class="cartBox__item paddingCart">
                                            <div class="cartBoxList_left">
                                                <div class="text text--sm"> Итого к оплате </div>
                                            </div> 
                                            <div class="cartBoxList__right">
                                                <span name="price" class="price price--sm price_ruble">
                                                    <?=$price_al
                                                    ?>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container section_inner">
                    <div class="grid--remove">
                        <div class="grid__dan column-1">
                            <div class="order">
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Данные получателя
                                        </span>
                                    </div>
                                    <div >
                                        <div  class="formCategory__subtitle text text--sm gray"> 
                                            Пожалуйста, указывайте реальные данные — у вас могут попросить паспорт, прежде чем вручить оплаченный заказ. 
                                        </div>
                                        <div  class="formCategory--body">
                                            <div  class="grid grid--formFields">
                                                <div  class="formFields-item column-3 colum-4">
                                                    <div class="form_field">
                                                        <div  class="label">Улица</div>
                                                        <div  class="form_input">
                                                            <input name="street" type="text" placeholder="60 лет Октября" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="formFields-item column-3 colum-4">
                                                    <div class="form_field">
                                                        <div  class="label">Дом</div>
                                                        <div  class="form_input">
                                                            <input name="bulding" type="text" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="formFields-item column-3 colum-4">
                                                    <div class="form_field">
                                                        <div  class="label">Квартира</div>
                                                        <div  class="form_input">
                                                            <input name="flat" type="text" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="formFields-item column-3 colum-4">
                                                    <div class="form_field">
                                                        <div  class="label">Контактный номер</div>
                                                        <div  class="form_input">
                                                            <input name="phone_number" placeholder="+7 (___) ___-__-__" class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="formFields-item column-3 colum-4">
                                                    <div class="form_field">
                                                        <div  class="label">Электронная почта</div>
                                                        <div  class="form_input">
                                                            <input name="postal_code" type="text" placeholder="example@gmail.com" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Способ оплаты
                                        </span>
                                    </div>
                                    <div class="formCategory--body">

                                        <div  class="selectElementLabel-wrap selectElementLabel-wrap_payment">
                                            <label  class="selectElementLabel selectElementLabel_payment js_payment-loader-online">
                                                <span  class="selectElementLabel__border"></span> 
                                                <span  class="selectElementLabel__title">Онлайн картой</span> 
                                                <span  class="text--xs gray">VISA, MasterCard, Maestro, МИР</span>
                                                <input type="radio" name="payment-method" class="selectElementLabel__radio" value="1"></input>
                                            </label>
                                            <label  class="selectElementLabel selectElementLabel_payment js_payment-loader-cash">
                                                <span  class="selectElementLabel__border"></span> 
                                                <span  class="selectElementLabel__title">Оплата при получении</span> 
                                                <span  class="text--xs gray">Оплата в пункте выдачи или курьеру</span> 
                                                <input type="radio" name="payment-method" class="selectElementLabel__radio" value="2"></input>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div  class="formCategory" >
                                    <div  class="formCategory--title">
                                        <span  class="title-2 title--26">
                                            Примечание
                                        </span>
                                    </div>
                                    <div  class="formCategory__body">
                                        <div  class="form__field">
                                            <textarea  name="message" placeholder="Дополнительная информация или пожелания к вашему заказу" class="input_review input_textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__bottom">
                                    <div class="form__button textLeft">
                                        <button name="oform_zakaza" type="submit" class="btn btn--primary btn--height60">
                                            <span >Подтвердить заказ</span>
                                        </button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
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