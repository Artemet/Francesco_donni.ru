const get_imgs = document.querySelectorAll(".photo");
get_imgs.forEach((imgs, get)=>{
    imgs.addEventListener("mouseclick", ()=>{imgs(get_imgs)});
})
const get_photo = document.querySelector(".photo_show");
const get_small_photo = document.querySelector(".small_photo");
function img_show(card_id) {
    const img = document.querySelector('.product_container').querySelector('.photo_choice').querySelectorAll('img')[card_id]
    get_photo.src = img.src;
    get_small_photo.style.border = "1px solid red";
}
//show_photo
const get_big_photo = document.querySelector(".photo_show");
const get_bd_photo = document.querySelector(".bd");
function photo_go() {
    //Доделать нужно!
}
//par_number
const get_number = document.querySelector(".number_quantity");
const get_number_par = document.querySelector(".quantity_text span");
const get_original_price = document.querySelector(".price .original_price");
function count_product(cordination) {
    if(cordination){
        get_number.innerHTML = Number(get_number.innerHTML)+1;
    }
    else {
        if(get_number.innerHTML > 1){
            get_number.innerHTML = Number(get_number.innerHTML)-1;
        }
    }
    get_number_par.innerHTML = get_original_price.innerHTML*get_number.innerHTML;
}
//animation_buttons
function button_one(){
    document.getElementById("two_button");
        two_button.style.color = "black";
        two_button.style.backgroundColor = "white";
    document.getElementById("one_button");
        one_button.style.color = "white";
        one_button.style.backgroundColor = "tomato";
    document.getElementById("three_button");
        three_button.style.color = "black";
        three_button.style.backgroundColor = "white";
}
//animation_button_two
function button_two(){
    document.getElementById("one_button");
        one_button.style.color = "black";
        one_button.style.backgroundColor = "white";
    document.getElementById("two_button");
        two_button.style.color = "white";
        two_button.style.backgroundColor = "tomato";
    document.getElementById("three_button");
        three_button.style.color = "black";
        three_button.style.backgroundColor = "white";
}
//animation_button_two
function button_three(){
    document.getElementById("one_button");
        one_button.style.color = "black";
        one_button.style.backgroundColor = "white";
    document.getElementById("three_button");
        three_button.style.color = "white";
        three_button.style.backgroundColor = "tomato";
    document.getElementById("two_button");
        two_button.style.color = "black";
        two_button.style.backgroundColor = "white";
}
//animation_button_couple_mines
const get_mines = document.querySelector(".minus");
function mines_click() {
    if(get_plus.style.backgroundColor === "tomato" && get_plus.style.color === "white"){
        get_plus.style.backgroundColor = "var(--background-color)";
        get_plus.style.color = "var(--color)";
        get_mines.style.backgroundColor = "tomato";
        get_mines.style.color = "white";
    }
    else{
        get_mines.style.backgroundColor = "tomato";
        get_mines.style.color = "white";
    }
}
//animation_button_couple_plus
const get_plus = document.querySelector(".plus");
function plus_click() {
    if(get_mines.style.backgroundColor === "tomato" && get_mines.style.color === "white"){
        get_mines.style.backgroundColor = "var(--background-color)";
        get_mines.style.color = "var(--color)";
        get_plus.style.color = "white";
        get_plus.style.backgroundColor = "tomato";
    }
    else{
        get_plus.style.color = "white";
        get_plus.style.backgroundColor = "tomato";
    }
}
const get_line = document.querySelector(".line");
//animation_title_description
function style_description_animation(){
    document.getElementById("under_line_description");
        under_line_description.style.display = "block";
        under_line_description.style.height = "2.5px";
        under_line_description.style.backgroundColor = "tomato";
        under_line_description.style.width = "105px";
    get_line.style.display = "none";
}
//animation_description_title_close
function style_description_animation_close(){
    document.getElementById("under_line_description");
        under_line_description.style.display = "none";
    get_line.style.display = "block";
}
//sub_description_table
function table_sub(){
    document.getElementById("table_list");
        table_list.style.display = "block";
    document.getElementById("under_line_size");
        under_line_size.style.display = "block";
        under_line_size.style.height = "2.5px";
        under_line_size.style.backgroundColor = "tomato";
        under_line_size.style.width = "105px";
    if(under_line_size.style.display === "block"){
        //title_animation_start_size
        document.getElementById("size_title");
        size_title.style.color = "tomato";
    }
    get_line.style.display = "none";
}
//title_animation_stop_size
function size_title_animation(){
    document.getElementById("size_title");
        size_title.style.color = "black";
}
//hide_table
function table_sub_hide(){
    document.getElementById("table_list");
        table_list.style.display = "none";
    document.getElementById("under_line_size");
        under_line_size.style.display = "none";
    get_line.style.display = "block";
}
//sub_delivery_product
function delivery_sub(){
    document.getElementById("delivery_list");
        delivery_list.style.display = "block";
    document.getElementById("under_line_delivery");
        under_line_delivery.style.display = "block";
        under_line_delivery.style.height = "2.5px";
        under_line_delivery.style.backgroundColor = "tomato";
        under_line_delivery.style.width = "105px";
    if(under_line_delivery.style.display === "block"){
        //title_animation_start_delivery
        document.getElementById("delivery_title");
            delivery_title.style.color = "tomato";
    }
    get_line.style.display = "none";
}
//title_animation_stop_delivery
function delivery_title_animation(){
    document.getElementById("delivery_title");
        delivery_title.style.color = "black";
}
//hide_delivery
function delivery_sub_hide(){
    document.getElementById("delivery_list");
        delivery_list.style.display = "none";
    document.getElementById("under_line_delivery");
        under_line_delivery.style.display = "none";
    get_line.style.display = "block";
}
//sub_return_product
function return_sub(){
    document.getElementById("return_list");
        return_list.style.display = "block";
    document.getElementById("under_line_return");
        under_line_return.style.display = "block";
        under_line_return.style.height = "2.5px";
        under_line_return.style.backgroundColor = "tomato";
        under_line_return.style.width = "105px";
    if(under_line_return.style.display === "block"){
        //title_animation_start_return
        document.getElementById("return_title");
            return_title.style.color = "tomato";
    }
    get_line.style.display = "none";
}
//hide_return
function return_sub_hide(){
    document.getElementById("return_list");
        return_list.style.display = "none";
    document.getElementById("under_line_return");
        under_line_return.style.display = "none";
    get_line.style.display = "block";
}
//title_animation_stop_return
function retun_title_animation(){
    document.getElementById("return_title");
        return_title.style.color = "black"
}