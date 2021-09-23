<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/images/lightsaber%20icon.png" type="image/icon" rel="icon">
    <link href="/Styles/MainStyleSheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1 class="mainPageTitle">Star Wars Wiki</h1>
    <nav>
        <a href="/index.php">Home</a>
        <a href="/WebPages/Movies/movies.php">Movies</a>
        <a href="/WebPages/Series/series.php">Series</a>
        <a href="/WebPages/Characters/characters.php">Characters</a>
        <?php
        $isLoggedIn = false;

        if($isLoggedIn) {
            echo '<a href="/WebPages/account/profile.php">Profile</a>';
        } else {
            echo '<a href="/WebPages/account/registration.php">Login / Sign Up</a>';
        }

        ?>
    </nav>
</header>
<?php

?>
</body>
</html>