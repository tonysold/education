<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Добавление нового студента</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Форма добавления нового студента
                            <a href="index.php" class="btn btn-danger float-end">НАЗАД</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>ФИО</label>
                                <input type="text" name="name" class="form-control" value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Номер телефона</label>
                                <input type="text" name="phone" class="form-control" value="<?php if (isset($_POST['phone'])) echo $_POST['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Курс</label>
                                <input type="text" name="course" class="form-control" value="<?php if (isset($_POST['course'])) echo $_POST['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Добавить</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>