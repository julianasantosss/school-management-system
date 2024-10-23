<?php
    //Recibimos el cerrar sesión y redirigimos:
    if(isset($_POST['cerrarSesion'])){
        unset($_SESSION['usuario']);
        header('Location: /ColegioPOO/index.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../css/estilos.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Colegio</title>
        <link rel="shortcut icon" href="../css/icon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       
        <script src="https://kit.fontawesome.com/3fdbe3ae86.js" crossorigin="anonymous"></script>
    </head>
    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-light" style="background-color:rgba(252,243,238,255); padding:10px ;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
                    <div class="container-fluid" style="height: 50px;">
                        <a class="navbar-brand" href="index.php"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item" style=" margin-left: 80px;">
                                <a class="nav-link" href="/ColegioPOO/view/index.php" ><i class="fa-solid fa-gear"></i>  Control de estudiantes</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link"  href="/ColegioPOO/view/estudiante/index.php"  style=" margin-left: 40px;"><i class="fa-solid fa-user"></i>   Estudiantes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="/ColegioPOO/view/materias/index.php"  style=" margin-left: 40px;"><i class="fa-solid fa-folder"></i>   Materias</a>
                            </li>
                            <li class="nav-item dropdown">   
                                <a style=" margin-left: 40px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Más Opciones
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here  </a></li>
                                </ul>
                            </li>
                                                
                           
                            <li class="nav-item"  style="margin-left: 900px;">                         
                                <form action="" method="POST">
                                    <button class="btn btn-outline-secondary" name="cerrarSesion" ><i class="fa-solid fa-right-to-bracket"></i>   Cerrar Sesion</button>
                                </form>
                            </li>   
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container-fluid">
        </nav>