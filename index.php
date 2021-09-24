<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars fan wiki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/MainStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="images/lightsaber%20icon.png" type="image/icon" rel="icon">
</head>
<body>
<header>
    <h1 class="mainPageTitle">Star Wars Wiki</h1>
    <nav>
        <a href="index.php">Home</a>
        <div class="dropdown">
            <a href="WebPages/Movies/movies.php" class="navButtons">Movies</a>
            <div class="dropdown-content">
                <a href="WebPages/Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="WebPages/Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="WebPages/Series/series.php" class="navButtons">Series</a>
            <div class="dropdown-content">
                <a href="WebPages/Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="WebPages/Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="WebPages/Characters/characters.php" class="navButtons">Characters</a>
            <div class="dropdown-content">
                <a href="WebPages/Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="WebPages/Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <?php
        $isLoggedIn = false;

        if($isLoggedIn) {
            echo '<a href="WebPages/account/profile.php">Profile</a>';
        } else {
            echo '<a href="WebPages/account/registration.php">Login / Sign Up</a>';
        }

        ?>
    </nav>
</header>
<div id="MainBody">
    <div class="HomePageGrid">
        <div class="MoviesText">
            <h1>MOVIES</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
            <img src="images/home_pagina/Movies.jpg" alt="Movies.jpg">
        </div>
        <div class="SeriesText">
            <h1>SERIES</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
            <img src="images/home_pagina/Series.jpg" alt="Series.png">
        </div>
        <div class="CharactersText">
            <h1>CHARACTERS</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
            <img src="images/home_pagina/Characters.jpg" alt="Character.jpg">
        </div>
    </div>
</div>
<?php

?>
</body>
</html>