<?php
    $task = $_POST['task'];
    if ($task == '') {
        echo 'Введите задание';
        exit();
    }
    require 'ConfigDB.php';
    $sql = 'INSERT INTO tasks(task) VALUES (:task)';
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task]);
    header('location:/');