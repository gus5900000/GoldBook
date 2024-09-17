<?php
    session_start();
    include_once("../Model/Model.php");
    $pseudo = $_POST["username"];
    $email = $_POST["user_mail"];
    $message= $_POST["message"];
    $id = mt_rand(1, 100000000);

    $bdd = new Model();

    $result = $bdd->postMessage($id,$pseudo,$email,$message);

    if ($result) {
        header("location: ../Controller/home.php?message=succes");
    } else {
        header("location: ../Controller/home.php?message=deny");
    }
?>