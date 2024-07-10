<?php

session_start();

$data = $_SESSION['data'];
// выводим данные посредством цикла
echo '<ul>';
foreach ($data as $key => $value) {
    echo '<li>' . $key . ': ' . $value . '</li>';
}
echo '<ul>';
?>
<!-- ссылочка на выход -->
<a href="logout.php">Выйти</a>
