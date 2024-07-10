<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Карточка студента</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Карточка студента
                            <a href="index.php" class="btn btn-danger float-end">НАЗАД</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($link, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $result = mysqli_query($link, $query) or die(mysqli_error($link));

                            if (mysqli_num_rows($result) > 0) {
                                $student = mysqli_fetch_array($result);
                        ?>

                                <div class="mb-3">
                                    <label>ФИО</label>
                                    <p class="form-control">
                                        <?= $student['name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $student['email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Номер телефона</label>
                                    <p class="form-control">
                                        <?= $student['phone']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Курс</label>
                                    <p class="form-control">
                                        <?= $student['course']; ?>
                                    </p>
                                </div>

                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>