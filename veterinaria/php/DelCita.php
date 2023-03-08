<?php

    $id = $_GET['id'];
    $conn = new mysqli('localhost', 'root', '', 'drhuellita');
    $del = $conn->prepare("DELETE FROM `cita` WHERE id = '$id'");
    $del->execute();
    header("Location: ../html/usuarios.php")
?>