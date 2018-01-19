<?php
require 'require/connection.php';
date_default_timezone_set('Europe/Oslo');
$date = date('Y-m-d H:i:s', time());

    //todo_id, todo_check, todo_todo
    $statement1 = $connection->prepare('INSERT INTO todo VALUES (
    1, 
    0,
    "Dette er en handleliste")');
    $statement2 = $connection->prepare('INSERT INTO todo VALUES (
    2, 
    0,
    "Legg til en vare ved å skrive i Vare-feltet, og trykk på enter")');
    $statement3 = $connection->prepare('INSERT INTO todo VALUES (
    3, 
    0,
    "Trykk på teksten for å endre den")');
    $statement4 = $connection->prepare('INSERT INTO todo VALUES (
    4, 
    1,
    "Trykk på boksen til venstre for å sjekke av punktet")');
    $statement5 = $connection->prepare('INSERT INTO todo VALUES (
    5, 
    0,
    "Trykk på X-en til høyre for å slette punktet")');

    $statement6 = $connection->prepare('INSERT INTO logg
    VALUES (NULL, 
    "'.$date.'",
    NULL,
    "Hjelp ble trykket")');

    $statement1->execute();
    $statement2->execute();
    $statement3->execute();
    $statement4->execute();
    $statement5->execute();
    $statement6->execute();

    header('Location: index.php');
    exit;