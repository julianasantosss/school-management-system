<?php
    require_once("C://xampp/htdocs/ColegioPOO/controller/estController.php");

    $obj = new estController();
    $obj->delete($_GET['id']);
    
?>