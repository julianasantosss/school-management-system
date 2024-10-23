<?php

require_once("c://xampp/htdocs/ColegioPOO/view/head/head.php");

?>
<div style="width: 600px; margin-left: 610px; margin-top:80px; background-color: rgba(255, 255, 255,0.738); padding:50px; margin-right:690px; border-radius:40px">

    <form action="store.php" method="POST" autocomplete="off">
        <h2 style="margin-bottom:70px; margin-left:100px">Registrar Materia</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 480px">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" name="desc" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 480px">
        </div>
        <button style="margin-top:30px; margin-left:130px" type="submit" class="btn btn-secondary">Guardar</button>
        <a class="btn btn-secondary" style="margin-top:30px; margin-left:30px"  href="index.php">Cancelar</a>
    </form>
</div>

<?php require_once("c://xampp/htdocs/ColegioPOO/view/head/footer.php"); ?>