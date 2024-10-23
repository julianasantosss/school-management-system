<?php

    class estModel{

        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/ColegioPOO/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($cedula, $nombre, $telefono, $edad, $direccion,$grupo){
            $stament = $this->PDO->prepare("INSERT INTO estudiantes VALUES(null, :cedula, :nombre, :telefono, :edad, :direccion, :grupo)");
            $stament->bindParam(":cedula",$cedula);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":grupo",$grupo);
            return ($stament->execute()) ? : false ;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT estudiantes.id, estudiantes.cedula, estudiantes.nombre, estudiantes.telefono, estudiantes.edad, estudiantes.direccion, grupo.nombre FROM grupo INNER JOIN estudiantes
            ON estudiantes.id_grupo = grupo.id_grupo WHERE estudiantes.id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT estudiantes.id, estudiantes.cedula, estudiantes.nombre, estudiantes.telefono, estudiantes.edad, estudiantes.direccion, grupo.nombre FROM grupo INNER JOIN estudiantes
            ON estudiantes.id_grupo = grupo.id_grupo");
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }


        public function update($id, $cedula, $nombre, $telefono, $edad, $direccion,$grupo){
            $stament = $this->PDO->prepare("UPDATE estudiantes SET cedula = :cedula, nombre= :nombre, telefono = :telefono, edad = :edad, direccion = :direccion, id_grupo = :grupo WHERE id = :id");
            $stament->bindParam(":cedula",$cedula);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":id",$id);
            $stament->bindParam(":grupo",$grupo);
            return ($stament->execute()) ? $id : false ;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM estudiantes WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false ;
        }

    }

?>