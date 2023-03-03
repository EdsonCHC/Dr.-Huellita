<?php
session_start();
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
            <form action="" method="post">
                <div class="campos">
                    <fieldset>
                        <label for="nombreP">
                            Nombre Del Dueño
                            <input type="text" />
                        </label>
                        <label for="numTel">
                            Numero de Teléfono
                            <input type="tel">
                        </label>
                        <p class="warnings" id="warnings"></p>
                    </fieldset>
                    <fieldset>
                        <label for="sint">
                            Síntomas del animal <sub>esto debe ser necesario?</sub>
                            <textarea name="síntomas" id="sint" cols="30" rows="5"></textarea>
                        </label>
                        <label for="date">
                            Seleccionar fecha
                            <input type="date">
                        </label>
                        <label for="time" class="labels">
                            Horario
                            <select name="horario" id="time">
                                <option value="" selected disable></option>
                                <option value="Mañana">Por La Mañana</option>
                                <option value="Tarde">Por la Tarde</option>
                            </select>
                        </label>
                        <p>Seleccione su mascota</p>
                        <label for="dog">
                            <input type="radio" name="animal" id="dog">
                            Perro
                        </label>
                        <label for="cat">
                            <input type="radio" name="animal" id="dog">
                            Gato
                        </label>
                        </label>
                        <label for="other">
                            <input type="radio" name="animal" id="other">
                            Gato
                        </label>
                        <label for="mascotaList" id="displayOther">
                            <input list="List" id="mascotaList">
                            <datalist id="List">
                                <option value="mascota 1"></option>
                                <option value="mascota 2"></option>
                                <option value="mascota 5"></option>
                                <option value="mascota 6"></option>
                                <option value="mascota 7"></option>
                                <option value="mascota 8"></option>
                                <option value="mascota 9"></option>
                                <option value="mascota 10"></option>
                            </datalist>
                        </label>
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
</body>

</html>