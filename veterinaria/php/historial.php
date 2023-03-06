<?php
    session_start();
    $conn = new mysqli('localhost','root','','drhuellita');

    //OBTENCIÓN DE DATOS
    $mascota = $_POST['pet'];
    $nombre = $_POST['name'];
    $edad = $_POST['age'];
    $color = $_POST['color'];
    $sexo = $_POST['sexo'];
    $raza = $_POST['raza'];
    $nameD = $_POST['nameD'];
    $direc = $_POST['direc'];
    $tel = $_POST['tel'];
    $motivo = $_POST['razonCon'];
    $atendido = $_POST['servicio'];
    $medicacion = $_POST['med'];
    $sinto = $_POST['sinto'];
    $trata =  $_POST['trata'];
    $date = $_POST['fecha'];

    if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
    }
    else {
     $stmt = $conn->prepare("INSERT INTO historial(`Pets`, `Names`, `Ages`, `Color`, `Sex`,
     `Raza`, `Dueño`, `Direc`,`Teléfono`,`Motivo`,`Atendido`,`Medica`,`Sintomas`,`Tratamiento`,`Date`) 
     VALUES ('$mascota', '$nombre', '$edad', '$color', '$sexo', '$raza', '$nameD', '$direc', '$tel','$motivo','$atendido',
     '$medicacion','$sinto','$trata','$date')"); 
     sleep(1);
     $stmt->execute();
     $stmt->close();
     $conn->close();
     $mensaje ="Los datos se han guardado";
     echo "<script> alert('$mensaje');
     window.location.href='../html/doctorCitas.php';
     </script>";
    }
          
?>