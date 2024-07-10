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
<div>
    <h1><?= $user['name'] ?></h1>
    <p>
        age: <span class="age"><?= $user['age'] ?></span>
        age: <span class="salary"><?= $user['salary'] ?></span>
    </p>
</div>