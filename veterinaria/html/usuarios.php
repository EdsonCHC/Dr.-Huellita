<?php
session_start();
if(!isset($_SESSION["user_info"])){
  header("Location: ../html/index.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
$id = $_SESSION["user_info"][9];
$numero = 1;
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
        <div class="right tab-content">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Nombres</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" readonly
                  value="<?php echo $_SESSION["user_info"][0] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputApellido" class="col-sm-2 control-label">Apellidos</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputApellido" readonly
                  value="<?php echo $_SESSION["user_info"][1] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" readonly
                  value="<?php echo $_SESSION["user_info"][2] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputGender" class="col-sm-2 control-label">Genero</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputGender" readonly
                  value="<?php echo $_SESSION["user_info"][3] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputTel" class="col-sm-2 control-label">Numero Telefónico</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputTel" readonly
                  value="<?php echo $_SESSION["user_info"][4] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDate" class="col-sm-2 control-label">Fecha De Nacido</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDate" readonly
                  value="<?php echo $_SESSION["user_info"][5] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDui" class="col-sm-2 control-label">DUI</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputDui" readonly
                  value="<?php echo $_SESSION["user_info"][6] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDirect" class="col-sm-2 control-label">Dirección</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDirect" readonly
                  value="<?php echo $_SESSION["user_info"][7] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPass" class="col-sm-2 control-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPass" readonly
                  value="<?php echo $_SESSION["user_info"][8] ?>">
                <p class="add">La contraseña y el Dui fueron alterados en la base de datos por la seguridad de sus datos
                </p>
              </div>
            </div>
        </div>
        </form>
      </div>
      </div>
      <div class="mascotas">
        <div class="colum-content">
          <h2>Tus Mascotas</h2>
          <?php

          $select = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `id_dueño` = $id ORDER BY id DESC");
          if ($select->num_rows > 0) {
            while ($filas = mysqli_fetch_assoc($select)) {
              ?>
              <div class="pet_info">
                <div class="info">
                  <img src="data:Image/*;base64, <?php echo base64_encode($filas["img"]) ?>" class="petImg">
                  <table>
                    <thead>
                      <tr>
                        <th>
                          <?php echo $filas["Names"] ?>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tittle">Mascota</td>
                        <td class="space">=</td>
                        <td>
                          <?php echo $filas["Pets"] ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="tittle">Edad</td>
                        <td class="space">=</td>
                        <td>
                          <?php echo $filas["Ages"] ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="tittle">Sexo</td>
                        <td class="space">=</td>
                        <td>
                          <?php echo $filas["Sex"] ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="tittle">Raza</td>
                        <td class="space">=</td>
                        <td>
                          <?php echo $filas["Raza"] ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="funcs">
                    <a href="../php/Del.php?id=<?php echo $filas["id"] ?>" class="warning">ELIMINAR </a>
                    <a href="../html/Update.php?id=<?php echo $filas["id"] ?>" class="warning">EDITAR</a>
                    <a href="../html/historiaPet.php?id=<?php echo $filas["id"] ?>" class="warning">HISTORIAL</a>
                  </div>
                </div>
              </div>
              <?php
            }
          } else {
            ?>
            <h3 class="msg">Todavía No añades una mascota</h3>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="citas">
        <h2>Tus Citas</h2>
        <table id="tableCita">
          <tr>
            <td>#</td>
            <td>Fecha</td>
            <td>Mascota</td>
            <td>Horario</td>
            <td>Motivo</td>
            <td>ELIMINAR</td>
          </tr>
          <?php

          $cita = mysqli_query($conn, "SELECT * FROM `cita` WHERE `id_user` = $id ORDER BY id ASC");
          if ($cita->num_rows > 0) {
            while ($citas = mysqli_fetch_assoc($cita)) {
              ?>
                <tr>
                  <td><?php echo $numero ?></td>
                  <td><?php echo $citas["Fecha"] ?></td>
                  <td><?php echo $citas["Pet"] ?></td>
                  <td><?php echo $citas["Horario"] ?></td>
                  <td><?php echo $citas["Descripcion"] ?></td>
                  <td><a class="Del" href="../php/DelCita.php?id=<?php echo $citas["id"] ?>">ELIMINAR</a></td>
                </tr>
            <?php
            $numero ++;
            }
          } else {
            ?>
            <h3 class="msg">No tienes citas programadas</h3>
            <?php
          }
          ?>
       </table>
      </div>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
  </body>

</html>