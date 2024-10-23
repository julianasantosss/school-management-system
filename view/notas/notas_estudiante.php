<?php
    require_once("../head/head.php");
    require_once("C://xampp/htdocs/ColegioPOO/controller/estController.php"); 
    require_once("C://xampp/htdocs/ColegioPOO/model/notasdb.php");  
    require_once("C://xampp/htdocs/ColegioPOO/model/notasModel.php");
    require_once("C://xampp/htdocs/ColegioPOO/controller/matController.php");
    
    $objest = new estController();
    $estudiante = $objest->show($_GET['id']);

    $objm = new matController();
    $materias = $objm->index();
  
    $objnotas = new notasModel();
    $notas = $objnotas->show($estudiante[0]);

    $objnotas2 = new notasModel();
    $materiasConCalificacion= $objnotas2->combinar($materias, $notas);

?>

<div class="row" >
    <div class="col-12">
        <h2 style="margin-bottom:40px; margin-left:400px; margin-top:40px;">Notas de <?php echo $estudiante[2] ?></h2>
    </div>
    <div class="col-12 table-responsive"  style="width :800px; margin-left:400px; background-color:rgba(255, 255, 255,0.738); padding:50px; padding-left:100px; border-radius:20px">
        <table class="table">
            <thead >
                <tr>
                    <th>Materia</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sumatoria = 0;
                foreach ($materiasConCalificacion as $materia) {
                    $sumatoria += $materia["puntaje"];
                ?>
                    <tr>
                        <td>
                            <?php echo $materia["nombre"] ?>
                        </td>
                        <td>
                            <form action="modificar_nota.php" method="POST" class="form-inline">
                                <input type="hidden" value="<?php echo $estudiante[0]?>" name="id_estudiante">
                                <input type="hidden" value="<?php echo $materia["id"] ?>" name="id_materia">
                                <input value="<?php echo $materia["puntaje"] ?>" required min="0" name="puntaje" placeholder="Escriba la calificación" type="number" class="form-control" style="width :400px;">
                                <button style="margin-bottom:10px; margin-top:10px;" class="btn btn-success mx-2">Guardar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Promedio</td>
                    <td>
                    <strong>
                        <?php
                        $promedio = $sumatoria / count($materias);
                        echo number_format($promedio, 2);
                        ?>
                    </strong>

                    </td>
                </tr>
            </tfoot>
        </table>
        <a href="../estudiante/index.php"  class="btn btn-secondary" style="margin-top:30px; margin-left:10px;"><i class="fa-solid fa-share"></i>  Regresar</a>
    </div>
  </div>
  
<?php

require_once("../head/footer.php");

?>