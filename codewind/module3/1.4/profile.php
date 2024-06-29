<?php
// Массив c описанием ошибок
$uploadErrorMessages = [
    'UPLOAD_ERR_INI_SIZE'   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
    'UPLOAD_ERR_FORM_SIZE'  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
    'UPLOAD_ERR_PARTIAL'    => 'Загружаемый файл был получен только частично.',
    'UPLOAD_ERR_NO_FILE'    => 'Файл не был загружен.',
    'UPLOAD_ERR_NO_TMP_DIR' => 'Отсутствует временная папка.',
    'UPLOAD_ERR_CANT_WRITE' => 'Не удалось записать файл на диск.',
    'UPLOAD_ERR_EXTENSION'  => 'PHP-расширение остановило загрузку файла.',
];

// Проверяем что $_FILES есть наш файл
if (isset($_FILES['user_avatar'])) {
    $image = $_FILES['user_avatar'];
    // Получаем нужные элементы массива "user_avatar"
    $tmpFileName = $_FILES['user_avatar']['tmp_name'];
    $uploadErrorCode = $_FILES['user_avatar']['error'];

    //Если есть ошибка или файл был загружен не через HTTP POST вернём ошибку
    if ($uploadErrorCode !== UPLOAD_ERR_OK || !is_uploaded_file($tmpFileName)) {
        //Выводим соответствующее $errorCode сообщение об ошибка или "ошибка неизвестна"
        $message = isset($uploadErrorMessages[$uploadErrorCode]) ? $uploadErrorMessages[$uploadErrorCode] : 'При загрузке файла произошла неизвестная ошибка.';
        //Завершаем работу скрипта, выводим сообщение об ошибке
        echo json_encode(['status' => 'error', 'msg' => $message], JSON_UNESCAPED_UNICODE);
    } else {
        //Если всё ок, выполняем манипуляции с файлом
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/fileupload/img/'; //Формируем переменную с URL папки, где будут сохраняться файлы
        if (move_uploaded_file($_FILES['user_avatar']['tmp_name'], $uploadDir . $_FILES['user_avatar']['name'])) {
            echo json_encode(['status' => 'ok', 'msg' => 'Файл загружен в директорию ' . $uploadDir], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['status' => 'error', 'msg' => 'Ошибка загрузки файла'], JSON_UNESCAPED_UNICODE);
        }
    }
}
