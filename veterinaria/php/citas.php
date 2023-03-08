<?php
    session_start();
    $id = $_GET['id'];
    $conn = new mysqli('localhost','root','','drhuellita');
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = $id");
    $datos = mysqli_fetch_assoc($select);

    //OBTENCIÓN DE DATOS
    $client = $datos["firstNames"];
    $telClient = $datos["numTel"];
    $sintomas = $_POST['síntomas'];
    $fechas = $_POST['fecha'];
    $horario = $_POST['horario'];
    $pet = $_POST['mascotas'];
    $docID = 5;
    $docUser = "";

    $masco = mysqli_query($conn, "SELECT * FROM `mascotas` WHERE `Names` = '$pet' AND `id_dueño` = $id");
    $dates = mysqli_fetch_assoc($masco);
    $idAnimal = $dates["id"];
    $animal = $dates["Pets"];

    if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
    }
    else {
     $stmt = $conn->prepare("INSERT INTO cita(`doctorID`,`doctorUser`,`id_user`,`Cliente`, `TelefonoClient`, `Descripcion`, `Fecha`, `Horario`,
     `Animal`,`PET`,`id_pet`) 
     VALUES ('$docID','$docUser','$id','$client','$telClient','$sintomas', '$fechas', '$horario','$animal', '$pet','$idAnimal')"); 
     sleep(1);
     $stmt->execute();
     $stmt->close();
     $conn->close();
     $mensaje ="Cita realizada con exito";
     echo "<script> alert('$mensaje');
     window.location.href='../html/usuarios.php';
     </script>";
    }
          
?>