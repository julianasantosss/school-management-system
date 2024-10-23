<?php
    require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");

    $obj = new matController();

    $obj->delete($_GET['id']);

?>