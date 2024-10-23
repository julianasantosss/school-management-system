<?php
    //Recibimos el cerrar sesión y redirigimos:
    session_start();
?>

<?php if(isset($_SESSION['usuario'])){ ?>

    <?php require_once("../view/head/head.php"); ?>

    <link rel="stylesheet" href="../view/css/estilos.css">

    <div style="background-color:rgba(255, 255, 255,0.738); padding:40px; margin-right:650px; width: 990px; margin-top:130px; margin-left:400px; border-radius:40px">
        <h2 style="margin-bottom:40px; margin-left:110px; margin-top:10px;">Bienvenido <?php echo '<strong>'.$_SESSION['usuario'].'</strong>' ?>, al Sistema de Gestión Escolar</h2>
        <h3 style="margin-bottom:40px; margin-left:300px; margin-top:40px;">Porfavor, eliga una opcion</h3>

        <a href="../view/estudiante/create.php" style="margin-bottom:10px; margin-left:100px; margin-top:10px; width: 170px" class ="btn btn-secondary" ><i class="fa-solid fa-user-plus"></i>    Agregar nuevo estudiante</a>
        <a href="../view/materias/create.php" style="margin-bottom:10px; margin-left:100px; margin-top:10px; width: 170px" class ="btn btn-secondary"><i class="fa-solid fa-plus"></i>        Agregar nueva materia</a>
        <a href="../ColegioPOO/view/profesor/create.php" style="margin-bottom:10px; margin-left:100px; margin-top:10px; width: 170px" class ="btn btn-secondary"><i class="fa-solid fa-chalkboard-user"></i>        Agregar nuevo profesor</a>
    </div>

    <?php
    require_once("../view/head/footer.php");
    ?>

<?php } else{
    header('Location: ../index.php');

} ?>