<?php
session_start();
if (!isset($_SESSION["adm_info"])) {
    header("Location: ../html/adm.php");
}
    $conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
    $numero = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor.css">
    <title>Admin</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/logo.png" class="logo">
        </div>
    </header>
    <main>
        <div class="citas" id="citaAsig">
            <div class="title" id="divCitas">
                <h2>Citas Registradas</h2>
            </div>
            <form>
                <input class="light-table-filter" type="search" placeholder="Buscar Cita"  id="Search" data-table="data-table">
            </form>
            <div class="cites">
                <div class="container2">
                <div class="table">
                    <ul>
                        <li>#</li>
                        <li>Fecha</li>
                        <li>Horario</li>
                        <li>Cliente</li>
                        <li>ID Cliente</li>
                        <li>Teléfono</li>
                        <li>Animal</li>
                        <li>Descripción</li>
                        <li>Veterinario</li>
                        <li>ELIMINAR</li>
                    </ul>
                </div>
                <table class="tableCita data-table">
                    <tr>
                    <?php

                    $citas = mysqli_query($conn, "SELECT * FROM `cita`");
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
                                    <?php echo $datos["Descripcion"] ?>
                                </td>
                                <td>
                                <?php echo $datos["doctorUser"] ?>
                                    <form action="../php/asigCita.php?idPet=<?php echo $datos["id_pet"] ?>&id=<?php echo $datos["id"] ?>" method="POST">
                                    <input list="doctores" name="doctor" required>
                                    <input type="submit" value="Asignar">
                                    </form>
                                </td>
                                <td>
                                    <a class="Del" href="../php/DelCita.php">ELIMINAR</a>
                                </td>

                            </tr>
                            <?php
                            $numero++;
                        }
                        
                    }else{
                        ?>
                        <h3 class="msg">No se han registrado citas en la clínica</h3>
                    <?php

                        }
                    ?>
                </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <datalist id="doctores">
        <?php
    $doctores = mysqli_query($conn, "SELECT * FROM `doctors` Where `id` != 5");
        if ($doctores->num_rows > 0) {
            while ($docs = mysqli_fetch_assoc($doctores)) {
              ?>
              <option value="<?php echo $docs["Nombre"]?>"></option>
              <?php
            }
        }
        ?>
    </datalist>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>
    <script src="../js/search.js"></script>
</body>

</html>