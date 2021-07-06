const message_container = document.getElementById("message_container");
const message_line = document.getElementById("message_line");
const button_choice = document.getElementById("button_choice");
const photo_peaple_online = document.getElementById("photo_peaple_online");
function show_message(){
        message_line.style.display = "none";
        message_container.style.display = "block";
}
//close_message
function close_message(){
    message_container.style.display = "none";
    message_line.style.display = "block";
}
//delete_elements

//get_online_peaple
function get_peaple_online(){
    const photo_peaple = document.createElement("img");
        photo_peaple.classList = "online_peaple";
        photo_peaple.src = "https://clck.ru/Ujbzi";
    photo_peaple_online.appendChild(photo_peaple);
    document.getElementById("message_block");
        message_block.onclick = "none";
}
//send_message_button
function one_text_chat(){

        button_choice.style.display = "none";
    const new_button_one = document.createElement("button");
        new_button_one.classList = "user_message";
        new_button_one.innerHTML = "Здравствуйте!";
    message_block.appendChild(new_button_one);
}
//on_mouse_in_card
function card_list_in(){
    message_line.style.display = "none";
    if(message_container.style.display === "block"){
        message_container.style.display = "none";
        message_line.style.display = "none";
    }
    const block_up_element = document.querySelector(".button_up");
    if(block_up_element.style.display === "block"){
        block_up_element.style.display = "none";
    }
}
//on_mouseleave_card
function card_list_leave(){
    message_line.style.display = "block";
}
//button_send_two
function two_text_chat(){
    button_choice.style.display = "none";
    const new_button_two = document.createElement("button");
        new_button_two.classList = "user_message";
        new_button_two.innerHTML = "Нужна помощь!";
    message_block.appendChild(new_button_two);
}
//button_send_two
function three_text_chat(){
    button_choice.style.display = "none";
    const new_button_three = document.createElement("button");
        new_button_three.classList = "user_message";
        new_button_three.innerHTML = "Привет!";
    message_block.appendChild(new_button_three);
}
//bot_anser
const get_message_part = document.querySelector(".message");
function message_button_check(){
    if(button_choice.style.display === "none"){
        const bot_message = document.createElement("button");
            bot_message.classList = "bot_message chat_message";
            bot_message.innerHTML = "Дабрый день!";
        const text_chat = document.createElement("p");
            text_chat.classList = "chat_text";
            text_chat.innerHTML = "Представьтесь в чате";
        message_block.appendChild(bot_message);
        message_block.appendChild(text_chat);
        get_message_part.style.display = "block";
        message_block.appendChild(get_message_part);
        message_block.onmouseover = "none";
    }
}
//act_show_sub
function show_act(){
    get_dots.classList = "fas fa-ellipsis-h dots";
    document.getElementById("sub_element_one");
        sub_element_one.style.display = "block";
    document.getElementById("sub_element_two");
        sub_element_two.style.display = "block";
    document.getElementById("element");
        element.style.backgroundColor = "#efefef";
}
//button_pres

function send_message(){
    const peaple_name = document.querySelector(".name");
    const peaple_phone = document.querySelector(".phone");
    if(peaple_name.value === length >= 2 && peaple_phone.value === length >= 10){
        //none
    }
}
//act_close_sub_leave
function close_act(){
    get_dots.classList = "fas fa-ellipsis-v dots";
    sub_element_one.style.display = "none";
    sub_element_two.style.display = "none";
    element.style.backgroundColor = "white";
}
//chat_clean
function cleaning_chat(){
    message_block.style.display = "none";
    document.getElementById("chat_button_two");
        chat_button_two.innerHTML = "Восстановить чат";
        chat_button_two.onclick = new_chat;
}
//new_chat
function new_chat(){
    message_block.style.display = "block";
    chat_button_two.innerHTML = "Очистить чат";
    chat_button_two.onclick = cleaning_chat;
}
//act_close_sub_click
function close_sub(){
    message_container.style.display = "none";
    message_line.style.display = "block";
}