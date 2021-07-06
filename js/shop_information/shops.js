//change_photo
document.getElementById("photo");
//photo_one
function photo_one(){
    photo.src = "https://francesco.ru/upload/iblock/1b6/1b603a5c8b7a37316323675cfa6eedef.jpg";
}
//photo_two
function photo_two(){
    photo.src = "https://francesco.ru/upload/iblock/e1f/e1f64e776502030e1fa8f5ff58768301.jpg";
}
//photo_three
function photo_three(){
    photo.src = "https://francesco.ru/upload/iblock/76d/76da2b22ab99dd5e5322a75009cb0592.jpg";
}
//photo_four
function photo_four(){
    photo.src = "https://francesco.ru/upload/iblock/d11/d11de89d15f48e5e6892e3bf32b9d030.jpg";
}
//photo_five
function photo_five(){
    photo.src = "https://francesco.ru/upload/iblock/c7b/c7bd6448a864715011468eb53ed270da.jpg";
}
//metro_block_animation
function get_window_metro(){
    document.getElementById("modal");
    document.getElementById("block_metro");
    if(modal.style.display === "block"){
        block_metro.style.display = "none";
    }
    else{
        block_metro.style.display = "block";
    }
}
//card_close
function card_close(){
    block_metro.style.display = "none";
}
//city_shops
function moscow_shop() {
    document.getElementById("moscow");
        moscow.style.display = "block";
    document.getElementById("peter");
        peter.style.display = "none";
    document.getElementById("yaroslavl");
        yaroslavl.style.display = "none";
    document.getElementById("tula");
        tula.style.display = "none";
    document.getElementById("kaluga");
        kaluga.style.display = "none";
    document.getElementById("novgorod");
        novgorod.style.display = "none";
    document.getElementById("bryansk");
        bryansk.style.display = "none";
    document.getElementById("ivanovo");
        ivanovo.style.display = "none";
    document.getElementById("lipetsk");
        lipetsk.style.display = "none";
    document.getElementById("tatarstan");
        tatarstan.style.display = "none";
    document.getElementById("yekaterinburg");
        yekaterinburg.style.display = "none";
}