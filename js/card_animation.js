const cards = document.querySelectorAll(".card");
cards.forEach((items, i)=>{
    items.addEventListener("mouseenter", ()=>{low_part(items)});
    items.addEventListener("mouseleave", ()=>{low_part(items)});
})
function chenk_img(icon_id, card_id){
    const card_list = document.querySelector(".cardList");
    const card = card_list.querySelectorAll(".card");
    // const card = card_list.querySelector(".card"); //Нужно переделать в All
    const img = card[card_id].querySelector("img");
    const icon = card[card_id].querySelectorAll(".button_list");
        img.src = JSON.parse(icon[icon_id].dataset.img);
}
chenk_img(0,3);
function low_part(cardsi){
    const more_information = cardsi.querySelector(".more_information");
        more_information.classList.toggle("active_information");
    const get_dot = cardsi.querySelector(".link_list");
        get_dot.classList.toggle("link_active");
}
//go_to_basket
const button_basket = document.querySelectorAll(".basket");
button_basket.forEach((buttons, pres)=>{
    buttons.addEventListener("mouseclick", ()=>{go_basket(buttons)})
})
//do_pres
const get_window = document.querySelector(".content_window");
function go_basket(){
    get_window.style.display = "block";
    const get_span = document.querySelector(".number");
        get_span.innerHTML = Number(get_span.innerHTML)+1;
}

