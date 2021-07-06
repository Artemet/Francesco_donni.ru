const fotter_button = document.querySelector(".follow");
function city_block(){
    document.getElementById("modal");
    modal.style.display = "block";
    change_text.onclick = "none";
    document.getElementById("message_line");
    message_line.onclick = "none";
    const get_button = document.querySelector(".button_up");
    get_button.style.display = "none";
    document.getElementById("cardList");
    cardList.style.opacity = "40%";
    for(i = 0; i < 1; i++){
        //line_cycl
        for(line_under = 0; line_under < 16; line_under++){
            const line = document.createElement("span");
            line.classList = "line";
            line.innerHTML = "-";
            line_block.appendChild(line);
        }
    }
    fotter_button.style.opacity = "45%";
    document.getElementById("city_map");
    city_map.style.opacity = "45%";
    city_map.href = "#";
    document.getElementById("metro_map");
    metro_map.style.opacity = "45%";
}
const change_text = document.querySelector(".desktop");
const get_line_block = document.querySelector(".line_block");
//close
function close_block(){
    change_text.onclick = city_block;
    get_line_block.style.display = "none";
    document.getElementById("slide");
        slide.style.opacity = "100%";
    message_line.style.opacity = "100%"
    message_line.onclick = show_message;
    cardList.style.opacity = "100%";
    fotter_button.style.opacity = "100%";
    modal.style.display = "none";
    city_map.href = "https://clck.ru/UonLy";
    city_map.style.opacity = "80%";
    metro_map.style.opacity = "80%";
}
//city_choice_one
const get_line = document.querySelector(".create_city")
function city_moscow(){
    const moskow = "Москва";
    get_line.value = moskow;
    change_text.innerHTML = moskow;
}
function city_peter(){
    const peter = "Санкт-Петербург";
    get_line.value = peter;
    change_text.innerHTML = peter;
}
function city_novosibirsk(){
    const novosibirsk = "Новосибирск";
    get_line.value = novosibirsk;
    change_text.innerHTML = novosibirsk;
}
function city_yekaterinburg(){
    const yekaterinburg = "Екатеринбург";
    get_line.value = yekaterinburg;
    change_text.innerHTML = yekaterinburg;
}
function city_novgorod(){
    const novgorod = "Нижний Новгород";
    get_line.value = novgorod;
    change_text.innerHTML = novgorod;
}
//city_choice_two
function city_kazan(){
    const kazan = "Казань";
    get_line.value = kazan;
    change_text.innerHTML = kazan;
}
function city_samara(){
    const samara = "Самара";
    get_line.value = samara;
    change_text.innerHTML = samara;
}
function city_omsk(){
    const omsk = "Омск";
    get_line.value = omsk;
    change_text.innerHTML = omsk;
}
function city_chelyabinsk(){
    const chelyabinsk = "Челябинск";
    get_line.value = chelyabinsk;
    change_text.innerHTML = chelyabinsk;
}
function city_rostov(){
    const rostov = "Ростов-на-дону";
    get_line.value = rostov;
    change_text.innerHTML = rostov;
}
//city_choice_three
function city_ufa(){
    const ufa = "Уфа";
    get_line.value = ufa;
    change_text.innerHTML = ufa;
}
function city_volgograd(){
    const volgograd = "Волгорад";
    get_line.value = volgograd;
    change_text.innerHTML = volgograd;
}
function city_krasnoyarsk(){
    const krasnoyarsk = "Красноярск";
    get_line.value = krasnoyarsk;
    change_text.innerHTML = krasnoyarsk;
}
function city_permian(){
    const permian = "Пермь";
    get_line.value = permian;
    change_text.innerHTML = permian;
}
function city_voronezh(){
    const voronezh = "Воронеж";
    get_line.value = voronezh;
    change_text.innerHTML = voronezh;
}
//city_waring
document.getElementById("desktop");
if(desktop.innerHTML === "Выберите город"){
    function city_question(){
        document.getElementById("modal_waring");
            modal_waring.style.display = "block";
        const get_slider = document.querySelector(".button_arrow");
            get_slider.onclick = "none";
        // slide.style.opacity = "40%";
        document.getElementById("cardList");
            cardList.style.opacity = "40%";
        if (modal_waring.style.display === "block"){
            // message_line.onclick = "none";
            // message_line.style.opacity = "40%";
        }
    }
    //woring_button
    function button_city_choice(){
        modal_waring.style.display = "none";
        modal.style.display = "block";
        header_slider.onmouseover = "none";
    }
    //close_waring_city
    function waring_close(){
        modal_waring.style.display = "none";
        cardList.style.opacity = "100%";
        document.getElementById("header_slider");
            header_slider.onmouseover = "none";
            header_slider.style.opacity = "100%";
        if (modal_waring.style.display === "none"){
            // message_line.onclick = show_message;
            message_line.style.opacity = "100%";
        }
    }
}
else {
    modal_waring.style.display = "none";
    modal.style.display = "none";
}
//discharge_button_get
const get_dots = document.querySelector(".dots");
const get_sub = document.querySelector(".choice_do_sub");
function get_discharge_button(){
    get_dots.classList = "fas fa-ellipsis-h";
    get_sub.style.display = "block";
}
//click_button_discharge
function discharge_city(){
    document.querySelector("#create_city").value = "";
    change_text.innerHTML = "Выберите город";
}
//close_discharge_button
function close_discharge_button(){
    get_dots.classList = "fas fa-ellipsis-v";
    get_sub.style.display = "none";
}