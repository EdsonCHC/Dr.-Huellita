<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clínica Veterinaria Dr. Huellita</title>
  <link rel="stylesheet" href="../css/usuarios.css">
  <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>
  <!-- import header aqui -->
  <?php

  include("../html/header.php");
  ?>
  <body>
    <main>
      <div class="container">
        <div class="left box-primary">
          <img class="image" src="../img/logo.png" alt="" />
          <h3 class="username text-center"><?php echo $_SESSION["user_info"][0]?> <?php echo $_SESSION["user_info"][1]?> </h3>
          <a href="#" class="btn"><b>Editar foto</b></a>
        </div>
        <div class="right tab-content">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Nombres</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" readonly value="<?php echo $_SESSION["user_info"][0]?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputApellido" class="col-sm-2 control-label">Apellidos</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputApellido" readonly value="<?php echo $_SESSION["user_info"][1]?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" readonly value="<?php echo $_SESSION["user_info"][2]?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputGender" class="col-sm-2 control-label">Genero</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputGender" readonly value="<?php echo $_SESSION["user_info"][3]?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputTel" class="col-sm-2 control-label">Numero Telefónico</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputTel" readonly value="<?php echo $_SESSION["user_info"][4]?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDate" class="col-sm-2 control-label">Fecha De Nacido</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDate" readonly value="<?php echo $_SESSION["user_info"][5]?>">
              </div>
              </div>
            <div class="form-group">
              <label for="inputDui" class="col-sm-2 control-label">DUI</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputDui" readonly value="<?php echo $_SESSION["user_info"][6]?>">
              </div>
              </div>
            <div class="form-group">
              <label for="inputDirect" class="col-sm-2 control-label">Dirección</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDirect" readonly value="<?php echo $_SESSION["user_info"][7]?>">
              </div>
              </div>
            <div class="form-group">
              <label for="inputPass" class="col-sm-2 control-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPass" readonly value="<?php echo $_SESSION["user_info"][8]?>">
                <p class="add">La contraseña y el Dui fueron alterados en la base de datos por la seguridad de sus datos</p>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
  </body>

</html>