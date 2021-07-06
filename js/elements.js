function list_up_button(){
    document.getElementById("button_block");
        button_block.style.display = "block";
    const message_block = document.querySelector(".message_container");
    if(message_block.style.display === "block"){
        message_block.style.display = "none"
    }
    document.getElementById("message_line");
        message_line.style.display = "none";
    const button_find = document.querySelector(".up_button");
        button_find.onclick = go_up;
    function go_up(){
        const get_up_line = document.querySelector(".app_line");
            get_up_line.style.top = 0;
        button_block.style.display = "none";
    }
}
//button_close
function leave_block(){
    button_block.style.display = "none";
    message_line.style.display = "block";
}
//element_two
const get_message_block = document.querySelector(".message_container");
function get_question_block(){
    document.getElementById("button_information");
    if(get_message_block.style.display === "block"){
        button_information.style.display = "none";
    }
    else{
        button_information.style.display = "block";
    }
}
//close_block
function close_question_block(){
    document.getElementById("button_information");
        button_information.style.display = "none";
}
//get_window_choice
const card_block = document.querySelector(".cardList");
const get_slide = document.querySelector(".slide");
function information_button(){
    button_information.style.display = "none";
    card_block.style.opacity = "40%";
    document.getElementById("information_window");
        information_window.style.display = "block";
    get_slide.style.opacity = "40%"
}
//button_press_approve
const get_button_one = document.querySelector(".approve_button")
    get_button_one.addEventListener('click', ()=>{approve_button})
function approve_button(){
    information_window.style.display = "none";
    get_slide.style.opacity = "100%";
}
//button_press_not_approve
const get_content = document.querySelector(".content");
function not_approve(){
    get_content.style.display = "none";
    button_information.style.display = "none";
}
const get_button_two = document.querySelector(".not_approve_button");
    get_button_two.onclick = not_approve_button;
function not_approve_button(){
    information_window.style.display = "none";
    const text_block = document.querySelector(".shop");
        text_block.onmouseover = "none";
    button_information.style.display = "none";
    card_block.style.opacity = "100%";
}
//close_close_question
function close_question(){
    information_window.style.display = "none";
    const get_slider = document.querySelector(".slide");
        get_slider.style.opacity = "100%";
    card_block.style.opacity = "100%";
    button_information.style.display = "none";
}