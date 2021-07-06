<?php
    include("../layout/header.php");
    include("../layout/app.php");
    include("../servises/bd.php");
    include("in_product_modal.php");
?>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/in_product.css">
<link rel="stylesheet" href="../../css/header_line.css">
<div class="header_line">
    <?php
        $sql_names = "SELECT * FROM `product` WHERE id = ".$_GET["id"];
        $query_names = mysqli_query($link, $sql_names) or die("error " . mysqli_error($link));
        $rows = mysqli_num_rows($query_names);
        for($c = 0; $c < $rows; $c++) {
            $product_names = $query_names->fetch_array();
        }
    ?>
    <h2 class="title"><?=$product_names["name"]; ?></h2>
    <img src="<?=$sql_imgs = "SELECT * FROM `imgs` WHERE product_id = ".$_GET['id'];
    $query_imgs = mysqli_query($link, $sql_imgs) or die("error " . mysqli_error($link));
    ?>" class="title">
</div>
<div class="product_container container">
    <div class="consider_img">
        <div class="photo_choice">
            <i class="fas fa-chevron-up" id="arrow_up" onclick="list_photo_up()"></i>
            <?php
                $sql = "SELECT * FROM `imgs` WHERE product_id = ".$_GET['id'];
                $query = mysqli_query($link, $sql) or die("error " . mysqli_error($link));
                $rows = mysqli_num_rows($query);
                for($i = 0; $i < $rows; $i++){
                    $product = $query->fetch_array();
                    ?>
                    <img src="../../<?=$product["link"];?>" onclick="img_show(<?=$i ?>)" class="small_photo">
            <?php
                }
            ?>
<!--            <img src="../../--><?//=$product["link"];?><!--" onclick="img_one()" class="photo">-->
            <i class="fas fa-chevron-down" id="arrow_buttom" onclick="list_photo_down()"></i>
        </div>
        <div class="photo_reflection">
            <img src="../../<?=$product["link"]; ?>" class="photo_show" onclick="photo_go()" id="photo">
        </div>
    </div>
<!--    --><?php
        $sql = "SELECT * FROM `product` WHERE id = ".$_GET['id'];
        $query = mysqli_query($link, $sql) or die("error " . mysqli_error($link));
        $product = $query->fetch_array();
    ?>
    <div class="consider_characteristics">
        <h2><?=$product_names["name"]; ?></h2>
        <span></span>
        <div class="choice_characteristics_product">
            <h3 onclick="style_description_animation()" onmouseleave="style_description_animation_close()">Описание</h3>
            <div class="product_size"">
            <h3 onclick="table_sub()" id="size_title" class="title" onmouseleave="size_title_animation()" onmouseover="table_sub_hide()">Размер</h3>
            <div id="under_line_size" style="display: none"></div>
            <div class="table_list" style="display: none" id="table_list">
                <div class="table_block">
                    <div class="table_row">
                        <span class="title">Длина стопы в см:</span>
                        <span class="anser_title">25</span>
                        <?php
                           for($table_number_one = 25.5; $table_number_one < 26.5+1; $table_number_one++){
                               echo "<span class='anser_title'>$table_number_one</span>";
                           }
                        ?>
                        <span class="anser_title">27</span>
                        <?php
                            $dot = ".";
                            for($table_number_two = 27.5; $table_number_two < 28.5+1; $table_number_two++){
                                echo "<span class='anser_title'>$table_number_two</span>";
                            }
                        ?>
                        <span class="anser_title">29</span>
                        <span class="anser_title">29<?=$dot; ?>5</span>
                    </div>
                    <div class="table_row">
                        <span class="title">Размер RUS:</span>
                        <?php
                            for($size_two = 39; $size_two < 47; $size_two++){
                                echo "<span class='anser_title'>$size_two</span>";
                            }
                        ?>
                    </div>
                    <div class="table_row">
                        <span class="title">Размер EUR:</span>
                        <?php
                            for($size_three = 40; $size_three < 48; $size_three++){
                                echo "<span class='anser_title'>$size_three</span>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_delivery">
            <h3 onclick="delivery_sub()" id="delivery_title" class="title" onmouseleave="delivery_title_animation()" onmouseover="delivery_sub_hide()">Доставка</h3>
            <div id="under_line_delivery" style="display: none"></div>
            <div class="delivery_list" style="display: none" id="delivery_list">
                <div class="information_delivery">
                    <b class="information">БЕСПЛАТНАЯ ДОСТАВКА ПРИ ЗАКАЗЕ ОТ 5000 РУБЛЕЙ</b>
                    <span class="information">Мы заботимся о Вас и предлагаем БЕСКОНТАКТНУЮ ДОСТАВКУ</span>
                    <div class="information_delivery_more">
                        если Вы оплатили заказ на нашем сайте.
                    </div>
                    <div class="information_delivery_more">Оформляя заказ, можно выбрать доставку
                        до двери или самовывоз из нашего магазина. <br>
                        Сроки указаны с учетом наличия товара.</div>
                </div>
                <div class="address_information">
                    <div class="address_block">
                        <li class="address">По Москве внутри МКАД</li>
                        <span class="address">Стоимость - от 0 до 300 рублей.</span>
                    </div>
                    <div class="address_block">
                        <li class="address">Доставка в другие регионы</li>
                        <span class="address">Тарифы сроки доставки зависят от места <br>
                            получения</span>
                    </div>
                    <div class="address_block">
                        <li class="address">Доставка в пункт самовывоза Тулы</li>
                        <span class="address">Бесплатно</span>
                    </div>
                    <div class="address_block">
                        <li class="address">По Московской области за МКАД</li>
                        <span class="address">От 300 рублей, зависит от суммы заказа и <br>
                            расстояния.</span>
                    </div>
                    <div class="address_block">
                        <li class="address">Доставка в пункт самовывоза Липецка</li>
                        <span class="address">Бесплатно</span>
                    </div>
                    <div class="address_block">
                        <li class="address">Доставка в пункт самовывоза Нижнего <br> Новгорода</li>
                        <span class="address">Бесплатно</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_return">
            <h3 onclick="return_sub()" id="return_title" class="title" onmouseleave="retun_title_animation()" onmouseover="return_sub_hide()">Возврат</h3>
            <div id="under_line_return" style="display: none"></div>
            <div class="return_list" style="display: none" id="return_list">
                <div class="return_block">
                    <p class="return">Если товар приобретали
                        в розничном магазине FRANCESCO DONNI в Москве, возврат только <br>
                        в этот магазин.</p>
                </div>
                <div class="return_block">
                    <p class="return">Если была доставка курьером по Москве то, <br>
                        возврат на м. Белорусская. Москва, Ленинградский проспект <br>
                        4/2  (магазин  Francesco-Donni) или м. Черкизово Москва, <br>
                        Черкизовская Большая ул. д. <?=$to_text = 5 ." " ."к"." ". 1; ?>, (магазин  Francesco-Donni) .</p>
                </div>
                <div class="return_block">
                    <p class="return">Если доставка товара осуществлялась в другой регион или город,
                        то возврат осуществляется <br> через почту России
                        (107061, Москва, Черкизовская Большая ул. д. <?=$to_text; ?>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="product_description">
        <div id="under_line_description" style="display: none"></div>
        <div class="description">
            <span class="size_title">Размер для обуви</span>
            <div class="size_row">
                <button class="size" onclick="button_one()" id="one_button">40</button>
                <button class="size" onclick="button_two()" id="two_button">41</button>
                <button class="size" onclick="button_three()" id="three_button">-</button>
            </div>
            <div class="price_row">
                <?php
                    $sql_price = "SELECT * FROM `product` WHERE id = ".$_GET['id'];
                    $query_prices = mysqli_query($link, $sql_price) or die("error " . mysqli_error($link));
                    $rows = mysqli_num_rows($query_prices);
                    for($b = 0; $b < $rows; $b++) {
                        $product_prices = $query_prices->fetch_array();
                    }
                ?>
                <span class="price" id="price"><span class="original_price"><?=$product_prices["price"]; ?></span> руб.</span>
                <?php
                    $sql_price_old = "SELECT * FROM `product` WHERE id = ".$_GET['id'];
                    $query_prices_old = mysqli_query($link, $sql_price_old) or die("error " . mysqli_error($link));
                    $rows = mysqli_num_rows($query_prices_old);
                    for($b = 0; $b < $rows; $b++) {
                        $product_prices_old = $query_prices_old->fetch_array();
                    }
                ?>
                <s class="old_price"><?=$product_prices_old["scale"]; ?> руб.</s>
            </div>
            <div class="choice_quantity">
                <button class="quantity minus" id="quantity_minus" onclick="count_product(0)">-</button>
                <span class="number_quantity" id="number_quantity">1</span>
                <button class="quantity plus" id="quantity_plus" onclick="count_product(1)">+</button>
                <span class="quantity_text">шт на сумму <span class="price_par"><?=$product_prices["price"]; ?></span> руб.</span>
            </div>
            <button class="basket">
                <span>В корзину</span>
                <i class="fas fa-arrow-right right_arrow"></i>
            </button>
        </div>
        <?php
            $sql_description = "SELECT * FROM `product` WHERE id = ".$_GET['id'];
            $query_description = mysqli_query($link, $sql_description) or die("error " . mysqli_error($link));
            $rows_description = mysqli_num_rows($query_description);
            for($description = 0; $description < $rows_description; $description++) {
                $product_description = $query_description->fetch_array();
            }
        ?>
        <div class="properties" id="properties">
            <h2>Описание товара</h2>
            <div class="line_properties">
                <span class="title">Артикул:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["article"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Цвет:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["color"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Производитель:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["manufacturer"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Коллекция:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["collection"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Материал верха:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["top_material"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Материал подкладки:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["lining_material"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Сезон:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["season"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Материал подошвы:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["outsole_material"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Размерный ряд:</span>
                <div class="br"></div>
                <?php
                    for($line_anser = 40; $line_anser < 46; $line_anser++){
                        echo "<span class='anser_title' style='margin-left: 2px; margin-right: 2px'>";
                        echo $line_anser;
                        echo "</span>";
                    }
                ?>
            </div>
            <div class="line_properties">
                <span class="title">Акция:</span>
                <div class="br"></div>
                <span class="anser_title"></span>
            </div>
            <div class="line_properties">
                <span class="title">Страна производитель:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["producing_country"]; ?></span>
            </div>
            <div class="line_properties">
                <span class="title">Торговая Марка:</span>
                <div class="br"></div>
                <span class="anser_title"><?=$product_description["trademark"]; ?></span>
            </div>
        </div>
    </div>
    </div>
</div>
<?=$line_block = "<div class='line'></div>"; ?>
<div class="text_logo">FRANCESCO.RU</div>
<?=$line_block; ?>
<script src="../../js/in_product.js"></script>
<script src="../../js/menu.js"></script>
<?php
    include("../layout/footer.php");
?>