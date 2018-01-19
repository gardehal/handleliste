<?php
//Denne connection-headeren brukes for å koble siden til server og database.
//OBS: ikke bruk personlig passord, lag nye

$host = 'localhost'; //Host, localhost for MAMP, tek.westerdals.no for server
$port = 8889; //3306 for cPanel, 8889 i localhost(eller hva du har i MAMP)
$username = 'root'; //Brukernavn i cPanel 
$password = 'root'; //Passord for bruker i cPanel   
$name = 'handleliste';

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password);