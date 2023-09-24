let offset = 0;
const slider = document.querySelector(".slider_boxs"); // получаем длинный слайдер
document.querySelector('.next').addEventListener('click', function (){ // код для стрелки
    offset += 550; // двигаем слайдер
    if(offset > 1000){ 
        offset = 0;
    }
    slider.style.left = -offset + 'px';
})

document.querySelector('.back').addEventListener('click', function (){ // код для стрелки
    offset -= 550; // двигаем слайдер
    if(offset < 0){
        offset = 550;
    }
    slider.style.left = -offset + 'px';
})

