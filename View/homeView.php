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
                    <h1>Livre d'or</h1>
                    <p>Ce site permet de publier un message qui sera visible par les autres utilisateurs</p>
                </div>
                <div class="header-bottom-button">
                    <a href="../View/formView.php" class="button-form">Poster un message</a>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <div class="book-grid">
        <?php
            foreach($commentList as $comment) {
            ?>
                <div class="book">
                    <div class="container">
                        <div class="text-pseudo"><?=  $comment["pseudo"] ?></div>
                        <div class="text-desc">
                        <?= $comment["message"]?>
                        </div>
                        <img src="../assets/paper.svg" alt="Image SVG" class="svg-image">

                        <?php if($_SESSION['role'] == 'admin') {
                            ?>
                        <form action="../Controller/Admin.php" method="POST">
                            <input type="hidden" name="id" value="<?= $comment["id_message"] ?>">
                            <input type="submit" class="btn-admin" value="Supprimé"></input>
                        </form>
                        <?php } ?>
                        
                    </div>
                </div>
            <?php
            }
        ?>
        </div>
    </main>


    <footer>
        <?php
        //include_once("../_partiels/_footer.php")
        ?>
    </footer>
</body>
</html>