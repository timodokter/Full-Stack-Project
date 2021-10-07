<?php
session_start();

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
        echo "<script>console.log('Connected succefully')</script>";
    } catch (PDOException $e) {
        echo "<script>console.log'Connection failed: " . $e->getMessage() . "')</script>";
    }

    return $conn;
}

function CloseConn($conn)
{
    $conn->close();
}
