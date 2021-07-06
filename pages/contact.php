<?php
    include("../layout/app.php");
?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer_list_css/contact.css">
    <link rel="stylesheet" href="../css/header_line.css">
<div class="header_line">
    <h2 class="title">Контакты Francesco Donni в Москве</h2>
    <img src="https://francesco.ru/upload/iblock/076/0768d34f676c420a28815c19f4f3172f.jpg" class="title">
</div>
<div class="contacts_container">
    <img src="https://francesco.ru/upload/medialibrary/1e4/1e470e83eb9b5051c30d2bcc3b573d1d.png" class="contact">
    <div class="contact_block">
        <p class="contact">Общество с ограниченной ответственностью <br> "ФРАНЧЕСКО ДОННИ"</p>
    </div>
    <div class="contact_block">
        <p class="contact">Юридический адрес: <br> 141002, Москва, г. Мытищи, ул. 3-я Парковая,
            д.1 пом.6, офис 3А <br> ИНН/КПП: 5029224041/502901001 <br> ОГРН: 1175029021199</p>
    </div>
    <div class="contact_block">
        <p class="contact">ИФНС организации: Инспекция Федеральной налоговой службы по г.
            Мытищи Московской области <br> Номер налоговой инспекции: 5029 <br>
            р/сч: 40702810600000226494 <br> в ПАО «ПРОМСВЯЗЬБАНК» г. Москва <br>
            БИК: 044525555 <br> к/сч: 30101810400000000555</p>
    </div>
    <div class="contact_block">
        <p class="contact">Генеральный директор: Артюхова
            Наталья Алексеевна (с 25.04.2019г.) <br> Система налогообложения - УСНО</p>
    </div>
    <div class="contact_block">
        <h3>Контакты для связи:</h3>
        <p class="contact">Если у Вас возник вопрос –  Вы всегда можете связатся с нами по телефону горячей линии.</p>
        <div class="phone_line">
            <a href="tel:8 800 707 58 27" class="phone">8 800 707 58 27</a>
            <span>/</span>
            <a href="tel:7 495 215 04 49" class="phone">7 495 215 04 49</a>
        </div>
        <p class="contact">c 09:00 до 21:00, 7 дней в неделю.</p>
    </div>
    <div class="contact_block">
        <p class="contact">Так же, в любое время дня можно оставить заявку в онлайн чате на сайте <br>
            или оправить запрос на почту</p>
        <a href="mailto:support@francesco-donni.com" class="email">support@francesco-donni.com</a>
    </div>
    <div class="contact_block">
        <p class="contact">Удачных покупок, <br> Команда Francesco Donni!</p>
        <?php
            for($meny_line = 0; $meny_line < 39; $meny_line++){
                echo "<span class='line'>-</span>";
            }
        ?>
    </div>
    <div class="messege_container">
        <h3>Напишите нам</h3>
        <div class="messege_block">
            <h4>Ваше имя</h4>
            <input type="text">
        </div>
        <div class="messege_block">
            <h4>Ваш E-mail</h4>
            <input type="text">
        </div>
        <div class="messege_block">
            <h4>Сообщение</h4>
            <input type="text">
        </div>
        <button>Отправить</button>
    </div>
</div>
    <script src="../js/menu.js"></script>
<?php
    include("../layout/footer.php");
?>