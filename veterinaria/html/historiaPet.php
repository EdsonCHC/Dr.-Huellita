<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
    $id = $_GET['id'];
    $histo = mysqli_query($conn, "SELECT * FROM `historial` WHERE `id_pet` = '$id'");
    $datos = mysqli_fetch_array($histo);

    $numero = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/historiaPet.css">
    <title>Historial Animal</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>
    <!-- import header aqui -->
    <?php

    include("../html/header.php");
    ?>
    <main>
        <div class="citas" id="citaAsig">
            <div class="title" id="divCitas" onclick="closeMenu()">
                <h2>Historial Citas</h2>
            </div>
            <div>
                <table class="tableCita">
                    <tr>
                        <td>#</td>
                        <td>Animal</td>
                        <td>Nombre</td>
                        <td>Edad</td>
                        <td>Color</td>
                        <td>Sexo</td>
                        <td>Raza</td>
                        <td>Dueño</td>
                        <td>Dirección</td>
                        <td>Teléfono</td>
                        <td>Motivo</td>
                        <td>Doctor</td>
                        <td>Fue medicado?</td>
                        <td>Síntomas</td>
                        <td>Tratamiento</td>
                        <td>Fecha</td>
                    </tr>
                    <?php

                    $histo = mysqli_query($conn, "SELECT * FROM `historial` WHERE `id_pet` = '$id'");
                    if ($histo->num_rows > 0) {
                        while ($datos = mysqli_fetch_assoc($histo)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $numero ?>
                                </td>
                                <td>
                                    <?php echo $datos["Pets"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Names"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Ages"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Color"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Sex"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Raza"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Dueño"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Direc"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Teléfono"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Motivo"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Atendido"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Medica"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Sintomas"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Tratamiento"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Date"] ?>
                                </td>

                            </tr>
                            <?php
                            $numero++;
                        }
            
                    }else{
                        ?>
                        <h3>Esta Mascota aun no tiene un historial medico</h3>
                    <?php

                        }
                    ?>
                </table>
            </div>
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