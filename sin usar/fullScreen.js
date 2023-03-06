"use strict";

let slider__inner = document.querySelector("#slider__inner");
let slider = document.querySelector("#slider");
slider__inner.addEventListener("click",fullScreen);

function fullScreen(){
    slider.classList.remove('slider');
    slider.classList.add('sliderFullscreen');
}