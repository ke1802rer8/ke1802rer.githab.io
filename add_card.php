<?php
   function cartElement($id, $name, $price, $author){
       $element='

            <form class="basket-item js_basket-item js_product">
            <div class="basket__wrapper">
                <a href= "/" target="" class="basket-item__block basket-item__image">
                    <img src="https://img-gorod.ru/28/395/2839595_preview.jpg">
                </a>
                <div class="basket-item_block basket-item_info">
                    <div class="basket-item__main">
                        <div class="basket-item__name js-analytic-product-title">
                                    <a href="" target="_blank" class="basket-item__link">Духовный путь</a>
                                </div>
                        <div class="basket-item__author">Робертс Г.</div>
                        </div>
                </div>
                <div class="basket-item__block basket-item__numbers">

                    <div class="basket-item__counter">
                        <div class="item-counter" data-book-id="2839595">
                            <div class="item-counter__btn js__item-counter__btn_minus" data-product="2840408" data-productprice="389" data-oldproductprice="">
                            –
                            </div>
                            <input class="item-counter__value js__item-counter__value" data-chg-count="" data-book-id="2839595" type="text" data-max-count="300" value="1">
                            <div class="item-counter__btn js__item-counter__btn_plus" data-product="2840408" data-productprice="389" data-oldproductprice="">
                            +
                            </div>
                        </div>
                    </div>
                    <div class="basket-item__price" data-currency="₽">
                
                        <div class="basket-item__price-total js__price">
                
                            <span class="basket-item__price-total_discount js__total-price">389&nbsp;₽</span>
                        </div>
                        <div class="basket-item__price-composition">
                            <span class="js__item-price">$price</span>&nbsp;₽ х
                            <span class="js__product_count">1</span> шт.
                        
                        </div>
            
            
                
                    </div>
                </div>
                <div class="basket-item__block basket-item__controls" >

                    <div class="basket-item__control basket-item__control_delete js__delete-item-button" >
                    
                        Удалить
                    </div>
                </div>
            </div>
        </form>
        ';
        echo $element;
       
       
   }

  
?>
     

	
