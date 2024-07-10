<!-- Внесенные изменения в код направлены на улучшение
безопасности веб-приложения путем предотвращения атак, связанных
с SQL-инъекциями -->
<?php
$username = $_POST['username'];
$password = $_POST['password'];
// Функция prepare() создаёт скомпилированное SQL-выражение,
// которое может быть многократно выполнено
// путем отправки серверу набором данных.
// Также благодаря prepare() невозможно провести SQL-инъекцию через плейсхолдеры
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
// Функция bind_param()
// используется для связывания параметров с подготовленным запросом,
// что предотвращает возможность злоумышленника изменить или удалить
// данные в базе данных
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    // Пользователь аутентифицирован
    // ...
} 
else {
    // Неправильное имя пользователя или пароль
    // ...
}
?>