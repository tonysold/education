<!-- Реализовать уязвимое для XSS-атак веб-приложениепо примеру выполнения задания №3.
Внести изменение в код приложения, предотвратив возможность применения XSS-атак. -->

<!DOCTYPE html>
<html> 
<head>
    <title>Комментарии</title>
</head> 
<body>
    <h1>Комментарии</h1>
    <h2>Оставить комментарий</h2>
    <form method="post" action="">
        <textarea name="comment" required></textarea><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
    // Обработка отправки комментария
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comment = $_POST["comment"];
        //добавляем встроенныую функцию htmlspecialchars, чтобы преобразовывать вводимые 
        //возможно вредоносные символы в безобидные
        echo htmlspecialchars($comment);
    }
    ?>
</body> 
</html>