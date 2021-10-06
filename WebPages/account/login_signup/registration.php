<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../Styles/MainStyleSheet.css?" rel="stylesheet" type="text/css">
    <link href="registrationStyleSheet.css" rel="stylesheet" type="text/css">
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
            $isLoggedIn = false;

            if ($isLoggedIn) {
                echo '<a href="../../../WebPages/account/Profile/profile.php" class="navlinks">Profile</a>';
            } else {
                echo '<a href="registration.php" class="navlinks">Login / Sign Up</a>';
            }

            ?>
        </div>
    </nav>
</header>
<div id="MainBody">
    <div id="registrationGrid">
        <div id="login">
            <h1>Login</h1>
            <form name="f1" action="" id="loginForm" onsubmit="return validation()" method="post">
                <div id="loginGrid">
                <h3>Email or Username:</h3>
                <input type="text" placeholder="Email or Username" required id="user" name="user">
                <h3>Password:</h3>
                <input type="password" placeholder="Password" required id="pass" name="pass">
                </div>
                <input type="submit" id="btn" value="Login">
            </form>
        </div>
        <div id="signup">
            <h1>Registration</h1>
            <div id="signupGrid">
                <h3>Username:</h3>
                <input type="text" placeholder="Your Username" required>

                <h3>Initials:</h3>
                <input type="text" placeholder="Your Initials" required>

                <h3>Password:</h3>
                <input type="text" placeholder="Your Password" required>

                <h3>Confirm Password:</h3>
                <input type="text" placeholder="Confirm Your Password" required>

                <h3>Fullname:</h3>
                <input type="text" placeholder="Your First And First Name" required>

                <h3>Email:</h3>
                <input type="text" placeholder="Your Email Address" required>

                <h3>Favorite Character:</h3>
                <input type="text" placeholder="Your Favorite Character">

                <h3>Favorite Movie:</h3>
                <input type="text" placeholder="Your Favorite Movie">

                <h3>Favorite Serie:</h3>
                <input type="text" placeholder="Your Favorite Serie">

                <h3>Favorite Fight:</h3>
                <input type="text" placeholder="Your Favorite Fight">

                <h3>Favorite Jedi:</h3>
                <input type="text" placeholder="Your Favorite Jedi">

                <h3>Favorite Sith:</h3>
                <input type="text" placeholder="Your Favorite Sith">
            </div>
            <button>Sign up</button>
        </div>
    </div>
</div>
<script>
    function validation()
    {
        var id=document.f1.user.value;
        var ps=document.f1.pass.value;
        if(id.length=="" && ps.length=="") {
            alert("User Name and Password fields are empty");
            return false;
        }
        else
        {
            if(id.length=="") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length=="") {
                alert("Password field is empty");
                return false;
            }
        }
    }
</script>
</body>
</html>