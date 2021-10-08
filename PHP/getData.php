<?php
require "PHP/ConnectDB.php";
$conn = OpenConn();

function getEmail($usedName) {
    global $conn;

    $getEmail = "SELECT Email FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getEmail);
}

function getUsername($usedName) {
    global $conn;

    $getUsername = "SELECT Username FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getUsername);
}

function getInitials($usedName) {
    global $conn;

    $getInitials = "SELECT Initials FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getInitials);
}

function getPassword($usedName) {
    global $conn;

    $getPassword = "SELECT Password FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getPassword);
}

function getFullName($usedName) {
    global $conn;

    $getFullName = "SELECT FullName FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getFullName);
}

function getBirthDate($usedName) {
    global $conn;

    $getBirthDate = "SELECT birthDate FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getBirthDate);
}

function getCharacter($usedName) {
    global $conn;

    $getCharacter = "SELECT `Character` FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getCharacter);
}

function getMovie($usedName) {
    global $conn;

    $getMovie = "SELECT Movie FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getMovie);
}

function getSerie($usedName) {
    global $conn;

    $getSerie = "SELECT Serie FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getSerie);
}

function getFight($usedName) {
    global $conn;

    $getFight = "SELECT Fight FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getFight);
}

function getJedi($usedName) {
    global $conn;

    $getJedi = "SELECT Jedi FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getJedi);
}

function getSith($usedName) {
    global $conn;

    $getSith = "SELECT Sith FROM accountinformation where Email or Username = '$usedName'";
    return $conn->query($getSith);
}