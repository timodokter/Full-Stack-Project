<?php

function OpenConn()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "starwarswikidb";
    $port = "3306";


    try {
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . ";port=" . $port, $username, $password);
        // set the PDO error mode to exception
        console.log("Connected successfully");
    } catch (PDOException $e) {
        console.log("Connection failed: " . $e->getMessage());
    }

    return $conn;
}

function CloseConn($conn)
{
    $conn->close();
}
