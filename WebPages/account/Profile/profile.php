<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../Styles/MainStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="profileStyleSheet.css" rel="stylesheet" type="text/css">
    <link href="/images/lightsaber%20icon.png" type="image/icon" rel="icon">
</head>
<body>
<header>
    <h1 class="mainPageTitle">Star Wars Wiki</h1>
    <nav>
        <div><a href="../../../index.php" class="navlinks">Home</a></div>
        <div class="dropdown">
            <a href="../../Movies/movies.php" class="navButtons, navlinks">Movies</a>
            <div class="dropdown-content">
                <a href="../../Movies/DetailPage/ANewHope.php">A New Hope</a>
                <a href="../../Movies/DetailPage/RevengeOfTheSith.php">Revenge Of The Sith</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../Series/series.php" class="navButtons, navlinks">Series</a>
            <div class="dropdown-content">
                <a href="../../Series/DetailPage/CloneWars.php">The Clone Wars</a>
                <a href="../../Series/DetailPage/Rebels.php">Rebels</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="../../Characters/characters.php" class="navButtons, navlinks">Characters</a>
            <div class="dropdown-content">
                <a href="../../Characters/DetailPage/Obi-Wan.php">Obi-Wan Kenobi</a>
                <a href="../../Characters/DetailPage/JarJar.php">JarJar Binks</a>
            </div>
        </div>
        <div>
            <!--            this php piece checks to see if you are logged in or not-->
            <?php
            $isLoggedIn = true;

            if ($isLoggedIn) {
                echo '<a href="profile.php" class="navlinks">Profile</a>';
            } else {
                echo '<a href="../../../WebPages/account/login_signup/registration.php" class="navlinks">Login / Sign Up</a>';
            }

            ?>
        </div>
    </nav>
</header>
<div id="profileBody">
    <div id="profileGrid">
        <div id="bio">
            <img src="../../../images/default-placeholder.png" alt="profilePicture">
        </div>
        <div id="accountInfo">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>
</body>
</html>