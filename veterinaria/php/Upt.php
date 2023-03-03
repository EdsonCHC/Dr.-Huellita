<?php
    session_start();
    $conn = new mysqli('localhost','root','','drhuellita');

    //OBTENCIÓN DE DATOS
    $id = $_GET['id'];
    $mascota = $_POST['pet'];
    $nombre = $_POST['name'];
    $edad = $_POST['age'];
    $color = $_POST['color'];
    $sexo = $_POST['sexo'];
    $raza = $_POST['raza'];
    $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
    }
    else {
     $stmt = $conn->prepare("UPDATE mascotas SET Names='$nombre', Ages='$edad', Color='$color', Sex='$sexo',
     Raza='$raza', img='$img' Where id='$id' ");
     sleep(1);
     $stmt->execute();
     $stmt->close();
     $conn->close();
     $mensaje ="Los datos se han actualizado correctamente";
     echo "<script> alert('$mensaje');
     window.location.href='../html/Login.php';
     </script>";
    }
          
?>