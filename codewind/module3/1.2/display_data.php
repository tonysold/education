<?php

session_start();

$data = $_SESSION['data'];

echo '<ul>';
foreach ($data as $key => $value) {
    echo '<li>' . $key . ': ' . $value . '</li>';
}
echo '<ul>';
?>
<a href="logout.php">Выйти</a>
