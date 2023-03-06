<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
$id = $_SESSION["user_info"][9];
if(!isset($_SESSION["user_info"])){
    header("Location: ../html/Login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinaria Dr. Huellita</title>
    <link rel="stylesheet" href="../css/citas.css">
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>
    <!-- import header -->
    <?php

    include("../html/header.php");
    ?>

    <main>
        <div id="cita">
            <h1>Realice su cita</h1>
            <form action="../php/citas.php?id=<?php echo $id?>" method="post">
                <div class="campos">
                    <fieldset>
                        <label for="sint">
                            Síntomas del animal <sub>O razon por la cual realiza la cita</sub>
                            <textarea name="síntomas" id="sint" cols="30" rows="5" required></textarea>
                        </label>
                        <label for="date">
                            Seleccionar fecha
                            <input type="date" name="fecha" required>
                        </label>
                        <label for="time" class="labels" required>
                            Horario
                            <select name="horario" id="time" required>
                                <option value="" selected disable ></option>
                                <option value="Por la Mañana">Por La Mañana</option>
                                <option value="Por la Tarde">Por la Tarde</option>
                            </select>
                        </label>
                        <p>Seleccione su mascota</p>
                        <select name="mascotas" id="pets">
                            <option value="" selected disable></option>
                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `id_dueño` = $id ORDER BY id DESC");
                                if ($select->num_rows > 0) {
                                    while ($filas = mysqli_fetch_assoc($select)) {
                            ?>
                            <option value="<?php echo $filas["Names"] ?>"><?php echo $filas["Names"] ?></option>
                            <?php
                                    }
                                } else {
                            ?>
                                <h3 class="msg">Todavía No añades una mascota</h3>
                            <?php
                            }
                            ?>
                        </select>
                    </fieldset>
                </div>
                <label for="button" id="labelS">
                    Enviar
                </label>
                <input type="submit" id="button">
            </form>
        </div>
    </main>

    <!-- import footer -->
    <?php
        include('../html/footer.php');
    ?>
    
    <script src="../js/toggle.js"></script>
    <script src="../js/valCita.js"></script>
</body>

</html>