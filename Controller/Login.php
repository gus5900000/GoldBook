<?php
    session_start();
    include_once("../Model/Model.php");

    $username = htmlspecialchars($_POST["username"]);
    $password = hash('sha256', htmlspecialchars($_POST["password"]));
    $bdd = new Model();

    $result = $bdd->checkUser($username, $password);
    
    if($result) {
        $_SESSION["username"] = $username;
        header("location: ../Controller/home.php?message=succes");
    } else {
        header("location: ../View/loginView.php?message=deny");
    }

    include_once("../View/loginView.php");
?>