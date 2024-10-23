<?php

    class userModel{

        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/ColegioPOO/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function getUser($username,$password){
            $stament = $this->PDO->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
            $stament->bindParam(":username",$username);
            $stament->bindParam(":password",$password);
            $stament->execute();
            $stament = $this->PDO->prepare("SELECT FOUND_ROWS()");
            $stament->execute();
            $result = $stament->fetchColumn();
            return ($result == 1) ? true : false ;
        }

    }

?>