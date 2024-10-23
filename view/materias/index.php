<?php

require_once("c://xampp/htdocs/ColegioPOO/view/head/head.php");
require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");

    $obj = new matController();
    $rows = $obj->index();
?>

<h2 style="margin-bottom:40px; margin-left:80px; margin-top:40px;">Listado de Materias</h2>
<div class="mb-3">
    <a href="../materias/create.php"  style="margin-top:2px; margin-bottom:30px; margin-left:80px;" class="btn btn-secondary"><i class="fa-solid fa-plus"></i>        Agregar nueva materia</a>
</div>
<div style="width :1500px; margin-left:80px;background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:20px" >
    <table  class="table table-striped">
        <thead>
            <tr>
                <th scope ="col">Id</th>
                <th scope ="col">Nombre</th>
                <th scope ="col">Descripción</th>
                <th scope ="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if($rows):?>
                <?php foreach($rows as $row):?>
                    <tr>
                        <th><?=$row[0] ?></th>
                        <th><?=$row[1] ?></th>
                        <th><?=$row[2] ?></th>
                        <th>
                            <a href="../materias/show.php?id=<?= $row[0] ?>" class="btn btn-secondary"> <i class="fa-regular fa-eye"></i> Ver</a>
                            <a href="../materias/edit.php?id=<?= $row[0] ?>" class="btn btn-secondary" style="margin-left:10px"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</a>
                            <!-- Button trigger modal -->
                                <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:10px"> <i class="fa-solid fa-trash"></i>  Eliminar</a>

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
                                        <a href="delete.php?id=<?= $row[0]?>" class="btn btn-secondary">Eliminar</a>                            
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </th>                     
                    </tr>
                <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td colspan="7" class="text-center">No hay registros</td>
                </tr>
            <?php endif;?>
        </tbody>
    </table>
</div>

<?php require_once("c://xampp/htdocs/ColegioPOO/view/head/footer.php"); ?>