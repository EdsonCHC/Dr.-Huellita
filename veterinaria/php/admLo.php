<?php
    session_start();
    
    //Variables
    $user = $_POST['User'];
    $password = $_POST['pass'];

    //CONEXIÓN A LA BASE DE DATOS
    $conn = new mysqli('localhost','root','','drhuellita');

    if($conn->connect_error){ 
        die ("Failed to connect: ".$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("SELECT * from admins where adminUser = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result -> num_rows > 0){
            $data = $stmt_result->fetch_assoc(); 
            if($data['Pass'] == $password){ 
                sleep(1);

                $nombre = $conn->prepare("SELECT * FROM admins WHERE adminUser = ?");
                $nombre->bind_param("s", $email);
                $nombre->execute();
                $result = $nombre->get_result();
                $dato = $result->fetch_assoc();
                $_SESSION["adm_info"] = array();

                $mensaje ="Bienvenid@";
                echo "<script> alert('$mensaje');
                window.location.href='../html/admin.php';
                </script>";  
                
            }else{
                $var = "Contraseña incorrecta";
                echo "<script> alert('".$var."');
                window.location.href='../html/adm.php';
                </script>";
            }
        }
        else{
            $var = "Administrador incorrecto o inexistente";
            echo "<script> alert('".$var."');
            window.location.href='../html/adm.php';
            </script>";
        }
    }

?>
