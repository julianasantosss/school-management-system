<?php

    require_once("c://xampp/htdocs/ColegioPOO/view/head/head.php");
    require_once("c://xampp/htdocs/ColegioPOO/controller/estController.php");

    $obj = new estController();
    $rows = $obj->index();
?>

<h2 style="margin-bottom:40px; margin-left:80px; margin-top:40px;">Listado de Estudiantes</h2>
<div class="mb-3">
    <a href="../estudiante/create.php" style="margin-top:2px; margin-bottom:30px; margin-left:80px;" class="btn btn-secondary"><i class="fa-solid fa-user-plus"></i>    Agregar nuevo estudiante</a>
</div>

<div style="width :1500px; margin-left:80px; background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:650px; border-radius:20px" >
    <table  class="table table-striped">
        <thead>
            <tr>
                <th scope ="col">Id</th>
                <th scope ="col">Cedula</th>
                <th scope ="col">Nombre</th>
                <th scope ="col">Grupo</th>
                <th scope ="col">Telefono</th>
                <th scope ="col">Edad</th>
                <th scope ="col">Direccion</th>
                <th scope ="col">Notas</th>
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
                        <th><?=$row[6] ?></th> 
                        <th><?=$row[3] ?></th>
                        <th><?=$row[4] ?></th>
                        <th><?=$row[5] ?></th>                        
                        <th><a href="../notas/notas_estudiante.php?id=<?= $row[0] ?>" class="btn btn-secondary"><i class="fa-solid fa-star"></i> Notas</a></th> 
                        <th>
                            <a href="../estudiante/show.php?id=<?= $row[0] ?>" class="btn btn-secondary"><i class="fa-regular fa-eye"></i> Ver</a>
                            <a href="../estudiante/edit.php?id=<?= $row[0] ?>" class="btn btn-secondary" style="margin-left:10px"><i class="fa-solid fa-arrows-rotate"></i>  Actualizar</a>
                            <!-- Button trigger modal -->
                                <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:10px"><i class="fa-solid fa-trash"></i> Eliminar</a>

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

<?php
require_once("c://xampp/htdocs/ColegioPOO/view/head/footer.php");
?>