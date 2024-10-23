<?php
    require_once("../head/head.php");
    require_once("C://xampp/htdocs/ColegioPOO/controller/estController.php");
    
    $obj = new estController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center" style="margin-top:40px; margin-bottom:40px;">Detalles del registro</h2>

<center>
<div style="width :1700px" >
    <table  class="table table-striped" style="background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:10px">
        <thead>
            <tr>
                <th scope ="col">Id</th>
                <th scope ="col">Cedula</th>
                <th scope ="col">Nombre</th>
                <th scope ="col">Grupo</th>
                <th scope ="col">Telefono</th>
                <th scope ="col">Edad</th>
                <th scope ="col">Direccion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?= $date[0]?></td>
                <td scope="col"><?= $date[1]?></td>
                <td scope="col"><?= $date[2]?></td>
                <td scope="col"><?= $date[6]?></td>
                <td scope="col"><?= $date[3]?></td>
                <td scope="col"><?= $date[4]?></td>
                <td scope="col"><?= $date[5]?></td>
            </tr>
        </tbody>
    </table>
</div>
</center>
<div class="pb-3" >
    <a href="index.php"  class="btn btn-secondary" style="margin-top:40px; margin-left:100px;"><i class="fa-solid fa-share"></i>  Regresar</a>
    <a href="index.php?id=<?= $date[0]?>" class="btn btn-secondary" style="margin-top:40px;  margin-left:10px"><i class="fa-solid fa-arrows-rotate"></i>  Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:40px;  margin-left:10px"> <i class="fa-solid fa-trash"></i>  Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recupera el registro
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date[0]?>" class="btn btn-secondary">Eliminar</a>     
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once("../head/footer.php");
?>