<?php

    class estController{

        private $model;

        public function __construct(){
            
            require_once("c://xampp/htdocs/ColegioPOO/model/estModel.php");
            $this-> model = new estModel();
        }
        
        public function guardar($cedula, $nombre, $telefono, $edad, $direccion,$grupo){
            $id = $this->model->insertar($cedula, $nombre, $telefono, $edad, $direccion,$grupo);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php")  ;
        }
        public function show($id){
            return ($this->model->show($id)!= false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $cedula, $nombre, $telefono, $edad, $direccion,$grupo){
            return ($this->model->update($id, $cedula, $nombre, $telefono, $edad, $direccion,$grupo)!= false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }

    }
?>
