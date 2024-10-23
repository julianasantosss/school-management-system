<?php
    require_once("../head/head.php");
    require_once("C://xampp/htdocs/ColegioPOO/controller/estController.php");
    
    $obj = new estController();
    $estudiante = $obj->show($_GET['id']);
?>

<div style="margin-left: 650px; margin-top:50px ; margin-bottom:50px">

    <form action="update.php" method="POST" autocomplete="off" style="background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:40px">

        <h2 style="margin-bottom:50px; margin-left:150px;">Modificar Registro</h2>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $estudiante[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Cedula</label>
            <input type="text" name="cedula"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px " value="<?= $estudiante[1]?>">
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $estudiante[2]?>">
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Curso</label>
            <select class="form-select" aria-label="Default select example"  style="width: 400px" name="grupo">
            <option selected></option>
            <option <?php echo $estudiante[6]== 'Primero'? "selected='selected'":"" ?> value="1">Primero</option>
            <option <?php echo $estudiante[6]== 'Segundo'? "selected='selected'":"" ?> value="2">Segundo</option>
            <option <?php echo $estudiante[6]== 'Tercero'? "selected='selected'":"" ?> value="3">Tercero</option>
            <option <?php echo $estudiante[6]== 'Cuarto'? "selected='selected'":"" ?> value="4">Cuarto</option>
            <option <?php echo $estudiante[6]== 'Quinto'? "selected='selected'":"" ?> value="5">Quinto</option>
            </select>
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $estudiante[3]?>">
        </div>
        <div class="mb-3 row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Edad</label>
            <input type="text" name="edad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $estudiante[4]?>">
        </div>
        <div class="mb-3 row">
           <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 400px" value="<?= $estudiante[5]?>">
        </div>

        <input type="submit" style="margin-left:150px; margin-top:40px" class="btn btn-secondary" value="Actualizar">
        <a class="btn btn-secondary" style="margin-left:80px; margin-top:40px" href="index.php?id=<?= $estudiante[0]?>">Cancelar</a>
  
    </form>
</div>
<?php
    require_once("../head/footer.php");
?>