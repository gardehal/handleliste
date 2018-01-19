<?php
require 'require/connection.php';
date_default_timezone_set('Europe/Oslo');
$date = date('Y-m-d H:i:s', time());
$todoid = $_POST['edit-todo-id'];

        //todo_id, todo_check, todo_todo
        $statement1 = $connection->prepare('UPDATE todo SET
        todo_check = "'.$_POST['edit-todo-check'].'", 
        todo_todo = "'.$_POST['edit-todo-todo'].'"
        WHERE todo_id = "'.$todoid.'"');
        $statement1->execute();

        $statement2 = $connection->prepare('INSERT INTO logg
        VALUES (NULL, 
        "'.$date.'",
        "'.$_POST['edit-todo-todo'].'",
        "ble endret")');
        $statement2->execute();

        header('Location: index.php');
        exit;