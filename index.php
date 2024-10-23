<?php
    require_once("../ColegioPOO/controller/userController.php");
    require_once("c://xampp/htdocs/ColegioPOO/model/userModel.php");
    
   
    if(isset($_SESSION["usuario"])){
        header('Location: ../ColegioPOO/view/index.php');
    }
?>
<?php require_once("../ColegioPOO/view/head/headUser.php"); ?>

    <div style="width: 600px; margin-left: 610px; margin-top:10px; background-color: rgba(255, 255, 255,0.738); padding:50px; margin-right:690px; border-radius:40px">
        <form action="../ColegioPOO/controller/userController.php" method="POST" autocomplete="off">
            <h1 style="margin-bottom:70px; margin-left:180px">Log In</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" name="username"   required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 480px">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 480px">
            </div>
            <button style="margin-top:30px; margin-left:130px" type="submit" name ="submit" class="btn btn-secondary">Iniciar Sesion</button>
            <button style="margin-top:30px; margin-left:30px" type="reset" class="btn btn-secondary">Cancelar</button>    
        </form>
    </div>

<?php require_once("../ColegioPOO/view/head/footer.php"); ?>
