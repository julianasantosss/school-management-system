<?php

require_once("C://xampp/htdocs/ColegioPOO/model/notasModel.php");

$obj = new notasModel();

$puntaje=$_POST['puntaje'];
$id_estudiante = $_POST['id_estudiante'];
$id_materia =  $_POST['id_materia'];

$obj->insertar($id_estudiante, $id_materia, $puntaje);
header("Location: notas_estudiante.php?id=" .$id_estudiante);

?>
