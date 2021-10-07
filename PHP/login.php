<?php
session_start();

require_once "ConnectDB.php";
$conn = OpenConn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh"
          content="0; url = ../WebPages/account/Profile/profile.php">
</head>
<body>
<?php
$usedName = $_POST["user"];
$getEmail = "SELECT Email FROM accountinformation where Email or Username = '$usedName'";

$_SESSION["LoggedIn"] = true;
//$_SESSION["SelectEmail"] = $conn->query($getEmail)->fetch();
//print_r($_SESSION["SelectEmail"]["Email"]);
?>
</body>
</html>