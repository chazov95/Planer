<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Список дел</h1>
    <form action="http://Planer/add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>
    <?php
    require 'ConfigDB.php';

    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` desc ');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>' . $row->task . '</b><a href="/del.php?id=' . $row->id . '"><button>Удалить</button></a></li>';
    }
    echo '</ul>';
    ?>
</div>
</body>
</html>