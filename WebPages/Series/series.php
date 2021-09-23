<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Styles/MainStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="SeriesStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="../../images/lightsaber%20icon.png" type="image/icon" rel="icon">
</head>
<body>
<header>
    <h1 class="mainPageTitle">Star Wars Wiki</h1>
    <nav>
        <a href="../../index.php">Home</a>
        <a href="../../WebPages/Movies/movies.php">Movies</a>
        <a href="../../WebPages/Series/series.php">Series</a>
        <a href="../../WebPages/Characters/characters.php">Characters</a>
        <?php
        $isLoggedIn = false;

        if ($isLoggedIn) {
            echo '<a href="../../WebPages/account/profile.php">Profile</a>';
        } else {
            echo '<a href="../../WebPages/account/registration.php">Login / Sign Up</a>';
        }

        ?>
    </nav>
</header>
<div id="SeriesMainBody">
    <div id="CloneWars">
        <h1>THE CLONE WARS</h1>
        <img src="../../images/series/clone%20wars/theclonewars.jpg" alt="The Clone Wars">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
    </div>
    <div id="Rebels">
        <h1>REBELS</h1>
        <img src="../../images/series/rebels/rebels.jpg" alt="Rebels">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
    </div>
</div>
<?php

?>
</body>
</html>