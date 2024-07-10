<?php
session_start();
//создаём переменные и принимаем значения инпутов
$surname = $_POST['surname'];
$name = $_POST['name'];
$age = $_POST['age'];
//создаём ассоциативный массив
$data = array(
    'surname' => $surname,
    'name' => $name,
    'age' => $age
);
//записываем массив в сессию
$_SESSION['data'] = $data;
//перенаправляем данные в следующий файл
header('Location: display_data.php');