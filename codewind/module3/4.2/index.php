<?php
// Подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Обработка отправки формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    //добавляем встроенную функции addslashes для экранирования вводимых данных
    $login = addslashes($login);
    $password = $_POST["password"];
    //добавляем встроенную функции addslashes для экранирования вводимых данных
    $password = addslashes($password);
 
    // Запрос на получение секрета пользователя
    $sql = "SELECT secret FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        // Пользователь найден
        $row = mysqli_fetch_assoc($result);
        $secret = $row["secret"];
        echo "Секрет: " . $secret;
    } else {
        echo "Некорректный логин или пароль";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Логин: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>