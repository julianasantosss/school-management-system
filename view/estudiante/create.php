<?php

require_once("c://xampp/htdocs/ColegioPOO/view/head/head.php");

?>
<div style="margin-left: 700px; margin-top:65px ;background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:20px; width: 500px">

    <form action="store.php" method="POST" autocomplete="off">
        
    <h2 style="margin-bottom:50px; margin-left:50px">Registrar Estudiante</h2>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cedula</label>
        <input type="text" name="cedula" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Curso</label>
        <select class="form-select" aria-label="Default select example"  style="width: 400px" name="grupo">
        <option selected></option>
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
        <option value="3">Tercero</option>
        <option value="4">Cuarto</option>
        <option value="5">Quinto</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefono</label>
        <input type="text" name="telefono" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="text" name="edad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" name="direccion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px">
    </div>
    
    
    <button type="submit"style="margin-left: 100px; margin-top:30px" class="btn btn-secondary">Guardar</button>
    <a class="btn btn-secondary" style="margin-left: 30px; margin-top:30px" href="index.php">Cancelar</a>
    </form>
</div>

<?php

require_once("c://xampp/htdocs/ColegioPOO/view/head/footer.php");
?>