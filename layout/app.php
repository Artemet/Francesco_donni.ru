<?php
    include("header.php");
?>
<div class="header">
    <div class="francescoDonni app_line">
        <a href="http://localhost/francesco.ru" class="back"><img src="https://francesco.ru/local/templates/main/images/logo.svg" class="logo"></a>
        <div class="headerContacts countrys">
            <div class="contacts">
                <a href="tel:88007075827">88007075827</a>
                <span>/</span>
                <a href="tel:74952150449">74952150449</a>
            </div>
            <div class="country">
                <span class="city">Ваш город:</span>
                <span class="desktop" id="desktop" onclick="city_block()">Выберите город</span>
<!--                --><?php
//                    for($line_under = 0; $line_under < 15; $line_under++){
//                        echo "<span class='line'>-</span>";
//                    }
//                ?>
                <div id="line_block" class="line_block"></div>
            </div>
        </div>
        <div class="headerTime">
            <span class="time">10:00-19:00</span>
            <span class="time">/</span>
            <span class="time">7 days</span>
        </div>
        <div class="headerIcons">
            <div id="number_count" class="basket_number"><span class="number">0</span></div>
            <a href="header_menu/search/search.html"><i class="fas fa-search icon_choice"></i></a>
            <a href=""><i class="fas fa-user-alt icon_choice"></i></a>
            <a href="../header_menu/basket/basket.html"><i class="fas fa-shopping-bag icon_choice"></i></a>
        </div>
    </div>
    <div class="header_choice_container">
        <div class="menu_list">
            <div class="menu_block" onmouseleave="women_menu_hide()">
                <a href="http://localhost/francesco.ru/pages/floor.php?pol=woman&page=1"><h3 onmouseover="women_menu()">Женщинам</h3></a>
                <div class="sub_menu" id="sub_menu_one" style="display: none; position: fixed">
                    <h2 class="menu_title">Женская обувь</h2>
                    <div class="part">
                        <div class="part_menu">
                            <a href="#" class="menu">Балетки<br></a>
                            <a href="#" class="menu">Босоножки<br></a>
                            <a href="#" class="menu">Ботильоны<br></a>
                            <a href="#" class="menu">Ботинки<br></a>
                            <a href="#" class="menu">Ботфорты<br></a>
                            <a href="#" class="menu">Дутики<br></a>
                            <a href="#" class="menu">Кеды<br></a>
                            <a href="#" class="menu">Кроссовки<br></a>
                            <a href="#" class="menu">Лоферы<br></a>
                        </div>
                        <div class="part_menu">
                            <a href="#" class="menu">Мокасины<br></a>
                            <a href="#" class="menu">Мюли<br></a>
                            <a href="#" class="menu">Полуботинки<br></a>
                            <a href="#" class="menu">Полусапоги<br></a>
                            <a href="#" class="menu">Резиновая обувь<br></a>
                            <a href="#" class="menu">Сабо<br></a>
                            <a href="#" class="menu">Сапоги<br></a>
                            <a href="#" class="menu">Туфли<br></a>
                            <a href="#" class="menu">Угги<br></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_block"onmouseleave="man_menu_hide()">
                <a href="http://localhost/francesco.ru/pages/floor.php?pol=man&page=1"><h3 onmouseover="man_menu()">Мужчинам</h3></a>
                <div class="sub_menu" id="sub_menu_two" style="display: none; position: fixed">
                    <h2>Мужская обувь</h2>
                    <div class="part">
                        <div class="part_menu">
                            <a href="#" class="menu">Ботинки<br></a>
                            <a href="#" class="menu">Кеды<br></a>
                            <a href="#" class="menu">Кроссовки<br></a>
                            <a href="#" class="menu">Лоферы<br></a>
                            <a href="#" class="menu">Мокасины<br></a>
                        </div>
                        <div class="part_menu">
                            <a href="#" class="menu">Полуботинки<br></a>
                            <a href="#" class="menu">Сандалии<br></a>
                            <a href="#" class="menu">Слипоны<br></a>
                            <a href="#" class="menu">Топсайдеры<br></a>
                            <a href="#" class="menu">Туфли<br></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_block" onmouseleave="care_menu_hide()">
                <h3 onmouseover="care_menu()">Уход за обувью</h3>
                <div class="sub_menu" id="sub_menu_three" style="display: none; position: fixed">
                    <a href="#" class="menu"><h2>Косметика для обуви</h2></a>
                </div>
            </div>
        </div>
        <div class="link_list">
            <div class="part_link">
                <a href="http://localhost/francesco.ru/pages/shops.php"><h3>Магазины</h3></a>
            </div>
            <div class="part_link">
                <a href="#"><h3 class="sale">Распродажа%</h3></a>
            </div>
            <div class="part_link">
                <a href="#"><h3>Акции</h3></a>
            </div>
        </div>
    </div>
</div>
