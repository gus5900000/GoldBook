<header class="header">
    <div class="header-top">
        <div class="header-logo">
            <img src="../assets/logo.png" alt="Logo" id="logo">
        </div>
        <div class="header-titre">
            <h1>GoldBook</h1>
        </div>
        <?php
        if(isset($_SESSION['username'])) {
            ?>
            <div class="header-login">
                <a href="../Controller/Profile.php" class="button-login">Profile</a>
            </div>
        <?php
        } else {
        ?>
            <div class="header-login">
                <a href="../View/loginView.php" class="button-login">Login</a>
            </div>
            <?php
        }
        ?>
    </div>

</header>