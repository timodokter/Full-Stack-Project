<?php

function OpenConn()
{
    $servername = "localhost";
    $username = "id17703671_starwarswiki";
    $password = "Wiki-StarWars1";
    $database = "id17703671_starwarswikidb";
    $port = "3306";


    try {
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . ";port=" . $port, $username, $password);
        // set the PDO error mode to exception
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}

function CloseConn($conn)
{
    $conn->close();
}

OpenConn();
