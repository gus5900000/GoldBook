<?php
    session_start();
    include_once("../Model/Model.php");

    $username = htmlspecialchars($_POST["username"]);
    $password = hash('sha256', htmlspecialchars($_POST["password"]));
    $bdd = new Model();

    $result = $bdd->checkUser($username, $password);
    $email = $bdd->getEmailUser($username, $password);
    $role = $bdd->getRoleUser($email);

    if($result) {
        $_SESSION["role"] = $role;
        $_SESSION["username"] = $username;
        header("location: ../Controller/home.php");
    } else {
        header("location: ../View/loginView.php?message=deny");
    }

    include_once("../View/loginView.php");
?>