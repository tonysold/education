<?php
session_start();

$surname = $_POST['surname'];
$name = $_POST['name'];
$age = $_POST['age'];

$data = array(
    'surname' => $surname,
    'name' => $name,
    'age' => $age
);

$_SESSION['data'] = $data;

header('Location: display_data.php');