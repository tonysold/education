<?php

session_start();

session_destroy();

echo 'Вы закончили сессию';
echo '<br>';
?>

<a href="index.php">Начать заново</a>