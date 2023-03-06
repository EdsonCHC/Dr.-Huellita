<?php
    session_start();
    $conn =mysqli_connect('localhost', 'root','','drhuellita');
    $id = $_GET['id'];
    $select = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `id` = $id");
    $filas = mysqli_fetch_assoc($select);
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
              <img class="image" src="data:Image/*;base64, <?php echo base64_encode($filas["img"])?>" alt="imgUser" id="img-preview" />
              <form action="../php/Upt.php?id=<?php echo $filas["id"]?>" enctype="multipart/form-data" id="form-container" method="POST">
              <label class="btn" for="archivo"><b>Editar Foto</b>
              <input type="file" accept=".jpg, .png" id="archivo" onchange="vista_preliminar(event), validar()" name="image" required>
            </label>
              <p class="warningss" id="warnings6"></p>
              
              <div class="form-group margin">
                  <label for="inputAnimal" class="col-sm-2 control-label">Mascota</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputAnimal" name="pet" readonly value="<?php echo $filas["Pets"] ?>" required>
                  </div>
                  <p class="warnings" id="warnings"></p>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="<?php echo $filas["Names"] ?>" required>
                  </div>
                  <p class="warnings" id="warnings2"></p>
                </div>
                <div class="form-group">
                  <label for="inputAge" class="col-sm-2 control-label">Edad</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputAge" max="14" min="1" name="age" placeholder="<?php echo $filas["Ages"] ?>" required>
                  </div>
                  <p class="warnings" id="warnings3"></p>
                </div>
                <div class="form-group">
                  <label for="inputColor" class="col-sm-2 control-label">Color</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputColor" name="color" placeholder="<?php echo $filas["Color"] ?>" required>
                  </div>
                  <p class="warnings" id="warnings4"></p>
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
                    <input list="razas" class="form-control" id="inputRaza" name="raza" placeholder="<?php echo $filas["Raza"] ?>" required>
                  </div>
                  <p class="warnings" id="warnings5"></p>
                </div>
                <label for="submit" class="btn">Guardar</label>
                <input type="submit" id="submit">
              </form>
            </div>
        </div>
        <datalist id="razas">
          <option value="Desconocida"></option>
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
            <option value="Persa"></option>
            <option value="Azul ruso"></option>
            <option value="Siamés"></option>
            <option value="Angora turco"></option>
            <option value="Siberiano"></option>
            <option value="Maine Coon"></option>
            <option value="Bengalí"></option>
            <option value="Enano de china"></option>
            <option value="Enano ruso"></option>
            <option value="Enano Campbell"></option>
            <option value="Enano Roborowski"></option>
            <option value="Psittacoidea"></option>
            <option value="Cacatuoidea"></option>
            <option value="Strigopoidea"></option>
            <option value="Periquitos"></option>
            <option value="Cotorras"></option>
            <option value="Papagayos"></option>
            <option value="Amazonas"></option>
            <option value="Guacamayos"></option>
            <option value="Enano o Toy"></option>
            <option value="Belier"></option>
            <option value="Hotot"></option>
            <option value="Gigante de Flandes"></option>
            <option value="Tortuga del bosque"></option>
            <option value="Tortuga rusa"></option>
            <option value="Tortuga pintada"></option>
            <option value="Tortuga de orejas rojas"></option>
            <option value="Tortuga de caja de florida"></option>
            <option value="Tortuga de orejas amarillas"></option>
            <option value="Tortuga de cumberland"></option>
            <option value="Tortuga mapa"></option>
            <option value="Pez betta"></option>
            <option value="Pez payaso"></option>
            <option value="Pez ángel"></option>
            <option value="Pez goldfish"></option>
            <option value="Pez guppy"></option>
            <option value="Pez platy"></option>
            <option value="Pez Barbo rosado"></option>
        </datalist>
        <datalist id="animales">
            <option value="Perro"></option>
            <option value="Gato"></option>
            <option value="Hamster"></option>
            <option value="Loro"></option>
            <option value="Conejo"></option>
            <option value="Tortuga"></option>
            <option value="Pez"></option>
            <option value="Iguana"></option>
        </datalist>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
    <script src="../js/preview.js"></script>
    <script src="../js/valPet.js"></script>
  </body>

</html>