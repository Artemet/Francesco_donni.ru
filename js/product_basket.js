const button_window = document.querySelectorAll(".basket");
button_window.forEach((window_button, get)=>{
    window_button.addEventListener("mouseclick", ()=>{window_product(window_button)});
})