<?php

    class matModel{

        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/ColegioPOO/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre,$desc){
            $stament = $this->PDO->prepare("INSERT INTO materias VALUES(null, :nombre, :descripcion)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":descripcion",$desc);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM materias WHERE id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM materias");
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }
        public function update($id, $nombre, $desc){
            $stament = $this->PDO->prepare("UPDATE materias SET nombre= :nombre, descripcion = :descrip WHERE id = :id");
            $stament->bindParam(":id",$id);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":descrip",$desc);
            return ($stament->execute()) ? $id : false ;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM materias WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false ;
        }

    }

?>