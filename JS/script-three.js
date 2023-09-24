let offset = 0;
const slider = document.querySelector(".slider_boxs");
document.querySelector('.next').addEventListener('click', function (){
    offset += 550;
    if(offset > 1000){
        offset = 0;
    }
    slider.style.left = -offset + 'px';
})

document.querySelector('.back').addEventListener('click', function (){
    offset -= 550;
    if(offset < 0){
        offset = 550;
    }
    slider.style.left = -offset + 'px';
})

