<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "buku_tamu";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}