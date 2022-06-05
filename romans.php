<?php
require_once 'php/books.php';
if($_GET['sort_id']){
    $id = strip_tags($_GET['sort_id']);
    $posts = get_romans($id);
    
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
    $posts = get_romans();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="booksstyle.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/zakaz.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="simplebar.css">
    <link rel="stylesheet" href="css/cartstyletwo.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="modal.css">
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
                        <span class="navigation__title" itemprop="name">Романтика</a>
                    </div>
                    <div class="title--wrapper">
                        <h1 class="main__title">
                            Романтика
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
                                <div class="grid__items" data-bb-id="<?=$post['id']?>">
                                <div class="img-product_block">
                                    <a class="product-card__img js-analytic-productlink" href="infobooks.php?post_id=<?=$post['id']?>" >
                                        <img alt="<?=$post['title']?>" title="<?=$post['title']?>" class=" ls-is-cached lazyloaded" src="img/<?=$post['img']?>_preview.jpg">
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
                    url:'romans.php',
                    data: 'sort_id=' +id, 
                    type: 'get',
                    success: function(html){

                        $(".section--catalog").html(html).hide().fadeIn(2000);
                        
                    }

                });
            });
        });
    </script>
    <script>
    class GraphModal {
	constructor(options) {
		let defaultOptions = {
			isOpen: () => {},
			isClose: () => {},
		}
		this.options = Object.assign(defaultOptions, options);
		this.modal = document.querySelector('.modal');
		this.speed = 300;
		this.animation = false;
		this.reOpen = false;
		this.nextWindow = false;
		this.isOpen = false;
		this.modalContainer = false;
		this.isOpened = false;
		this.previousActiveElement = false;
		this._focusElements = [
			'a[href]',
			'area[href]',
			'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',
			'select:not([disabled]):not([aria-hidden])',
			'textarea:not([disabled]):not([aria-hidden])',
			'button:not([disabled]):not([aria-hidden])',
			'iframe',
			'object',
			'embed',
			'[contenteditable]',
			'[tabindex]:not([tabindex^="-"])'
		];
		this.fixBlocks = document.querySelectorAll('.fix-block');
		this.events();
	}

	events() {
		
			document.addEventListener('click', function(e){
				const clickedElement = e.target.closest('[data-graph-path]');
				if (clickedElement) {
					let target = clickedElement.dataset.graphPath;
					let animation = clickedElement.dataset.graphAnimation;
					let speed = clickedElement.dataset.graphSpeed;
					this.animation = animation ? animation : 'fade';
					this.speed = speed ? parseInt(speed) : 300;
					this.nextWindow = document.querySelector(`[data-graph-target="${target}"]`);
					this.open();
					return;
				}

				if (e.target.closest('.modal__close')) {
					this.close();
					return;
				}
			}.bind(this));

			window.addEventListener('keydown', function(e) {
				if (e.keyCode == 27) {
					if (this.modalContainer.classList.contains('modal-open')) {
						this.close();
					}
				}

				if (e.which == 9 && this.isOpened) {
					this.focusCatch(e);
					return;
				}

			}.bind(this));

			this.modal.addEventListener('click', function(e) {
				if (!e.target.classList.contains('modal__container') && !e.target.closest('.modal__container') && this.isOpen) {
					this.close();
				}
			}.bind(this));
		
	}

	open(selector) {
		this.previousActiveElement = document.activeElement;

		if(this.isOpened){
			this.reOpen = true;
			this.close();
			return;
		}
		this.modalContainer = this.nextWindow;

		if(selector){
			this.modalContainer = document.querySelector(`[data-graph-target="${selector}"]`);
		}
		this.modal.style.setProperty('--transition-time', `${this.speed / 1000}s`);
		this.modal.classList.add('is-open');
		this.disableScroll();
		
		this.modalContainer.classList.add('modal-open');
		this.modalContainer.classList.add(this.animation);

		setTimeout(() => {
			this.options.isOpen(this);
			this.modalContainer.classList.add('animate-open');
			this.isOpened = true;
			this.focusTrap();
		}, this.speed);
	}

	close() {
		if (this.modalContainer) {
			this.modalContainer.classList.remove('animate-open');
			this.modalContainer.classList.remove(this.animation);
			this.modal.classList.remove('is-open');
			this.modalContainer.classList.remove('modal-open');

			this.enableScroll();
			this.options.isClose(this);
			this.isOpen = false;
			this.focusTrap();

			if(this.reOpen){
				this.reOpen = false;
				this.open();
			}
		}
	}

	focusCatch(e) {
		const nodes = this.modalContainer.querySelectorAll(this._focusElements);
		const nodesArray = Array.prototype.slice.call(nodes);
		const focusedItemIndex = focusArray.indexOf(document.activeElement);

		if (e.shiftKey && focusedItemIndex === 0) {
			nodesArray[nodesArray.length - 1].focus();
			e.preventDefault();
		}

		if (!e.shiftKey && focusedItemIndex === nodesArray.length - 1) {
			nodesArray[0].focus();
			e.preventDefault();
		}
	}

	focusTrap() {
		const focusable = this.modalContainer.querySelectorAll(this.focusElements);
		if (this.isOpen) {
			focusable[0].focus();
		} else {
			this.previousActiveElement.focus();
		}
	}

	disableScroll() {
		let pagePosition = window.scrollY;
		this.lockPadding();
		document.body.classList.add('disable-scroll');
		document.body.dataset.position = pagePosition;
		document.body.style.top = -pagePosition + 'px';
	}

	enableScroll() {
		let pagePosition = parseInt(document.body.dataset.position, 10);
		this.unlockPadding();
		document.body.style.top = 'auto';
		document.body.classList.remove('disable-scroll');
		window.scroll({ top: pagePosition, left: 0 });
		document.body.removeAttribute('data-position');
	}

	lockPadding() {
		let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
		this.fixBlocks.forEach((el) => {
			el.style.paddingRight = paddingOffset;
		});
		document.body.style.paddingRight = paddingOffset;
	}

	unlockPadding() {
		this.fixBlocks.forEach((el) => {
			el.style.paddingRight = '0px';
		});
		document.body.style.paddingRight = '0px';
	}
}

    


    </script>
    <script>
    $(document).ready(function(){
    $(".b24--select--catalog span").click(function(){

        var id = $(this).attr('id');
        $.ajax({
            url:'categories.php',
            data: 'sort_id=' +id, 
            type: 'get',
            success: function(html){

                $(".section--catalog").html(html).hide().fadeIn(2000);
                
            }

        });
    });
});</script>
    <script>
        //Добавление товара в корзину
        //наш продукт
        const productsBtn = document.querySelectorAll('.js__product_card_button');
        const  cartt = document.querySelector('.header__cart');
        //итоговая цена
        const cartProductsList = document.querySelector('.cart-content__list');
        const fullPrice = document.querySelector('.fullprice');
        const orderModalOpenProd = document.querySelector('.order-modal__btn');
        const orderModalList= document.querySelector('.order-modal__list');
        const cartQuantity = document.querySelector('.cart__quantity');
        let price = 0;
        let productArray = [];

        
        //перевод прайса без пробелов и значков
        const priceWithoutSpaces = (str) => { 
            return str.replace(/\s/g, ' ');
        };
        //перевод прайса обратно в пробелы
        const normalPrice = (str) => {
            return String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1');
        };


        
        //суммирование цены корзины
        const plusFullPrice = (currentPrice) => {

            return price += currentPrice;
        };
        //вычитание цены корзины
        const minusFullPrice = (currentPrice) => {

            return price -= currentPrice;
        };

        //вывод
        const printFullPrice = () => {
            fullPrice.textContent = `${normalPrice(price)} ₽`;
        };

        const printQuantity = () =>{
            let length = cartProductsList.querySelector('.simplebar-content').children.length;
            cartQuantity.textContent = length;
            length > 0 ? cartt.classList.add('active') : cartt.classList.remove('active');
        };

        const generateCartProduct = (title, author, img, price, id) => {
            return `<li class="cart-content__item">
                                            <article class="cart-content__product cart-product" data-id="${id}">
                                                <img src="${img}" alt=""  class="cart-product__img">
                                                <div class="cart-product__text">
                                                    <h3 class="cart-product__title">${title}</h3>
                                                    <h3 class="cart-product__author">${author}</h3>
                                                    <span class="cart-product__price">${normalPrice(price)} ₽</span>
                                                </div>
                                                <button class="cart-product__delete" aria-label="Удалить товар">Удалить</button>
                                            </article>
                                        </li>`;
            
        }

        
        let title;
        let img, id, priceNumber, author;
        
        const deleteProducts = (productParent) => {
            let id = productParent.querySelector('.cart-product').dataset.id;
            document.querySelector(`.cart-content__item[data-id="${id}"]`).querySelector('.js__product_card_button').disabled = false;

            let currentPrice = parseInt(priceWithoutSpaces(parent.querySelector('.product-price__value').textContent));

            minusFullPrice(currentPrice);
        }
        productsBtn.forEach(el => {
            el.addEventListener('click', (e) =>{
                let self = e.currentTarget;
                let parent = self.closest('.grid__items');
                id = parent.getAttribute('data-bb-id');
                img = parent.querySelector('.product-card__img img').getAttribute('src');
                title = parent.querySelector('.js-analytic-product-title').textContent;
                author = parent.querySelector('.js-analytic-product-author').textContent;
                
                
                //let priceString = parent.querySelector('.product-price__value').textContent;
                priceNumber = parseInt(priceWithoutSpaces(parent.querySelector('.product-price__value').textContent));



                console.log(img);
                
                plusFullPrice(priceNumber);
                console.log(price);
                printFullPrice();

                cartProductsList.querySelector('.simplebar-content').insertAdjacentHTML('afterbegin', generateCartProduct(title, author, img, priceNumber, id));
                
                printQuantity();
                self.disabled = true;
                
            });
            
            
        });
        cartProductsList.addEventListener('click', (e) => {
                if(e.target.classList.contains('cart-product__delete')){
                    deleteProducts(e.target.closest('.cart-content__item'));
                }
                
        });

        let flag = 0;

        orderModalOpenProd.addEventListener('click', (e) =>{
            if(flag == 0){
                
                orderModalList.style.display = 'block';
                flag = 1;
            }
            else{
              
                orderModalList.style.display = 'none';
                flag = 0;
            }
        });

        const generateModalProduct = (title, author, img, price, id) => {
            return `<li class="order-modal__item" >
                                    <arcticle class="order-product__product order-product" data-id="${id}">
                                        <img src="${img}" alt="" class="order-product__img">
                                        <div class="order-product__text">
                                            <h3 class="order-product__title">${title}</h3>
                                            <h3 class="order-product__author">${author}</h3>
                                            <span class="order-product__price">${normalPrice(price)} ₽</span>
                                        </div>
                                        <buttin class="order-product__delete">Удалить</buttin>
                                    </arcticle>
                                </li>`;
            
        }
        const modal = new GraphModal({
            isOpen:(modal)=>{
                console.log('opened');
                let array = cartProductsList.querySelector('.simplebar-content').children;
                let fullprice = fullPrice.textContent;
                let length = array.length;

                document.querySelector('.order-modal__quantity span').textContent = `${length} шт`;
                document.querySelector('.order-modal__summ span').textContent = `${fullprice}`;
                for(item of array){
                    console.log(item);
                    let img = item.querySelector('.cart-product__img').getAttribute('src');
                    let title = item.querySelector('.cart-product__title').textContent;
                    let author = item.querySelector('.cart-product__author').textContent;
                    let priceString = priceWithoutSpaces(item.querySelector('.cart-product__price').textContent);
                    let id = item.querySelector('.cart-product').dataset.id;

                    
                    orderModalList.insertAdjacentHTML('afterbegin', generateModalProduct(title, author, img, priceString, id));

                    let obj = {};
                    obj.title = title;
                    obj.price = priceString;
                    productArray.push(obj);
                }
                console.log(productArray);
            },
            isClose: () =>{
                console.log('close');
            }
        });

        document.querySelector('.order').addEventListener('submit', (e) =>{
            e.preventDefault();
            let self = e.currentTarget;
            let formData = new FormData(self);
            let name = self.querySelector('[name="Имя"]').value;
            let tel = self.querySelector('[name="Телефон"]').value;
            let mail = self.querySelector('[name="Email"]').value;
            let city = self.querySelector('[name="Город"]').value;
            formData.append('Товары', JSON.stringify(productArray));
            formData.append('Имя', name);
            formData.append('Телефон', tel);
            formData.append('Email', mail);
            //formData.append('Город', city);

            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(xhr.readyState === 4){
                    if(xhr.state === 200){
                        console.log('Отправлено');
                    }

                }
            }

            xhr.open('POST', 'mail.php', true);
            xhr.send(formData);

            //self.reset();
        });
       
        
    </script>
     <script src="js/simplebar.js"></script>
 

</body>
</html>