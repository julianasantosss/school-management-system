<?php
    require_once("../head/head.php");
    require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");
    
    $obj = new matController();
    $materia = $obj->show($_GET['id']);
?>
<div style="margin-left: 600px; margin-top:120px ; margin-bottom:50px; background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:40px">

    <form action="update.php" method="POST" autocomplete="off">

        <h2 style="margin-bottom:50px; margin-left:150px">Modificar Registro  </h2>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $materia[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" style="margin-right: 10px;"  class="col-sm-2 col-form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $materia[1]?>">
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1"  style="margin-right: 10px;" class="col-sm-2 col-form-label">Descripción  </label>
            <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $materia[2]?>">
        </div>
        <input type="submit" style="margin-left:150px; margin-top:40px" class="btn btn-secondary" value="Actualizar">
        <a class="btn btn-secondary" style="margin-left:80px; margin-top:40px" href="index.php?id=<?= $materia[0]?>">Cancelar</a>
    </form>
</div>
<?php
    require_once("../head/footer.php");
?>