const modal = document.getElementById('modal'); //получаем модальное окно с датами
const modaltime = document.getElementById('modal-time'); //получаем модальное окно с временем
const openModal = document.getElementById("open-modal"); //открытое модальное окно с датами
const openModaltime = document.getElementById("open-modal-time"); //открытое модальное окно с временем
const closeModal = document.getElementById("close"); //получаем кнопку для закрытия модального окна с датами
const closeModaltime = document.getElementById("close-two");// получаем кнопку для закрытия модального окна с временм
const backdata = document.getElementById("back-data"); //получаем кнопку для возвращения с окна времени на окно даты



openModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "block"; // меняем свойство display на block
});

closeModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "none"; // скрываем модальое окно с датами
});

openModaltime.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "none"; // скрываем окно с датами 
    modaltime.style.display = "block"; //открываем окно со временем 
});

backdata.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "block"; //открываем окно с датами
    modaltime.style.display = "none"; // скрываем окно со временем
});

closeModaltime.addEventListener("click", function() { //создаём событие при клике
    modaltime.style.display = "none"; // скрываем окно со временем
});