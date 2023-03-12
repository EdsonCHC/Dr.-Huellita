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
    $id_dueño = $_SESSION["user_info"][9];
    $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
    }
    else {
     $stmt = $conn->prepare("INSERT INTO mascotas(`Pets`, `Names`, `Ages`, `Color`, `Sex`,
     `Raza`, `id_dueño`, `img`) 
     VALUES ('$mascota', '$nombre', '$edad', '$color', '$sexo', '$raza', '$id_dueño', '$img')"); 
     //$stmt->bind_param("sssssssb", $mascota, $nombre, $edad, $color, $sexo, $raza, $id_dueño, $img); 
     sleep(1);
     $stmt->execute();
     $stmt->close();
     $conn->close();
     $mensaje ="Los datos se han guardado";
     echo "<script> alert('$mensaje');
     window.location.href='../html/usuarios.php';
     </script>";
    }
          
?>