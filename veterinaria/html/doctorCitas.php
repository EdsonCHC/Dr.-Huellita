<?php
session_start();
if (!isset($_SESSION["doctor_info"])) {
    header("Location: ../html/doctor.php");
}
    $conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
    $numero = 1;
    $user = $_SESSION["doctor_info"][7];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor.css">
    <title>Sistema Doctor</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/logo.png" class="logo">
        </div>
        <div id="doctorInfo">
            <h3>
                <?php echo $_SESSION["doctor_info"][0] ?>
                <?php echo $_SESSION["doctor_info"][1] ?>
            </h3>
            <div>
                <h4>
                    <?php echo $_SESSION["doctor_info"][7] ?>
                </h4>
            </div>
        </div>
        <div class="logout">
            <a href="../php/logoutDoctor.php" class="listUser"><i><img class="userIcon" src="../icons/logout.png"
                        alt="logout"></i></a>
        </div>
    </header>
    <main>
        <div class="citas" id="citaAsig">
            <div class="title" id="divCitas">
                <h2>Citas Asignadas</h2>
            </div>
            <div>
                <table class="tableCita">
                    <tr>
                        <td>#</td>
                        <td>Fecha</td>
                        <td>Horario</td>
                        <td>Cliente</td>
                        <td>ID Cliente</td>
                        <td>Teléfono</td>
                        <td>Animal</td>
                        <td># Animal</td>
                        <td>Descripción</td>
                        <td>Historial</td>
                    </tr>
                    <?php

                    $citas = mysqli_query($conn, "SELECT * FROM `cita` WHERE `doctorUser` = '$user'  ORDER BY id DESC");
                    if ($citas->num_rows > 0) {
                        while ($datos = mysqli_fetch_assoc($citas)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $numero ?>
                                </td>
                                <td>
                                    <?php echo $datos["Fecha"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Horario"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Cliente"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["id_user"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["TelefonoClient"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Animal"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["id_pet"] ?>
                                </td>
                                <td>
                                    <?php echo $datos["Descripcion"] ?>
                                </td>
                                <td>
                                    <a href="../html/histo.php?id=<?php echo $datos["id_pet"] ?>&id_dueño=<?php echo $datos["id_user"] ?>">Crear</a>
                                </td>

                            </tr>
                            <?php
                            $numero++;
                        }
                    }  ?>
                </table>
            </div>
        </div>
        </div>
    </main>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>
    <!-- <script src="../js/toggleCitas.js"></script> -->
</body>

</html>