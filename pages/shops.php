<?php
    include("../layout/app.php");
    include("../component/modal.php");
    include("../component/modal_warning.php");
?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/modal_waring.css">
    <link rel="stylesheet" href="../css/company_information/shops.css">
    <link rel="stylesheet" href="../css/header_line.css">
<div class="header_line">
    <h2 class="title">Официальный магазины Francesco Donni</h2>
    <img src="../res/header_line.jpg" class="title">
</div>
<div class="shop_box">
    <div class="img_line_shop">
        <div class="photo">
            <img src="https://francesco.ru/upload/iblock/1b6/1b603a5c8b7a37316323675cfa6eedef.jpg" id="photo" class="photo">
        </div>
        <img src="https://francesco.ru/upload/iblock/1b6/1b603a5c8b7a37316323675cfa6eedef.jpg" onclick="photo_one()" class="shop">
        <img src="https://francesco.ru/upload/iblock/e1f/e1f64e776502030e1fa8f5ff58768301.jpg" onclick="photo_two()" class="shop">
        <img src="https://francesco.ru/upload/iblock/76d/76da2b22ab99dd5e5322a75009cb0592.jpg" onclick="photo_three()" class="shop">
        <img src="https://francesco.ru/upload/iblock/d11/d11de89d15f48e5e6892e3bf32b9d030.jpg" onclick="photo_four()" class="shop">
        <img src="https://francesco.ru/upload/iblock/c7b/c7bd6448a864715011468eb53ed270da.jpg" onclick="photo_five()" class="shop">
    </div>
    <div class="shop_card_choice">
        <div class="shop_card">
            <a href="https://clck.ru/UonLy" id="city_map"><button class="shop">Посмотреть на карте города</button></a>
            <img src="https://francesco.ru/local/templates/main/images/map-banner-img-1.jpg" class="shop_card">
        </div>
        <div class="shop_card">
            <button class="shop" onclick="get_window_metro()" id="metro_map">Посмотреть на карте метро</button>
            <img src="https://francesco.ru/local/templates/main/images/map-banner-img-2.jpg" class="shop_card">
            <div id="block_metro">
                <button class="close" onclick="card_close()">Скрыть карту</button>
                <img src="https://francesco.ru/local/templates/main/images/map-metro.jpg">
            </div>
        </div>
    </div>
</div>
<div class="shop_container">
    <div class="city">
        <span class="city" onclick="moscow_shop()" id="moscow_text" style="color: tomato">МОСКВА И ОБЛАСТЬ</span>
        <span class="city" onclick="peter_shop()" id="peter_text">САНКТ-ПЕТЕРБУРГ</span>
        <span class="city" onclick="yaroslavl_shop()" id="yaroslavl_text">ЯРОСЛАВЛЬ</span>
        <span class="city" onclick="tula_shop()" id="tula_text">ТУЛА</span>
        <span class="city" onclick="kaluga_shop()" id="kaluga_text">КАЛУГА</span>
        <span class="city" onclick="novgorod_shop()" id="novgorod_text">НИЖНИЙ НОВГОРОД И ОБЛАСТЬ</span>
        <span class="city" onclick="bryansk_shop()" id="bryansk">БРЯНСК</span>
        <span class="city" onclick="ivanovo_shop()" id="ivanovo">ИВАНОВО</span>
        <span class="city" onclick="lipetsk_shop()" id="lipetsk">ЛИПЕЦК</span>
        <span class="city" onclick="tatarstan_shop()" id="tatarstan">РЕСПУБЛИКА ТАТАРСТАН</span>
        <span class="city" onclick="yekaterinburg_shop()" id="yekaterinburg">ЕКАТЕРИНБУРГ</span>
    </div>
    <div class="choice_city_shop" id="moscow">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТЦ "Универмаг Московский", Москва.</h3>
                <span class="shop">м. Комсомольская</span>
                <span class="time">ежедневно с 9:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Белорусской, Москва.</h3>
                <span class="shop">м. Белорусская</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Энтузиастов, Москва.</h3>
                <span class="shop">м. Авиамоторная</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Академической, Москва.</h3>
                <span class="shop">м. Академическая</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Добрынинской, Москва.</h3>
                <span class="shop">м. Добрынинская</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин Жулебино, Москва.</h3>
                <span class="shop">м. Жулебино</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ/ ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Калужский", Москва.</h3>
                <span class="shop">м. Калужская</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Севастопольской, Москва.</h3>
                <span class="shop">м. Севастопольский проспект/Каховская</span>
                <span class="street">ул. Азовская, д.23</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Райкин Плаза", Москва.</h3>
                <span class="shop">м. Марьина Роща</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Октябрьском Поле, Москва.</h3>
                <span class="shop">м. Октябрьское Поле</span>
                <span class="street">ул. Маршала Бирюзова, д.18</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 9:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Планерной, Москва.</h3>
                <span class="shop">м. Планерная</span>
                <span class="street">ул. Планерная, д.12, корп.1</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Колумбус", Москва.</h3>
                <span class="shop">м. Пражская</span>
                <span class="street">ул. Красного Маяка, д.2Б</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Преображенской площади, Москва.</h3>
                <span class="shop">м. Преображенская площадь</span>
                <span class="street">ул. Большая Черкизовская, д.5, корп.1</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Город Лефортово", Москва.</h3>
                <span class="shop">м. Римская/Авиамоторная</span>
                <span class="street">шоссе Энтузиастов, д.12.к.2</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Европолис", Москва.</h3>
                <span class="shop">м. Ростокино/Ботанический сад/Свиблово</span>
                <span class="street">ул. Проспект Мира, д.211, копр.2</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТК "Савеловский" "Модный стиль", Москва.</h3>
                <span class="shop">м. Савёловская</span>
                <span class="street">ул. Сущевский Вал, д.5, стр.1</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Свиблово", Москва.</h3>
                <span class="shop">м. Свиблово</span>
                <span class="street">ул. Снежная, д.27</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Спектр", Москва.</h3>
                <span class="shop">м. Тёплый Стан</span>
                <span class="street">Новоясеневский пр-т, д.1</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Спортивной, Москва.</h3>
                <span class="shop">м. Спортивная</span>
                <span class="street">ул. Доватора, д.11.</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Калейдоскоп", Москва.</h3>
                <span class="shop">м. Сходненская</span>
                <span class="street">ул. Сходненская. д.56</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Филион", Москва.</h3>
                <span class="shop">м. Фили</span>
                <span class="street">Багратионовский пр-д, д.5</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Щука", Москва.</h3>
                <span class="shop">м. Щукинская</span>
                <span class="street">ул. Щукинская, д.42, этаж 3</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Домодедовский", Москва.</h3>
                <span class="shop">м. Домодедовская</span>
                <span class="street">Ореховый б-р, д.14, корп.3</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Москворечье", Москва.</h3>
                <span class="shop">м. Каширская</span>
                <span class="street">Каширское ш, д.26</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Мегаполис", Москва.</h3>
                <span class="shop">м. Технопарк</span>
                <span class="street">пр-т Андропова, д.8</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Дисконт-Центр на Орджоникидзе, Москва.</h3>
                <span class="shop">м. Ленинский проспект/Площадь Гагарина</span>
                <span class="street">ул. Орджоникидзе, д.11</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">БЦ "Магистраль Плаза", Москва.</h3>
                <span class="shop">м. Полежаевская/Беговая</span>
                <span class="street">1-ый Магистральный тупик д.5А</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">Пн-Пт с 09:00 до 18:30 Сб-Вс</span>
                <span class="time">Выходной</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Шангал", Москва.</h3>
                <span class="shop">м. Новогиреево</span>
                <span class="street">Зеленый проспект, д.62</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Алтуфьевской, Москва.</h3>
                <span class="shop">м. Алтуфьево</span>
                <span class="street">Алтуфьевское ш, д.88</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Карусель" (МО, г. Чехов)</h3>
                <span class="shop">г. Чехов, Симферопольское шоссе, д.1</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Щелковской, <br> Москва</h3>
                <span class="shop">м. Щелковская</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ/ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТПУ Планерная, Москва</h3>
                <span class="shop">м. Планерная</span>
                <span class="street">ул. Уральская,  д.5</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Перловский" (МО, г. Мытищи)</h3>
                <span class="shop">станция Перловская</span>
                <span class="street">ул. Планерная, д.7</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Красный Кит" (МО, г. Мытищи)</h3>
                <span class="shop">станция Мытищи</span>
                <span class="street">г. Мытищи, ул. Селезнева, д 33</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин в Орехово-Зуево, Московская Область</h3>
                <span class="shop">ул. Ленина, д.53</span>
                <span class="number">+7 (499) 130-80-77</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ Пушкино Парк, Москва</h3>
                <span class="shop">ТРЦ Пушкино Парк</span>
                <span class="street">Г. Пушкино, Красноармейское шоссе,</span>
                <span class="street"> стр 104 1 этаж</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ Зеленопарк, Москва</h3>
                <span class="shop">ТРЦ ЗЕЛЕНОПАРК</span>
                <span class="street">Зеленоград 18-й км Ленинградского ш.</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ " Измайловский пассаж", Москва</h3>
                <span class="shop">м.Партизанская, Измайловское шоссе, д.71А.</span>
                <span class="street">м.Партизанская, Измайловское</span>
                <span class="street">шоссе, д.71А.</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" id="peter" style="display: none">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТЦ "Северная Галерея", Санкт-Петербург.</h3>
                <span class="shop">м. Гражданский проспект</span>
                <span class="address">пр. Просвещения, д.84, к.1</span>
                <span class="phone">+7 (812) 313-59-06</span>
                <span class="time">ежедневно с 11:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Лондон Молл", Санкт-Петербург.</h3>
                <span class="shop">м. Проспект Большевиков</span>
                <span class="address">ул. Коллонтай, д.3</span>
                <span class="phone">+7 (812) 245-12-95</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "РИО", Санкт-Петербург.</h3>
                <span class="shop">м. Международная / Бухарестская</span>
                <span class="address">ул. Фучика, д.2-А</span>
                <span class="phone">+7 (812) 414-30-82</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Меркурий", Санкт-Петербург.</h3>
                <span class="shop">м. Беговая</span>
                <span class="address">ул. Савушкина, д.141A</span>
                <span class="phone">+7 (812) 495-68-97</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Французский Бульвар", Санкт-Петербург.</h3>
                <span class="shop">м. Ленинский проспект</span>
                <span class="address">Бульвар Новаторов, д.11 к.2</span>
                <span class="phone">+7 (812) 245-12-46</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Радиус", Санкт-Петербург.</h3>
                <span class="shop">м. Волковский проспект</span>
                <span class="address">пр. Волковский, д.32</span>
                <span class="phone">+7 (812) 456-38-90</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Академ Парк", Санкт-Петербург.</h3>
                <span class="shop">м. Академическая</span>
                <span class="address">пр. Гражданский, д.41</span>
                <span class="phone">+7 (812) 456-39-14</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Ветеранов, Санкт-Петербург.</h3>
                <span class="shop">м. Проспект Ветеранов</span>
                <span class="address">пр. Ветеранов, д.95</span>
                <span class="phone">+7 (812) 759-10-14</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Родео Драйв", Санкт-Петербург.</h3>
                <span class="shop">м.  Озерки / Гражданский проспект</span>
                <span class="address">пр. Культуры, д.1</span>
                <span class="phone">+7 (812) 456-35-20</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Универмаг "Нарвский", Санкт-Петербург.</h3>
                <span class="shop">м. Ленинский проспект</span>
                <span class="address">пр. Ленинский, д.134</span>
                <span class="phone">+7 (812) 655-63-39</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Галерея", Санкт-Петербург.</h3>
                <span class="shop">м. Площадь Восстания</span>
                <span class="address">пр. Лиговский, д.30А</span>
                <span class="phone">+7 (812) 456-35-90</span>
                <span class="time">ежедневно с 10:00 до 23:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Норд", Санкт-Петербург.</h3>
                <span class="shop">м. Проспект Просвещения</span>
                <span class="address">пр. Просвещения, д.19, лит А</span>
                <span class="phone">+7 (812) 456-39-40</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Находка", Санкт-Петербург.</h3>
                <span class="shop">м. Рыбацкое</span>
                <span class="address">ул. Тепловозная, д.31</span>
                <span class="phone">+7 (812) 456-38-84</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Гулливер", Санкт-Петербург.</h3>
                <span class="shop">м. Старая деревня</span>
                <span class="address">ул. Торфяная дорога, д.7</span>
                <span class="phone">+7 (812) 441-23-29</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Континент", Санкт-Петербург.</h3>
                <span class="shop">м. Пионерская / Комендантский проспект</span>
                <span class="address">ул. Байконурская, д.14</span>
                <span class="phone">+7 (812) 495-68-02</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Димитрова, Санкт-Петербург.</h3>
                <span class="shop">м. Проспект Славы</span>
                <span class="address">ул. Димитрова, д.20/1</span>
                <span class="phone">+7 (812) 772-53-46</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Парнас Сити", Санкт-Петербург</h3>
                <span class="shop">м. Парнас</span>
                <span class="address">ул. Михаила Дундича, д.6</span>
                <span class="phone">+7 (812) 495-68-07</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Балкания Нова", Санкт-Петербург</h3>
                <span class="shop">м. Купчино</span>
                <span class="address">ул. Балканская, д.17-А</span>
                <span class="phone">+7 (812) 456-38-89</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТК "Меркурий" (г. Колпино), Санкт-Петербург</h3>
                <span class="shop">м. Звездная</span>
                <span class="address">г. Колпино, ул. Пролетарская, д.36</span>
                <span class="phone">+7 (812) 495-68-04</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Охта Молл", Санкт-Петербург</h3>
                <span class="shop">м. Новочеркасская</span>
                <span class="address">Брантовская дорога, д.3</span>
                <span class="phone">+7 (812) 456-47-20</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Ш. Революции, Д 16, Санкт-Петербург</h3>
                <span class="shop">м. Новочеркасская</span>
                <span class="address">шоссе Революции, д.16</span>
                <span class="phone">+7 (812) 225-62-21</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК Лето, Санкт-Петербург</h3>
                <span class="shop">Метро Московская, ТРК Лето,</span>
                <span class="address">Пулковское шоссе д 25 к1</span>
                <span class="phone">+7 (812) 605- 24-52</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Народной, Санкт-Петербург.</h3>
                <span class="shop">Народная ул, д. 9</span>
                <span class="phone">+7 (812) 454-99-45</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТК Сенная, Санкт-Петербург.</h3>
                <span class="shop">ул. Ефимова д.3 помещение 213</span>
                <span class="phone">+7(812)335-93-70</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="yaroslavl">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТРК "Альтаир", Ярославль.</h3>
                <span class="shop">Ленинградский пр, д.123</span>
                <span class="number">+7 (4852) 59-52-39</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на улице Свободы, Ярославль.</h3>
                <span class="shop">ул. Свободы, д.2</span>
                <span class="number">+7 (4852) 74-49-49</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ - Пункт Самовывоза</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на улице Свободы, Ярославль.</h3>
                <span class="shop">ул. Свободы, д.2</span>
                <span class="number">+7 (4852) 74-49-49</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ - Пункт Самовывоза</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="tula">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">Магазин на проспекте Ленина, Тула.</h3>
                <span class="shop">пр-т. Ленина, д.98</span>
                <span class="number">+7 (4872) 65-70-10</span>
                <span class="number">+7 (4872) 65-70-10</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Гостиный Двор", Тула.</h3>
                <span class="shop">ул. Советская, д.47</span>
                <span class="number">+7 (4872) 71-73-76</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Макси", Тула.</h3>
                <span class="shop">ул. Пролетарская, д.2</span>
                <span class="format">+7 (4872) 71-61-03</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="kaluga">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">Магазин на Кирова, Калуга.</h3>
                <span class="shop">г. Калуга, ул. Кирова, д.23</span>
                <span class="number">+7 (4842) 90-61-18</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="thing">ОБУВЬ Пункт Самовывоза</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ Торговый квартал, Калуга</h3>
                <span class="shop">г. Калуга, ул. Московская, д.338А</span>
                <span class="time">ОБУВЬ Пункт Самовывоза</span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="novgorod">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТРЦ "Седьмое небо", Нижний Новгород.</h3>
                <span class="shop">м. Стрелка</span>
                <span class="street">ул. Бетанкура, д.1</span>
                <span class="number">+7 (987) 544-08-87</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРК "Фантастика", Нижний Новгород.</h3>
                <span class="shop">м. Горьковская</span>
                <span class="street">ул. Родионова, д.187</span>
                <span class="number">+7 (831) 410-42-41</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ И ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Магазин на Семашко, Нижний Новгород.</h3>
                <span class="shop">м. Горьковская</span>
                <span class="street">ул. Семашко, д.33/58</span>
                <span class="number">+7 (831) 419-92-71</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Мега" (Кстовский район), Нижегородская область.</h3>
                <span class="shop">м. Горьковская</span>
                <span class="street">Кстовский район, ул. Любимая, стр.1</span>
                <span class="number">‎+7 910 895-41-40</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Дзержинец" (г.Дзержинск), Нижегородская Область</h3>
                <span class="shop">г. Дзержинск, пр. Ленина, д.66</span>
                <span class="number">+7 (8313) 25-79-03</span>
                <span class="time">ежедневно с 9:00 до 21:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="bryansk">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">Магазин на Абашева, Брянск.</h3>
                <span class="shop">ул. Абашева, д.19</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 19:00</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА Пункт Самовывоза</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="ivanovo">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТРЦ "Серебряный город", Иваново.</h3>
                <span class="shop">ул. 8 Марта, д.32</span>
                <span class="number">+7 (4932) 93-31-34</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Евролэнд", Иваново.</h3>
                <span class="shop">ул. Куконковых, д.141</span>
                <span class="number">+7 (961) 246-53-99</span>
                <span class="time">ежедневно с 10:00 до 21:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="lipetsk">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">Магазин на Космонавтов, Липецк.</h3>
                <span class="shop">ул. Космонавтов, д. 49/1</span>
                <span class="number">+7 (4742) 31-74-35</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Ривьера", Липецк.</h3>
                <span class="shop">ул. Катукова, д.51</span>
                <span class="number">+7 (962) 352-74-54</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-blok">
                <h3 class="shop">ТРЦ "Европа", Липецк.</h3>
                <span class="shop">ул. Советская, д.66</span>
                <span class="number">+7 (962) 352-72-18</span>
                <span class="time">ежедневно с 10:00 до 22:00</span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="tatarstan">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ул. Рихарда Зорге, д.89, Казань</h3>
                <span class="shop">м. Проспект Победы/Дубровная</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ Пункт самовывоза интернет-магазина</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ул. Ленина, д.41, Альметьевск</h3>
                <span class="shop">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Пр. Химиков, д.51, Нижнекамск</h3>
                <span class="shop">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ - Пункт самовывоза</span>
                <span class="thing">интернет-магазина</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ул. Университетская 6/Островского, 39, Казань</h3>
                <span class="shop">м. Площадь Тукая</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ул. Космонавтов 2, Казань</h3>
                <span class="shop">м. Площадь Тукая</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ / ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Ул. Куйбышева, д. 39, Лениногорск</h3>
                <span class="number">+7(855)955-79-09</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Ул. Мусы Джалиля, д. 60, Бугульма</h3>
                <span class="number">+7(855)949-44-02</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Ул. Гидростроителей, д. 3, Набережные Челны</h3>
                <span class="number">+7(855)271-22-22</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ул. Николая Ершова, 14, Казань</h3>
                <span class="number">+7(906) 616-66-55</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">Ул. Туфана, 8, Набережные Челны</h3>
                <span class="time">+7(917)394-60-09</span>
                <span class="time">ежедневно с 10:00 до 20:00</span>
                <span class="format">формат магазина "Стрит"</span>
                <span class="thing">ОБУВЬ</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТЦ "Парк Хаус", Казань</h3>
                <span class="shop">ТЦ "Парк Хаус" Хусаина Ямашева</span>
                <span class="shop">проспект, 46</span>
                <span class="strit">Казань, Респ. Татарстан, 420124</span>
                <span class="time">Ежедневно с 10.00 до 22.00  </span>
                <span class="thing">ОБУВЬ</span>
            </div>
        </div>
    </div>
    <div class="choice_city_shop" style="display: none" id="yekaterinburg">
        <div class="city_shop_list">
            <div class="address-block">
                <h3 class="shop">ТЦ "Гринвич", Екатеринбург</h3>
                <span class="shop">ТЦ "Гринвич" Свердловская область</span>
                <span class="street">г.Екатеринбург ул.8 марта</span>
                <span class="time">Ежедневно с 10.00 до 22.00</span>
                <span class="thing">ОБУВЬ/ОДЕЖДА</span>
            </div>
            <div class="address-block">
                <h3 class="shop">ТРЦ "Карнавал", Екатеринбург</h3>
                <span class="shop">ТРЦ "Карнавал" Свердловская область</span>
                <span class="street">г.Екатеринбург ул.Халтурина д.55</span>
                <span class="time">Ежедневно с 10.00 до 22.00</span>
                <span class="thing">ОБУВЬ/ОДЕЖДА</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--    <script src="../js/shop_information/shops.js"></script>-->
<!--    <script src="../js/choice_city.js"></script>-->
<?php
    include("../layout/footer.php");
?>