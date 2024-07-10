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
if (isset($_FILES['gallery'])) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/fileupload/img/';
    $arFiles = [];
    //Изменим структуру массива $_FILES для удобства работы с файлами
    foreach ($_FILES['gallery'] as $field => $arValues) {
        foreach ($arValues as $key => $value) {
            $arFiles[$key][$field] = $value;
        }
    }

    foreach ($arFiles as $key => $file) {

        // Получаем нужные элементы массива "user_avatar"
        $tmpFileName = $file['tmp_name'];
        $uploadErrorCode = $file['error'];

        //Если есть ошибка или файл был загружен не через HTTP POST вернём ошибку
        if ($uploadErrorCode !== UPLOAD_ERR_OK || !is_uploaded_file($tmpFileName)) {
            //Выводим соответствующее $errorCode сообщение об ошибка или "ошибка неизвестна"
            $message = isset($uploadErrorMessages[$uploadErrorCode]) ? $uploadErrorMessages[$uploadErrorCode] : 'При загрузке файла произошла неизвестная ошибка.';
            //Завершаем работу скрипта, выводим сообщение об ошибке
            echo json_encode(['status' => 'error', 'msg' => $message], JSON_UNESCAPED_UNICODE);
        } else {
            //Добавим проверку на тип файла
            $allowedFormats = ['image/jpeg', 'image/gif', 'image/png'];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $fileInfo = finfo_file($finfo, $tmpFileName);

            if (in_array($fileInfo, $allowedFormats)) {
                //Если всё ок, выполняем манипуляции с файлом
                if (move_uploaded_file($file['tmp_name'], $uploadDir . $file['name'])) {
                    echo json_encode(['status' => 'ok', 'msg' => 'Файл загружен в директорию ' . $uploadDir], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode(['status' => 'error', 'msg' => 'Ошибка загрузки файла'], JSON_UNESCAPED_UNICODE);
                }
            } else {
                echo json_encode(['status' => 'error', 'msg' => 'Можно загружать только изображения jpg, png или gif формата'], JSON_UNESCAPED_UNICODE);
            }
        }
    }
}
