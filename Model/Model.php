<?php
    class Model {
        private PDO $bdd;

        public function __construct() {
            try  {
                $this->bdd = new PDO('mysql:host=localhost:3306;dbname=goldbook;charset=utf8','admin','admin');
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        public function getAllMessage() {
            $sqlQuery = "SELECT * FROM message";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([]);
            $req = $statement -> fetchAll();
            return $req;
        }

        public function postMessage(int $id, string $pseudo, string $email, string $message) {
            $sqlQuery = "INSERT INTO message (id_message, pseudo, email, message) VALUES (:id, :pseudo, :email, :message)";
            $statement = $this->bdd->prepare($sqlQuery);
            $result = $statement->execute([
                ":id" => $id,
                ":pseudo" => $pseudo,
                ":email" => $email,
                ":message" => $message
            ]);
            if($result) {
                return true;
            } else {
                return false;
            }
        }

        public function checkUser(string $username, string $hashpass) {
            $sqlQuery = "SELECT * FROM `user` WHERE pseudo = :pseudo AND hashpassword = :hashpass";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([
                ":pseudo" => $username,
                ":hashpass" => $hashpass
            ]);
            $result = $statement->fetch();
            if($result) {
                return true;
            } else {
                return false;
            }
        }
        public function checkEmail(string $email) {
            $sqlQuery = "SELECT COUNT(*) FROM `user` WHERE email = :email";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([":email" => $email]);
            return $statement->fetchColumn() > 0;
        }

        public function addUser(int $id, string $pseudo, string $email , string $hashpass) {
            if ($this->checkEmail($email)) {
                return "Email déjà enregistré";
            }
            $sqlQuery = "INSERT INTO `user` (user_id, pseudo, email, hashpassword) VALUES (:id,:pseudo, :email, :hashpass)";
            $statement = $this->bdd->prepare($sqlQuery);
            $result = $statement->execute([
                ":id" => $id,
                ":pseudo" => $pseudo,
                ":email" => $email,
                ":hashpass" => $hashpass
            ]);
            if ($result) {
                return true; 
            } else {
                return false;
            }
        }

    }
?>