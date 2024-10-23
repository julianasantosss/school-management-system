<?php
    
    require_once("C://xampp/htdocs/ColegioPOO/controller/estController.php");
 
    $obj = new estController();
    
    $cedula=$_POST['cedula'];
    $nombre =$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $edad =$_POST['edad'];
    $direccion=$_POST['direccion'];
    $grupo=$_POST['grupo'];

    $obj->guardar($cedula,$nombre,$telefono,$edad,$direccion,$grupo);
    

?>