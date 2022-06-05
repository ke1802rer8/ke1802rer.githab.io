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
       