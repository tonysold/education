<?php

session_start();
//заканчиваем сессию
session_destroy();

echo 'Вы закончили сессию';
echo '<br>';
?>

<a href="index.php">Начать заново</a>