<?php

    class matController{

        private $model;

        public function __construct(){
            
            require_once("c://xampp/htdocs/ColegioPOO/model/matModel.php");
            $this-> model = new matModel();
        }
        
        public function guardar($nombre,$desc){
            $id = $this->model->insertar($nombre,$desc);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php")  ;
        }

        public function show($id){
            return ($this->model->show($id)!= false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre,$desc){
            return ($this->model->update($id, $nombre, $desc)!= false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }

    }
?>