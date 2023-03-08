<?php
    $conn = new mysqli('localhost','root','','drhuellita');

    //OBTENCIÓN DE DATOS

    $nombre = $_POST['doctor'];
    $id = $_GET["idPet"];
    $idCita = $_GET["id"];

    //DATOS DEL DOCTOR
    $select = mysqli_query($conn, "SELECT * FROM `doctors` WHERE `Nombre` = '$nombre'");
    $datos = mysqli_fetch_assoc($select);
    $docID = $datos['id'];

    if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
    }
    else {
     $stmt = $conn->prepare("UPDATE cita SET doctorUser='$nombre', doctorID='$docID' Where id='$idCita'");
     sleep(1);
     $stmt->execute();
     $stmt->close();
     $conn->close();

     header("Location: ../html/admin.php");
    }
          
?>