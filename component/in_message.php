<div class="message_container" id="message_container">
    <i class="fas fa-times-circle close_button" onclick="close_message()" style="background-color: white; border-radius: 25px"></i>
    <div class="message_box">
        <div class="header_line_message">
            <div id="photo_peaple_online"></div>
            <p id="text_do" class="text_do">Напишите ваше сообщение</p>
            <span>Операторы онлайн!</span>
        </div>
        <div class="message_block" id="message_block" onmouseover="message_button_check()" onclick="get_peaple_online()">
            <div id="button_choice">
                <button id="text_chat_one" class="chat_message" onclick="one_text_chat()">Здравствуйте!</button>
                <button id="text_chat_two" class="chat_message" onclick="two_text_chat()">Нужна помощь!</button>
                <button id="text_chat_three" class="chat_message" onclick="three_text_chat()">Привет!</button>
            </div>
            <form action="component/tel_me.php" class="message" method="post">
                <input type="text" placeholder="Ваше имя" class="name" name="name">
                <input type="text" placeholder="Ваш телефон" class="phone" name = "phone">
                <button type="submit" class="send_information">Отправить!</button>
            </form>
        </div>
        <div class="message_send">
            <form action="">
                <input type="text" placeholder="Введите сообщение" id="message">
                <i class="fas fa-arrow-up message" style="color: white; background-color: darkblue; border-radius: 15px" onclick="send_message()"></i>
            </form>
            <div class="message_elements">
                <div class="element" id="element" onmouseleave="close_act()">
                    <i class="fas fa-ellipsis-v dots" onclick="show_act()"></i>
                    <div class="sub_element" id="sub_element_one">
                        <button class="chat_button_one" onclick="close_sub()">Закрыть чат</button>
                    </div>
                    <div class="sub_element" id="sub_element_two">
                        <button class="chat_button_two" id="chat_button_two" onclick="cleaning_chat()">Очистить чат</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/message.js"></script>