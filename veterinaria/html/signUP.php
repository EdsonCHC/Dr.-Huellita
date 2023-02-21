<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signUp.css">
    <title>Registrase</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>

    <!-- import header -->
    <?php

    include("../html/header.php");
    ?>

    <div id="container">
        <form action="" method="post" id="formulario">
            <h1>Registrase</h1>
            <div class="field">
                <fieldset>
                    <label for="firtNames">
                        Nombres
                        <input type="text" id="firtNames" required name="names">
                    </label>
                    <label for="lastName">
                        Apellidos
                        <input type="text" id="lastNames" required name="lastNames">
                    </label>
                    <label for="numTel">
                        Numero Telefónico
                        <input type="tel"  id="numTel" required name="numTelf">
                    </label>
                    <label for="date">
                        Fecha de nacimiento
                        <input type="date"  id="date" required name="dates">
                    </label>
                   
                </fieldset>
                <fieldset>
                    <label for="selects">
                        Genero
                        <select name="genere" id="selects" required>
                            <option value="" selected disabled></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="O">Otro</option>
                            <option value="N">Prefiero no decirlo</option>
                        </select>
                    </label>
                    <label for="dui">
                        DUI
                        <input type="text" required id="dui" name="DUI">
                    </label>
                    <label for="direction">
                        Dirección
                        <input type="text" required id="direction" name="direction">
                    </label>
                    <label for="email">
                        Correo Electrónico
                        <input type="email" required id="email" name="correo">
                    </label>
                    <label for="pass">
                        Contraseña <sub>Mínimo 8 caracteres</sub>
                        <input type="password" required id="pass" name="contra">
                    </label>
                </fieldset>
            </div>
            <label for="button" id="labelS">
                Enviar
            </label>
            <input type="submit" id="button">
        </form>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html>