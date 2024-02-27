<?php

function getConnection(): PDO
{
    $host = "localhost";
    $database = "u842353793_bukuTamu";
    $username = "u842353793_adminRoot";
    $password = "gc]emU|r6^B";

    return new PDO("mysql:host=$host;dbname=$database", $username, $password);
}