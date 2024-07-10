<form action="" method="post">
    <input name="name">
    <input name="age">
    <input name="salary">
    <input type="submit">
</form>

<?php

$host = 'localhost';
$user = 'tonysold';
$pass = 'risenovsky';
$name = 'tonysoldDB';

$link = mysqli_connect($host, $user, $pass, $name);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";

    mysqli_query($link, $query) or die(mysqli_error($link));
}
    