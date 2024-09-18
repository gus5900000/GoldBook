<?php
    include_once("../Model/Model.php");
    $bdd = new Model();
    
    $message_id = htmlspecialchars($_POST["id"]);

    $bdd->deleteMessage($message_id);

    include_once("../Controller/Home.php");
?>