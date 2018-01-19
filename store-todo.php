<?php
require 'require/connection.php';
date_default_timezone_set('Europe/Oslo');
$date = date('Y-m-d H:i:s', time());

        //todo_id, todo_check, todo_todo
        $statement1 = $connection->prepare('INSERT INTO todo
        VALUES (NULL, 
        0,
        "'.$_POST['new-todo-todo'].'")');
        $statement1->execute();

        $statement2 = $connection->prepare('INSERT INTO logg
        VALUES (NULL, 
        "'.$date.'",
        "'.$_POST['new-todo-todo'].'",
        "ble lagt til")');
        $statement2->execute();

        header('Location: index.php');
        exit;