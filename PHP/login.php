<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Вход в админку</title>
</head>
<body>

    <h1 class="admin_title">Вход в административную панель</h1>
    <form action="admin.php" method="POST" class="admin_form">
        <div class="admin_pading">
        <input class="admin_input" type="text" placeholder="Введите логин" name="login">
        </div>
        <div class="admin_pading">
        <input class="admin_input"  type="text" placeholder="Введите пароль" name="password">
        </div>
        <button type="submit" class="admin_btn">Войти</button>
    </form>

</body>
</html>
