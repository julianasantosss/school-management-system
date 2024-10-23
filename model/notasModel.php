<?php

class notasModel{

    private $PDO;

    public function __construct(){
        require_once("c://xampp/htdocs/ColegioPOO/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($id_estudiante, $id_materia, $puntaje){
        // La eliminamos en caso de que exista alguna nota
        $this->eliminar($id_estudiante, $id_materia);
        // Y se inserta:     
        $stament = $this->PDO->prepare("INSERT INTO notas_est_materias VALUES(null, :id_estudiante, :id_materia, :puntaje)");
        $stament->bindParam(":id_estudiante",$id_estudiante);
        $stament->bindParam(":id_materia",$id_materia);
        $stament->bindParam(":puntaje",$puntaje);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        
    }
  
    public  function show($id_estudiante){  
        global $mysqli;
        $stament = $mysqli->prepare("SELECT * FROM notas_est_materias WHERE id_estudiante = ?");
        $stament->bind_param("i",$id_estudiante);
        $stament->execute();
        $resultado = $stament->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function combinar($materias, $notas){
        for ($x = 0; $x < count($materias); $x++) {
            $materias[$x]["puntaje"] = self::getCalificacion($notas, $materias[$x]["id"]);
        }
        return $materias;
    }

    private static function getCalificacion($notas, $id_materia){
        foreach ($notas as $nota) {
            if (intval($nota["id_materia"]) === intval($id_materia)) {
                return $nota["puntaje"];
            }
        }
        return 0;
    }

    public function eliminar($id_estudiante, $id_materia){
        $stament = $this->PDO->prepare("DELETE FROM notas_est_materias WHERE id_estudiante = :id_estudiante AND id_materia = :id_materia");
        $stament->bindParam(":id_estudiante",$id_estudiante);
        $stament->bindParam(":id_materia",$id_materia);
        return ($stament->execute()) ? true : false ;
    }
}
?>