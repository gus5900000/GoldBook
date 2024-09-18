<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="../style/profile.css" rel="stylesheet">   
    <?php
        include_once("../_partiels/_head.php")
        ?>
</head> 
<body>
    <header>
        <?php
        include_once("../_partiels/_header.php");
        ?>
        <div class="header-bottom">
            <div class="header-bottom-img">
                <div class="header-bottom-texte">
                    <h1>Profile</h1>
                </div>
                <div class="header-bottom-button">
                    <a href="../Controller/home.php" class="button-form">Home</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="profile-menu">
            <h1>Pseudo</h1>
            <h2>Rôle</h2>
            <p>Paramètre</p>
            <a href="../Controller/Logout.php" class="button-logout">Déconnexion</a>
        </div>
        <div class="profile-content">
            <h1>Pseudo</h1>
            <h2>Rôle</h2>
            <p>Paramètre</p>
            <a href="../Controller/Logout.php" class="button-logout">Déconnexion</a>
        </div>
    </main>
<footer>
        <?php
        //include_once("../_partiels/_footer.php")
        ?>
    </footer>
</body>
</html>