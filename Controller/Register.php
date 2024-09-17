<?php
    session_start();
    include_once("../Model/Model.php");

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = hash('sha256', htmlspecialchars($_POST["password"]));
    $id = mt_rand(1, 100000000);

    $bdd = new Model();

    $result = $bdd->addUser($id, $username, $email, $password);

    if($result) {
        $_SESSION["username"] = $username;
        header("location: ../Controller/home.php?message=succes");
    } else {
        header("location: ../View/registerView.php?message=$result");
    }

?>