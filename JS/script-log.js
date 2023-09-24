const reg = document.getElementById("regBtn"); //получаем кнопку регистрации
const regWindow = document.getElementsByClassName("registration")[0]; // получаем окно регистрации
const loginWindow = document.getElementsByClassName("log")[0]; // получаем окно логина
const log = document.getElementById("login");//получаем кнопку входа

reg.addEventListener("click", function() { //создаём событие при клике
    regWindow.style.display = "block"; // меняем свойство display на block
    loginWindow.style.display = "none"; // меняем свойство display на none
});

log.addEventListener("click", function() { //создаем событие  при клике
    loginWindow.style.display = "block"; // меняем свойство display на block
    regWindow.style.display = "none"; // меняем свойство display на none
});