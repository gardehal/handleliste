<?php
require 'require/connection.php';
date_default_timezone_set('Europe/Oslo');
$date = date('Y-m-d H:i:s', time());

    $statement1 = $connection->prepare('DELETE FROM todo WHERE todo_id = '.$_GET['id']);
    $statement1->execute();

    $statement2 = $connection->prepare('INSERT INTO logg
    VALUES (NULL, 
    "'.$date.'",
    "'.$_GET['value'].'",
    "ble fjernet")');
    $statement2->execute();

    header('Location: index.php');
    exit;