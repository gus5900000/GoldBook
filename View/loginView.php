<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include_once("../_partiels/_head.php")
    ?>
    <link href="../style/login.css" rel="stylesheet">   
</head>

<body>

    <main>
        <section class="container">
            <div class="login-container">
                <div class="homeImg">
                     <a href="../Controller/Home.php"><img src="../assets/homeIcon.svg" alt=""></a>
                </div>
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                    <h1 class="opacity">LOGIN</h1>
                    <form action="../Controller/Login.php" method="POST" >
                        <input type="text" placeholder="USERNAME" name="username"/>
                        <input type="password" placeholder="PASSWORD" name="password"/>
                        <button class="opacity" type="submit">Envoyer</button>
                    </form>
                    <div class="register-forget opacity">
                        <a href="../View/registerView.php">REGISTER</a>
                        <a href="#">MOT DE PASSE OUBLIÉ</a>
                    </div>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </main>

    <footer>
        <?php
        //include_once("../_partiels/_footer.php")
        ?>
    </footer>