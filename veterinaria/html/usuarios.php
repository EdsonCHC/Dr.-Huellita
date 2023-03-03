<?php
    session_start();
    $conn =mysqli_connect('localhost', 'root','','drhuellita');
    $id = $_SESSION["user_info"][9];
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
          <img class="image" src="../img/logo.png" alt="imgUser" id="img-preview" />
          <h3 class="username text-center"><?php echo $_SESSION["user_info"][0]?> <?php echo $_SESSION["user_info"][1]?> </h3>
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
      <div class="mascotas">
        <h2>Tus Mascotas</h2>
      <?php

        $select = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `id_dueño` = $id ORDER BY id DESC");
        if($select->num_rows > 0) {
            while ($filas=mysqli_fetch_assoc($select)){
                ?>
            <div class="colum-content">
                
                <div class="pet_info">
                <div class="info">
                <img src="data:Image/*;base64, <?php echo base64_encode($filas["img"])?>" class="petImg">
                  <table>
                    <thead>
                      <tr>
                        <th><?php echo $filas["Names"]?></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td class="tittle">Mascota</td>
                      <td class="space">=</td>
                      <td><?php echo $filas["Pets"]?></td>
                    </tr>
                    <tr>
                      <td class="tittle">Edad</td>
                      <td class="space">=</td>
                      <td><?php echo $filas["Ages"]?></td>
                    </tr>
                    <tr>
                      <td class="tittle">Sexo</td>
                      <td class="space">=</td>
                      <td><?php echo $filas["Sex"]?></td>
                    </tr>
                    <tr>
                      <td class="tittle">Raza</td>
                      <td class="space">=</td>
                      <td><?php echo $filas["Raza"]?></td>
                    </tr>
                    </tbody>
                      <tfoot>
                        <tr>
                          <th>
                          <a href="../php/Del.php?id=<?php echo $filas["id"]?>" class="warning">ELIMINAR  </a><a href="../html/Update.php?id=<?php echo $filas["id"]?>" class="warning">  DATOS</a>
                          </th>
                        </tr>
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
                <?php
            }
        }else{
            ?>
            <h3 class="msg">Todavía No añades una mascota</h3>
            <?php
        }
        ?>
        </div>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
  </body>

</html>