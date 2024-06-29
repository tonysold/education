<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файлов на сервер средствами PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Загрузка файла на сервер</h1>
                <form action="profile.php" method="post" enctype="multipart/form-data">
                    <label for="user_avatar" class="form-label">Аватар пользователя</label>
                    <input class="form-control" type="file" id="user_avatar" name="user_avatar"><br>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
                <br>
                <hr>
                <br>
                <h2>Множественная загрузка файлов</h2>
                <form action="gallery.php" method="post" enctype="multipart/form-data">
                    <label for="gallery" class="form-label">Фотогалерея</label>
                    <input class="form-control" type="file" id="gallery" name="gallery[]" multiple><br>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div class="col-6">
                <h2>Список файлов в /img/</h2>
                <ul>
                    <?php
                    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/fileupload/img/';
                    $arFiles = scandir($uploadDir, 1);
                    if (is_array($arFiles)) {
                        foreach ($arFiles as $file) {
                            // Исключаем служебные записи '.' и '..'
                            if ($file !== '.' && $file !== '..') {
                                echo '<li><a href="/fileupload/img/' . htmlspecialchars($file) . '" target="_blank">' . htmlspecialchars($file) . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>