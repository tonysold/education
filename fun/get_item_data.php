<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Пример данных для каждого элемента
    $items = [
        1 => ['input1' => 'Data for Item 1 - Field 1', 'input2' => 'Data for Item 1 - Field 2'],
        2 => ['input1' => 'Data for Item 2 - Field 1', 'input2' => 'Data for Item 2 - Field 2'],
        3 => ['input1' => 'Data for Item 3 - Field 1', 'input2' => 'Data for Item 3 - Field 2']
    ];

    if (array_key_exists($id, $items)) {
        echo json_encode($items[$id]);
    } else {
        echo json_encode(['input1' => '', 'input2' => '']);
    }
}
?>
