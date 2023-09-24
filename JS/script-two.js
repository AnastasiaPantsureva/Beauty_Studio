let offset = 0;
const slider = document.querySelector(".slider_boxs");
document.querySelector('.next').addEventListener('click', function (){
    offset += 320;
    if(offset > 1000){
        offset = 0;
    }
    slider.style.left = -offset + 'px';
})

document.querySelector('.back').addEventListener('click', function (){
    offset -= 320;
    if(offset < 0){
        offset = 1300;
    }
    slider.style.left = -offset + 'px';
})

let offsetTwo = 0;
const sliderTwo = document.querySelector(".slider_boxs_two");
document.querySelector('.next_two').addEventListener('click', function (){
    offsetTwo += 550;
    if(offsetTwo > 1000){
        offsetTwo = 0;
    }
    sliderTwo.style.left = -offsetTwo + 'px';
})

document.querySelector('.back_two').addEventListener('click', function (){
    offsetTwo -= 550;
    if(offsetTwo < 0){
        offsetTwo = 550;
    }
    sliderTwo.style.left = -offsetTwo + 'px';
})


