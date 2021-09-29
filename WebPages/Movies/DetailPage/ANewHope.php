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
        <div><a href="../../../index.php" class="navlinks">Home</a></div>
        <div class="dropdown">
            <a href="../../../WebPages/Movies/movies.php" class="navButtons, navlinks">Movies</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="../../../WebPages/Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../../WebPages/Series/series.php" class="navButtons, navlinks">Series</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Series/DetailPage/CloneWars.php">The Clone Wars</a>
                <a href="../../../WebPages/Series/DetailPage/Rebels.php">Rebels</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../../WebPages/Characters/characters.php" class="navButtons, navlinks">Characters</a>
            <div class="dropdown-content">
                <a href="../../../WebPages/Characters/DetailPage/Obi-Wan.php">Obi-Wan Kenobi</a>
                <a href="../../../WebPages/Characters/DetailPage/JarJar.php">JarJar Binks</a>
            </div>
        </div>
        <div>
            <!--            this php piece checks to see if you are logged in or not-->
            <?php
            $isLoggedIn = false;

            if ($isLoggedIn) {
                echo '<a href="../../../WebPages/account/Profile/profile.php" class="navlinks">Profile</a>';
            } else {
                echo '<a href="../../../WebPages/account/login_signup/registration.php" class="navlinks">Login / Sign Up</a>';
            }

            ?>
        </div>
    </nav>
</header>
<div id="MainBody">
    <h1 class="detailTitle">A New Hope</h1>
    <div id="DetailGrid">
        <div class="content">
            <h2 class="paragraphTitle">CHARACTERS</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
        <div class="content">
            <img src="../../../images/movies/A%20new%20hope/anewhope.jpg">
        </div>
        <div class="content">
            <h2 class="paragraphTitle">PLOT</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
        <div class="content">
            <h2 class="paragraphTitle">RELEASE</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
        <div class="content">
            <img src="../../../images/movies/A%20new%20hope/ANewHopeCover.png">
        </div>
        <div class="content">
            <h2 class="paragraphTitle">DEVELOPMENT</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>
</body>
</html>