<?php
session_start();
if (!isset($_SESSION["doctor_info"])) {
    header("Location: ../html/doctor.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'drhuellita');
$user = $_SESSION["doctor_info"][6];
$id = $_GET['id'];
$idCita = $_GET['idCita'];
$id_dueño = $_GET['id_dueño'];
$select = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `id` = $id");
$filas = mysqli_fetch_assoc($select);

$sel = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = $id_dueño");
$datos = mysqli_fetch_assoc($sel);

$cita = mysqli_query($conn, "SELECT * FROM `cita` WHERE `id_user` = $id_dueño");
$info = mysqli_fetch_assoc($cita);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctor.css">
    <link rel="stylesheet" href="../css/petHisto.css">
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
    <div class="container">
        <div class="left box-primary">
            <h3>Paciente</h3>
            <img class="image" src="data:Image/*;base64, <?php echo base64_encode($filas["img"])?>" alt="imgUser" id="img-preview" />
            <form action="../php/historial.php?idDoctor=<?php echo $user ?>&id=<?php echo $id ?>&idCita=<?php echo $idCita?>" method="POST">
                <div class="form-group margin">
                    <label for="inputAnimal" class="col-sm-2 control-label">Mascota</label>
                    <div class="col-sm-10">
                        <input list="animales" class="form-control" id="inputAnimal" name="pet" readonly
                            value="<?php echo $filas["Pets"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" readonly
                            value="<?php echo $filas["Names"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Edad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="age" readonly
                            value="<?php echo $filas["Ages"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputColor" class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputColor" name="color" readonly
                            value="<?php echo $filas["Color"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Sexo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="sexo" readonly
                            value="<?php echo $filas["Sex"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Sexo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="raza" readonly
                            value="<?php echo $filas["Raza"] ?>">
                    </div>
                </div>
                <h3>Propietario</h3>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="nameD" readonly
                            value="<?php echo $datos["firstNames"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="direc" readonly
                            value="<?php echo $datos["direction"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Teléfono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="tel" readonly
                            value="<?php echo $datos["numTel"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Motivo de consulta</label>
                    <div class="col-sm-10">
                        <textarea name="razonCon" id="" cols="30" rows="10" readonly
                            placeholder="<?php echo $info["Descripcion"] ?>"><?php echo $info["Descripcion"] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Atendido Por</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAge" max="14" min="1" name="servicio" readonly
                            value=" <?php echo $_SESSION["doctor_info"][0] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAge" class="col-sm-2 control-label">Fue Medicado</label>
                    <div class="col-sm-10">
                        <select name="med" id="">
                            <option value="" selected disabled></option>
                            <option value="Si">Si</option>
                            <option value="No">NO</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Síntomas Presentados</label>
                    <div class="col-sm-10">
                        <textarea name="sinto" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Tratamiento</label>
                    <div class="col-sm-10">
                        <textarea name="trata" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="in" class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                        <input type="date" name="fecha">
                    </div>
                </div>
                <label for="submit" class="btn">Guardar</label>
                <input type="submit" id="submit">
            </form>
        </div>
</body>

</html>