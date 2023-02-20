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
        <form action="" method="post">
            <h1>Registrase</h1>
            <div class="field">
                <fieldset>
                    <label for="firtNames">
                        Nombres
                        <input type="text" id="firtNames" required>
                    </label>
                    <label for="lastName">
                        Apellidos
                        <input type="text" id="lastNames" required>
                    </label>
                    <label for="">
                        Numero Telefonico
                        <input type="tel"  id="numTel" required>
                    </label>
                   
                </fieldset>
                <fieldset>
                    <label for="">
                        Genero
                        <select name="" id="" required>
                            <option value="" selected disabled></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="O">Otro</option>
                            <option value="null">Prefiero no decirlo</option>
                        </select>
                    </label>
                    <label for="dui">
                        DUI
                        <input type="text" required id="dui">
                    </label>
                    <label for="direction">
                        Dirección
                        <input type="text" required id="direction">
                    </label>
                    
                </fieldset>
            </div>
            <label for="button" id="labelS">
                Enviar
            </label>
            <input type="submit" id="button">
        </form>
    </div>

</body>

</html>