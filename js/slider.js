//left_list
const get_img = document.querySelector(".slide");
function left_list(){
    if(get_img.src === "http://localhost/francesco.ru/res/slide1.png"){
        get_img.src = "https://clck.ru/V88oL";
    }
    else if(get_img.src === "https://clck.ru/VC5pi"){
        get_img.src = "http://localhost/francesco.ru/res/slide1.png";
    }
}
//right_list
function right_list(){
    if(get_img.src === "http://localhost/francesco.ru/res/slide1.png"){
        get_img.src = "https://clck.ru/VC5pi";
    }
    else if(get_img.src === "https://clck.ru/V88oL"){
        get_img.src = "http://localhost/francesco.ru/res/slide1.png";
    }
}