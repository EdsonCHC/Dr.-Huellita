<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>

    <!-- import header -->
    <?php

    include("../html/header.php");
    ?>

    <div id="container">
        <form action="../php/login.php" method="post">
            <h1>Iniciar Sesion <span id="point">´</span></h1>
            <fieldset>
                <label for="email">
                    Correo Electrónico
                    <input type="email" id="email" name="email" required>
                </label>
                <label for="pass">
                        Contraseña <sub>(Mínimo 8 caracteres)</sub>
                        <input type="password" required id="pass" name="pass">
                    </label>
                <label for="button" id="labelS">
                    Enviar
                </label>
                <input type="submit" id="button">
            </fieldset>
        </form>
    </div>

</body>

</html>