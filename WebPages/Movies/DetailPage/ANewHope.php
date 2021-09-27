<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A New Hope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../Styles/MainStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="../../../Styles/SubStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="../../../Styles/DetailStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="../../../images/lightsaber%20icon.png" type="image/icon" rel="icon">
</head>
<body>
<header>
    <h1 class="mainPageTitle">Star Wars Wiki</h1>
    <nav>
        <a href="../../../index.php">Home</a>
        <div class="dropdown">
            <a href="../../../WebPages/Movies/movies.php" class="navButtons">Movies</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="../../../WebPages/Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../../WebPages/Series/series.php" class="navButtons">Series</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Series/DetailPage/CloneWars.php">The Clone Wars</a>
                <a href="../../../WebPages/Series/DetailPage/Rebels.php">Rebels</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../../WebPages/Characters/characters.php" class="navButtons">Characters</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Characters/DetailPage/Obi-Wan.php">Obi-Wan Kenobi</a>
                <a href="../../../WebPages/Characters/DetailPage/JarJar.php">JarJar Binks</a>
            </div>
        </div>
        <?php
        $isLoggedIn = false;

        if ($isLoggedIn) {
            echo '<a href="../../../WebPages/account/profile.php">Profile</a>';
        } else {
            echo '<a href="../../../WebPages/account/registration.php">Login / Sign Up</a>';
        }

        ?>
    </nav>
</header>
<?php

?>
</body>
</html>