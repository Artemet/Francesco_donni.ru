<?php
    include("layout/header.php");
    include("layout/app.php");
?>
    <div class="slider">
        <div class="slider_img">
            <img src="../res/slide1.png" class="slide" alt="">
            <div class="button_list">
                <div class="slideshow__nav slideshow__nav&#45;&#45;prev" data-way="prev">&#10094;</div>
                <div class="slideshow__nav slideshow__nav&#45;&#45;next" data-way="next">&#10095;</div>
            </div>
        </div>
    </div>
    <div id="message_button" onclick="message_start_work()">
        <span class="message">Напишите нам</span>
    </div>
    <div id="message_container" style="display: none">
        <div id="message_block"></div>
    </div>
    <div id="bottom_part">
        <?php
            include("servises/bd.php");
            include("component/product.php");
        ?>
        <div class="container_artical" id="container_artical">
            <div class="shop">
                <h2 id="title_shop">Интернет-магазин обуви и одежды</h2>
                <p class="text">Francesco Donni - обувной бренд с большой историей в России, занимающий высокие позиции
                    в
                    производстве и продаже обуви комфорт класса для женщин и мужчин, разрабатываемой с учётом
                    климатических
                    особенностей, продлевающих срок её службы. Популярные категории: сапоги, ботинки, туфли, летние
                    босоножки,
                    ботильоны, кроссовки, пляжная, домашняя, резиновая, а также большой выбор повседневной обуви. </p>
                <p class="text">Франческо Донни – это Интернет-магазин с широкой розничной сетью по всей России.</p>
                <h2>Собственное производство</h2>
                <p class="text">Коллекции создаются специалистами, прибывающими в постоянном творческом поиске. Все
                    модели
                    отшиваются на современном оборудовании обувных фабриках мира в Италии, Португалии, России, Китае.
                    Каждая
                    пара проходит высокий уровень контроля с учётом европейских стандартов.</p>
                <p class="text">В производстве используются разработки, учитывающие тенденции моды. Это практически
                    полностью
                    ручная работа. Мастера вкладывают в каждый элемент свое умение, навыки и частичку души. Эталон
                    комфорта –
                    обувь Франческо Донни, соединяющая в себе традиции европейского дизайна, технологий а также
                    стандарты
                    российского покупателя.</p>
                <h2>Преимущества обуви</h2>
                <ul>
                    <li>удобная колодка</li>
                    <li>эргономичная подошва</li>
                    <li>итальянские комплектующие</li>
                    <li>современный дизайн</li>
                    <li>качественные материалы</li>
                    <li>натуральная и эко кожа</li>
                </ul>
                <h2>Как сделать заказ</h2>
                <p class="text">Оформить заказ обуви в интернет - магазине с бесплатной доставкой можно в несколько
                    кликов.
                    Удобная навигация и большое количество фильтров, помогают ориентироваться по сайту, легко подбирая
                    нужные
                    модели.</p>
                <p class="text">Главной задачей онлайн магазина Francesco Donni является помощь в поиске, и покупки
                    товаров
                    удобными способами. В Каталоге 20-21 представлены модели на разные сезоны.</p>

                <h2>Доставка и примерка</h2>
                <p class="text">Мы доставляем заказы по всей России: Москва, Санкт-Петербург, Курск, Нижний Новгород,
                    Краснодар,
                    Саратов, Екатеринбург, Красноярск, Челябинск, Новосибирск, Самара, Тюмень, Казань и многие другие.
                    Партнерами доставки являются известные компании: CDEK, Dalli, Boxberry. Более 600 пунктов выдачи
                    заказов
                    (ПВЗ) по всей стране с возможностью примерки, полного и/или частичного отказа.</p>

                <h2>Оплата и возврат</h2>
                <p class="text">Предлагаем современные и удобные способы оплаты:</p>
                <ul>
                    <li>наличными</li>
                    <li>банковской картой</li>
                    <p class="text">Покупая в обувной сети Francesco Donni или онлайн, Вы отдаете предпочтение качеству
                        товара,
                        доступным ценам и высокому уровню клиентского сервиса.</p>
                </ul>
            </div>
            <div class="instruction">
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/delivery.png" class="instruction">
                    <h3>БЕСПЛАТНАЯ ДОСТАВКА</h3>
                    <p>Мы делаем бесплатную доставку в пределах Москвы и МО от суммы 5 000 рублей.</p>
                </div>
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/return.png" class="instruction">
                    <h3>14 дней на возврат</h3>
                    <p>Если вам не подошла обувь или одежда, вы можете вернуть ее в течение 14 дней</p>
                </div>
                <div class="item">
                    <img src="https://francesco.ru/local/templates/fd/images/sale.png" class="instruction">
                    <h3>Накопительные скидки</h3>
                    <p>Каждая ваша покупка дает все больше и больше вам скидку. Круто правда?!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="touch" id="touch">
        <h2>БУДЬ В КУРСЕ</h2>
        <div id="img_touch">
            <img src="https://scontent-arn2-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.90.720.720a/s640x640/170152291_511165513585244_4095097181367475304_n.jpg?tp=1&_nc_ht=scontent-arn2-2.cdninstagram.com&_nc_cat=108&_nc_ohc=0G1x1oP5z6sAX8tmW0r&edm=ABfd0MgAAAAA&ccb=7-4&oh=3fdab032f0a09a1195d625626adeac49&oe=60780173&_nc_sid=7bff83"
                 class="touch">
            <img src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/169612141_369464890882078_1144734085309037533_n.jpg?tp=1&_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=110&_nc_ohc=RiSgOERLnpAAX-Pfk2W&edm=ABfd0MgAAAAA&ccb=7-4&oh=7b89e500f69c842283b9e4f9ad3e76e6&oe=609BBCB0&_nc_sid=7bff83"
                 class="touch">
            <img src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.90.720.720a/s640x640/169247614_153561829999110_6615309243461268839_n.jpg?tp=1&_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=uPbvoGxjioIAX_5j6tW&edm=ABfd0MgAAAAA&ccb=7-4&oh=b2ffa39407e00a6380cf3fc9a6f86ffa&oe=60782926&_nc_sid=7bff83"
                 class="touch">
            <img src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/167882963_173671224588789_4283796838727035051_n.jpg?tp=1&_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=109&_nc_ohc=yF5vJovImTsAX9KxY-A&edm=ABfd0MgAAAAA&ccb=7-4&oh=2d3aaed86f3ea89002c7b4d620e18dbf&oe=609C7B15&_nc_sid=7bff83"
                 class="touch">
            <img src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.136.1440.1440a/s640x640/167542121_1022519904943063_461114310804595413_n.jpg?tp=1&_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=107&_nc_ohc=l8DRzYAGEfoAX-EDAde&edm=ABfd0MgAAAAA&ccb=7-4&oh=4c20b82b708070d2d72dd69871764d61&oe=6099AE2D&_nc_sid=7bff83"
                 class="touch">
            <img src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/166439065_443326050227917_3085276047851050922_n.jpg?tp=1&_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=101&_nc_ohc=PCdwDjNHeUgAX9FdcNJ&edm=ABfd0MgAAAAA&ccb=7-4&oh=170a1697aafe83c0649717a59956708f&oe=609ADA69&_nc_sid=7bff83"
                 class="touch">
        </div>
    </div>
    <a href="../pages/in_product.php" class="in_product">in_product</a>
    <script src="../js/card_animation.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/message.js"></script>
    <script src="../js/menu.js"></script>
<?php
    include("layout/footer.php");
?>