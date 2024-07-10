<!-- 
 mysql_connect(имя хоста, имя пользователя, пароль, имя бд) 
 mysqli_query() 
 -->

<?php

$host = 'localhost';
$user = 'tonysold';
$pass = '';
$name = 'firma';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");
$query = 'SELECT * FROM firstbd';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
echo '<pre>';
var_dump($res);
