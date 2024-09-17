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
    }
?>