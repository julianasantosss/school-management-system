<?php
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            if(empty($username || empty($password))){
                echo '<script type="text/javascript">
                alert("Porfavor, Ingrese un usuario y/o contraseña");
                window.location.href="../index.php";
                </script>';

            }else{

                require_once("c://xampp/htdocs/ColegioPOO/model/userModel.php");
                $model = new userModel();
                if($model->getUser($username, $password)){
                    session_start();
                    $_SESSION['usuario'] = $username;
                    header('Location: ../view/index.php');
                }else{
                    echo '<script type="text/javascript">
                    alert("Usuario no encontrado");
                    window.location.href="../index.php"; 
                    </script>';
                }
            }

        }

    
?>