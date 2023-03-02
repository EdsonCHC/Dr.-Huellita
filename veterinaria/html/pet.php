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
  <link rel="stylesheet" href="../css/pet.css">
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
              <form action="../php/pets.php" enctype="multipart/form-data" id="form-container" method="POST">
              <label class="btn" for="img"><b>Editar Foto</b></label>
              <input type="file" accept="image/*" id="img" onchange="vista_preliminar(event)" name="image">
              <div class="form-group margin">
                  <label for="inputAnimal" class="col-sm-2 control-label">Mascota</label>
                  <div class="col-sm-10">
                    <input list="animales" class="form-control" id="inputAnimal" name="pet">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAge" class="col-sm-2 control-label">Edad</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputAge" max="14" min="0" name="age">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputColor" class="col-sm-2 control-label">Color</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputColor" name="color">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>
                  <div class="col-sm-10">
                   <select name="sexo" id="inputSexo">
                    <option value="" selected disabled></option>
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>
                   </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputRaza" class="col-sm-2 control-label">Raza</label>
                  <div class="col-sm-10">
                    <input list="razas" class="form-control" id="inputRaza" name="raza">
                  </div>
                </div>
                <label for="submit" class="btn">Guardar</label>
                <input type="submit" id="submit">
              </form>
            </div>
        </div>
        <datalist id="razas">
            <option value="Labrador Retriever"></option>
            <option value="Pastor Alemán"></option>
            <option value="Golden Retriever"></option>
            <option value="Bulldog inglés"></option>
            <option value="Beagle"></option>
            <option value="Yorkshire Terrier"></option>
            <option value="Caniche"></option>
            <option value="Boxer alemán"></option>
            <option value="Bulldog Francés"></option>
            <option value="Rottweiler"></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </datalist>
        <datalist id="animales">
            <option value="Perro"></option>
            <option value="Gato"></option>
            <option value="Hamster"></option>
            <option value="Loro"></option>
            <option value="Perico"></option>
            <option value="Conejo"></option>
        </datalist>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
    <script src="../js/preview.js"></script>
  </body>

</html>