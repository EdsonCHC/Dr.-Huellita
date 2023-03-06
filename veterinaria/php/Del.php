<?php
    $id = $_GET['id'];
    $conn = new mysqli('localhost','root','','drhuellita');
    $del = $conn->prepare("DELETE FROM `mascotas` WHERE id = '$id'");
    $del->execute();
    if($del){
        header("location: ../html/usuarios.php");
    }else{
        $mensaje ="Ha ocurrido un error inesperado, inténtalo mas tarde";
        echo "<script> alert('$mensaje');
        window.location.href='../html/index.php';
        </script>";
    }
?>