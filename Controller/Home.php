<?php
    session_start();
    include_once("../Model/Model.php");
    $bdd = new Model();

    $commentList = $bdd->getAllMessage();
    include_once("../View/homeView.php");
?>