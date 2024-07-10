<!-- создаём форму с инпутами,
в которые будут записываться данные пользователя
для дальнейшей обработки -->
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Модуль 3</title>
   <body>
    <h1>Задание 1.2</h1>
    <form action="save_data.php" method="post">
        <label for="surname">Фамилия</label>
        <input type="text" name="surname">
        <br>
        <label for="name">Имя</label>
        <input type="text" name="name">
        <br>
        <label for="age">Возраст</label>
        <input type="number" name="age">
        <br>
        <input type="submit" value="save">
    </form>
   </body>