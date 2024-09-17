<!DOCTYPE html>
<html lang="fr">

<head>
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
                    <h1>Formulaire</h1>
                    <p>Ecris un message pour qu’il soit visible par tous</p>
                </div>
                <div class="header-bottom-button">
                    <a href="../View/homeView.php" class="button-form">Home</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <form action="../Controller/Submit.php" method="POST" class="form-book">
            <ul>
                <li>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="username" placeholder="Votre nom" />
                </li>
                <li>
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" placeholder="Votre email" />
                </li>
                <li>
                    <label for="msg">Message</label>
                    <textarea id="msg" name="message" placeholder="Votre message..."></textarea>
                </li>
            </ul>
            <div>
                <button class="button-form" type="submit">Envoyer le message</button>
            </div>
        </form>
    </main>


    <footer>
        <?php
        //include_once("../_partiels/_footer.php")
        ?>
    </footer>
</body>

</html>