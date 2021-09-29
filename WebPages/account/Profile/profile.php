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
            <div class="content" id="accountbio">
                <img src="../../../images/default-placeholder.png" alt="profilePicture">
                <h3>Username-placeholder</h3>
                <p id="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>
        <div id="accountInfo">
            <div class="content">
                <div id="short_data">
                    <div class="accountData">
                        <h3 class="dataName">Username: </h3>
                        <h3 class="userData">Placeholder</h3>
                    </div>
                    <div class="accountData">
                        <h3 class="dataName">Initials: </h3>
                        <h3 class="userData">placeholder</h3>
                    </div>
                    <div class="accountData">
                        <h3 class="dataName">Password: </h3>
                        <div>
                            <input class="userData" id="password" typeof="password" readonly value="placeholder">
                            <button class="togglePassword" onclick="togglePassword()"><img src="../../../images/toggle_password.png" style="max-width: 20px"></button>
                        </div>
                    </div>
                    <div class="accountData">
                        <h3 class="dataName">Full name: </h3>
                        <h3 class="userData">placeholder</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function togglePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
</body>
</html>