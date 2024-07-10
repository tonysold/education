<?php
session_start();
require 'config.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($link, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result) {
        $_SESSION['message'] = "Запись удалена";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Запись не удалена";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($link, $_POST['student_id']);

    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $course = mysqli_real_escape_string($link, $_POST['course']);

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result) {
        $_SESSION['message'] = "Данные обновлены";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Данные не обновлены";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $course = mysqli_real_escape_string($link, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($result) {
        $_SESSION['message'] = "Новый студент добавлен";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Студент не добавлен";
        header("Location: student-create.php");
        exit(0);
    }
}
