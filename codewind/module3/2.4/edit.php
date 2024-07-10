<?php

$host = 'localhost';
$user = 'tonysold';
$pass = 'risenovsky';
$name = 'tonysoldDB';

$link = mysqli_connect($host, $user, $pass, $name);

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
?>

<form action="save.php?id=<?= $_GET['id'] ?>" method="POST">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="age" value="<?= $user['age'] ?>">
    <input name="salary" value="<?= $user['salary'] ?>">
    <input type="submit"> 
</form>