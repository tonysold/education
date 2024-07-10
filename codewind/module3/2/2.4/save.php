<?php

$host = 'localhost';
$user = 'tonysold';
$pass = 'risenovsky';
$name = 'tonysoldDB';

$link = mysqli_connect($host, $user, $pass, $name);


$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=$id";
mysqli_query($link, $query) or die(mysqli_error($link));

echo 'пользователь успешно изменён';
