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
        $stmt = $conn->prepare("SELECT * from doctors where Usuario = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result -> num_rows > 0){
            $data = $stmt_result->fetch_assoc(); 
            if($data['Contraseña'] == $password){ 
                sleep(1);

                $nombre = $conn->prepare("SELECT * FROM doctors WHERE Usuario = ?");
                $nombre->bind_param("s", $user);
                $nombre->execute();
                $result = $nombre->get_result();
                $dato = $result->fetch_assoc();
                $_SESSION["doctor_info"] = array();
                $_SESSION["doctor_info"][0] = $dato['Nombre'];
                $_SESSION["doctor_info"][1] = $dato['Apellido'];
                $_SESSION["doctor_info"][6] = $dato['id'];
                $_SESSION["doctor_info"][7] = $dato['Usuario'];

                $mensaje ="Bienvenid@";
                echo "<script> alert('$mensaje');
                window.location.href='../html/doctorCitas.php';
                </script>";  
                
            }else{
                $var = "Contraseña incorrecta";
                echo "<script> alert('".$var."');
                window.location.href='../html/doctor.php';
                </script>";
            }
        }
        else{
            $var = "Usuario incorrecto o inexistente";
            echo "<script> alert('".$var."');
            window.location.href='../html/doctor.php';
            </script>";
        }
    }
?>

