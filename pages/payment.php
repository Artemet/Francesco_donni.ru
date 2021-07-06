<?php
    include("../layout/app.php");
?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/footer_list_css/payment.css">
<link rel="stylesheet" href="../css/header_line.css">
<div class="header_line">
    <h2 class="title">Способы оплаты</h2>
    <img src="https://francesco.ru/upload/iblock/076/0768d34f676c420a28815c19f4f3172f.jpg" class="title">
</div>
<div class="payment_container">
    <div class="payment_block">
        <p class="payment">Самовывоз из розничного магазина - оплата наличными или картой.</p>
    </div>
    <div class="payment_block">
        <p class="payment">Доставка курьером - оплата наличными или картой.</p>
    </div>
    <div class="payment_block">
        <p class="payment">Оплата через сайт. <br>
            Оплата происходит через авторизационный сервер процессингового центра
            ПАО «Промсвязьбанк» с использованием банковских карт следующих платежных систем:</p>
    </div>
    <div class="payment_block">
        <li class="payment">
            <img src="https://clck.ru/UgeMu" class="payment">
            Visa
        </li>
        <li class="payment">
            <img src="https://clck.ru/UgePM" class="payment">
            MasterCard
        </li>
        <li class="payment">
            <img src="https://clck.ru/UgeQE" class="payment">
            МИР
        </li>
    </div>
    <div class="payment_block">
        <p class="payment">
            При оплате заказа банковской картой обработка информации и платежа происходит <br>
            на авторизационном сервере процессингового центра Банка. Это значит, <br>
            что Ваши конфиденциальные данные (реквизиты карты) не поступают в интернет-магазин. <br>
            Информация по защищенному каналу связи SSL передается в зашифрованном виде напрямую <br>
            на авторизационный сервер Промсвязьбанка. Для передачи информации используются <br>
            специальные технологии безопасности интернет-платежей Verifed by Visa и MasterCard <br>
            SecureCode. Все операции по Вашей карте осуществляются при полном соблюдении <br>
            требований VISA International и MasterCard Worldwide. Безопасность обработки <br>
            интернет-платежей через Промсвязьбанк гарантирована международным сертификатом <br>
            безопасности PCI DSS</p>
    </div>
    <div class="payment_block">
        <img src="https://francesco.ru/upload/medialibrary/610/6101658598efdda48bae14b626fbf140.png" class="payment">
        <img src="https://francesco.ru/upload/medialibrary/bbb/bbbf2a551cc2656ae726de2cabf13f8b.png" class="payment">
        <img src="https://clck.ru/UgecU" style="display: flex" class="payment">
    </div>
</div>
<script src="../js/menu.js"></script>
<?php
    include("../layout/footer.php");
?>
