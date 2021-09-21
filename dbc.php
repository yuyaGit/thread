<?php

function dbConnect()
{

    $dsn = "mysql:host=localhost;dbname=thread;charset=utf8mb4";
    $user = "yuya";
    $pass = "root";

    try {
        $dbh = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    return $dbh;
}
