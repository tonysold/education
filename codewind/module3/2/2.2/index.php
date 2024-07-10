<!-- 
 mysql_connect(имя хоста, имя пользователя, пароль, имя бд) 
 mysqli_query() 
 -->

<?php
//прописываем основные переменные для создания линки
$host = 'localhost';
$user = 'tonysold';
$pass = 'risenovsky';
$name = 'tonysoldDB';

//сам линк
$link = mysqli_connect($host, $user, $pass, $name);

//какой-то запрос чтобы всё было в норм кодировке, до конца не разобрался
mysqli_query($link, "SET NAMES 'utf8'");

//делаем запрос с подсчётом юзеров из таблицы юзерс у которых зп 300 или возраст 23
$query = 'SELECT COUNT(*) FROM users WHERE salary=300 OR age=23';

//выполняем этот запрос с поправкой на ошибку
$res = mysqli_query($link, $query) or die(mysqli_error($link));

//создаём функцию вывода (хотя зачем она здесь)
$row = mysqli_fetch_assoc($res);

echo ('<pre>');
// for (
//     $data = [];
//     $row = mysqli_fetch_assoc($res);
//     $data[] = $row
// );
// $data[] = $row;

print_r($row);
