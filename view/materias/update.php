<?php
    require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");

    $obj = new matController();
    
    $id=$_POST['id'];
    $nombre =$_POST['nombre'];
    $desc =$_POST['desc'];

    $obj->update($id, $nombre,$desc);

?>