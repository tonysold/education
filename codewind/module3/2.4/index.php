<?php

$host = 'localhost';
$user = 'tonysold';
$pass = 'risenovsky';
$name = 'tonysoldDB';

$link = mysqli_connect($host, $user, $pass, $name);

$query = "SELECT * FROM users";

$result = mysqli_query($link, $query) or die(mysqli_errno($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>

<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($data as $elem) : ?>
        <tr>
            <td><?= $elem['id'] ?></td>
            <td><a href="show.php?id=<?= $elem['id'] ?>"><?= $elem['name'] ?></a></td>
            <td><?= $elem['age'] ?></td>
            <td><?= $elem['salary'] ?></td>
            <td><a href="?del=<?= $elem['id'] ?>">удалить</a></td>
            <td><a href="edit.php?id=<?= $elem['id'] ?>">редактировать</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php

if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $query = "DELETE FROM users WHERE id=$del";
    mysqli_query($link, $query) or die(mysqli_error($link));
}
?>