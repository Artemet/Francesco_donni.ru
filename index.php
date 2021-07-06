<?php
    include("servises/bd.php");
    include("layout/app.php");
    include("component/modal_warning.php");
    include("component/message.php");
    include("component/in_message.php");
    include("component/modal.php");
    include("component/app_windows/product_window.php");
    include("layout/list_choice/veb_information.php");
    include("layout/list_choice/list_up.php");
?>
    <link rel="stylesheet" href="css/elements_style/elements.css">
    <div class="slider" id="header_slider" onmouseover="city_question()">
        <div class="slider_img" id="slider_img" onmouseover="stop_message_line()">
            <img src="res/slide1.png" class="slide" id="slide" onmouseover="change_img()">
            <i class="fas fa-chevron-left button_arrow" onclick="left_list()"></i>
            <i class="fas fa-chevron-right button_arrow" onclick="right_list()"></i>
        </div>
    </div>
    <div class="bottom_part">
        <div class="product">
            <h2>ХИТЫ ПРОДАЖ</h2>
            <?php
            $site = 3;
            include("component/product.php");
            ?>
        </div>
        <div class="container_artical" id="container_artical">
            <div class="shop" onmouseleave="close_question_block()" onmouseover="get_question_block()">
                <div class="shop_information">
                    <h2 id="title_shop">Интернет-магазин обуви и одежды</h2>
                    <p>Francesco Donni - обувной бренд с большой историей <br> в России, занимающий высокие позиции в
                        производстве и продаже обуви комфорт класса для женщин и мужчин,<br> разрабатываемой с учётом
                        климатических
                        особенностей, продлевающих срок её службы. Популярные категории:<br> сапоги, ботинки, туфли, летние
                        босоножки,
                        ботильоны, кроссовки, пляжная, домашняя, резиновая, а также<br> большой выбор повседневной
                        обуви.<br> <br>
                        Франческо Донни – это Интернет-магазин с широкой <br>розничной сетью по всей России.
                    </p>
                </div>
                <div class="shop_information">
                    <h2>Собственное производство</h2>
                    <p class="text">Коллекции создаются <br> специалистами, прибывающими в постоянном творческом поиске. Все
                        модели
                        отшиваются на современном оборудовании <br> обувных фабриках мира в Италии, Португалии, России,
                        Китае. Каждая
                        пара проходит высокий уровень контроля с <br> учётом европейских стандартов.<br> <br>
                        В производстве используются <br> разработки, учитывающие тенденции моды. Это практически полностью
                        ручная работа. Мастера вкладывают в каждый <br> элемент свое умение, навыки и частичку души. Эталон
                        комфорта –
                        обувь Франческо Донни, соединяющая в себе <br> традиции европейского дизайна, технологий а также
                        стандарты
                        российского покупателя.</p>
                </div>
                <div class="shop_information">
                    <h2>Преимущества обуви<br></h2>
                    <ul class="advantages_box">
                        <li>удобная колодка</li>
                        <li>эргономичная подошва</li>
                        <li>итальянские комплектующие</li>
                        <li>современный дизайн</li>
                        <li>качественные материалы</li>
                        <li>натуральная и эко кожа</li>
                    </ul>
                </div>
                <div class="shop_information">
                    <h2>Как сделать заказ</h2>
                    <p class="text">Оформить заказ обуви в интернет - магазине <br> с бесплатной доставкой можно в несколько
                        кликов.
                        Удобная навигация и большое количество фильтров, <br> помогают ориентироваться по сайту, легко
                        подбирая нужные
                        модели.<br> <br>
                        Главной задачей онлайн магазина <br> Francesco Donni является помощь в поиске, и покупки товаров
                        удобными способами. В Каталоге 20-21 представлены <br> модели на разные сезоны.
                    </p>
                </div>
                <div class="shop_information">
                    <h2>Доставка и примерка</h2>
                    <p class="text">Мы доставляем заказы по всей <br> России: Москва, Санкт-Петербург, Курск, Нижний
                        Новгород, Краснодар,
                        Саратов, Екатеринбург, Красноярск, Челябинск, <br> Новосибирск, Самара, Тюмень, Казань и многие
                        другие.
                        Партнерами доставки являются известные компании: <br> CDEK, Dalli, Boxberry. Более 600 пунктов
                        выдачи заказов
                        (ПВЗ) по всей стране с возможностью примерки, <br> полного и/или частичного отказа.</p>
                </div>
                <div class="shop_information">
                    <h2>Оплата и возврат</h2>
                    <p class="text">Предлагаем современные и удобные способы оплаты:</p>
                    <ul>
                        <li>наличными</li>
                        <li>банковской картой</li>
                    </ul>
                    <p class="text">Покупая в обувной сети <br> Francesco Donni или онлайн, <br>
                        Вы отдаете предпочтение качеству товара,
                        доступным ценам и высокому <br> уровню клиентского сервиса.</p>
                </div>
            </div>
            <div class="instruction">
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/delivery.png">
                    <div class="hr"></div>
                    <h3>БЕСПЛАТНАЯ ДОСТАВКА</h3>
                    <p>Мы делаем бесплатную доставку в пределах Москвы и МО от суммы 5 000 рублей.</p>
                </div>
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/return.png">
                    <div class="hr"></div>
                    <h3>14 дней на возврат</h3>
                    <p>Если вам не подошла обувь или одежда, вы можете вернуть ее в течение 14 дней</p>
                </div>
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/sale.png">
                    <div class="hr"></div>
                    <h3>Накопительные скидки</h3>
                    <p>Каждая ваша покупка дает все больше и больше вам скидку. Круто правда?!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="touch" id="touch">
    </div>
    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/message.js"></script>
    <script src="js/elements.js"></script>
<?php
    include("layout/footer.php");
?>