<?php
    
require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");
 
    $obj = new matController();

    $nombre =$_POST['nombre'];
    $desc =$_POST['desc'];

    $obj->guardar($nombre,$desc);
    

?>