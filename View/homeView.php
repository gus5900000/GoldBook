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
            <div class="book">
                <div class="container">
                    <div class="text-pseudo">Gus</div>
                    <div class="text-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laudantium.
                    Hic dolores tempora ad fugit maiores incidunt soluta qui omnis.
                    Fuga non eaque quaerat, accusamus nobis temporibus facere quo sed!
                    </div>
                    <img src="../assets/paper.svg" alt="Image SVG" class="svg-image">
                </div>
            </div>
            <div class="book">
                <div class="container">
                    <div class="text-pseudo">Augustin</div>
                    <div class="text-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laudantium.
                    Hic dolores tempora ad fugit maiores incidunt soluta qui omnis.
                    Fuga non eaque quaerat, accusamus nobis temporibus facere quo sed!
                    </div>
                    <img src="../assets/paper.svg" alt="Image SVG" class="svg-image">
                </div>
            </div>
            <div class="book">
                <div class="container">
                <div class="text-pseudo">OUI</div>

                    <div class="text-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laudantium.
                    Hic dolores tempora ad fugit maiores incidunt soluta qui omnis.
                    Fuga non eaque quaerat, accusamus nobis temporibus facere quo sed!
                    </div>
                    <img src="../assets/paper.svg" alt="Image SVG" class="svg-image">
                </div>
            </div>
            <div class="book">
                <div class="container">
                <div class="text-pseudo">fezqfgrgdrhgdeqfrsgrg</div>

                    <div class="text-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laudantium.
                    Hic dolores tempora ad fugit maiores incidunt soluta qui omnis.
                    Fuga non eaque quaerat, accusamus nobis temporibus facere quo sed!
                    </div>
                    <img src="../assets/paper.svg" alt="Image SVG" class="svg-image">
                </div>
            </div>
        </div>
        
    </main>


    <footer>
        <?php
        //include_once("../_partiels/_footer.php")
        ?>
    </footer>
</body>
</html>