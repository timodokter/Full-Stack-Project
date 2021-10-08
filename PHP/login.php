<?php
require_once "PHP/ConnectDB.php";
require_once "getData.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh"
          content="0; url = ../WebPages/account/Profile/profile.php">
    <link href="../images/lightsaber%20icon.png" type="image/icon" rel="icon">
</head>
<body>
<?php
$conn = OpenConn();
//$usedName = $_POST["user"];
$usedName = "tdokter@roc-dev.com";

$_SESSION["LoggedIn"] = true;
//$_SESSION["SelectEmail"] = $conn->query($getEmail)->fetch();
//print_r($_SESSION["SelectEmail"]["Email"]);
?>
</body>
</html>