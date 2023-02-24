<?php
    session_start();
    //Variables
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //CONEXIÓN A LA BASE DE DATOS
    $con = new mysqli('localhost','root','','drhuellita'); 
    if($con->connect_error){ 
        die ("Failed to connect: ".$con->connection_error);
    }
    else{
        $stmt = $con->prepare("SELECT * from users where Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result -> num_rows > 0){
            $data = $stmt_result->fetch_assoc(); 
            if($data['pass'] == $password){ 
                sleep(1);

                $nombre = $con->prepare("SELECT * FROM users WHERE Email = ?");
                $nombre->bind_param("s", $email);
                $nombre->execute();
                $result = $nombre->get_result();
                $dato = $result->fetch_assoc();
                $_SESSION["user_info"] = array();
                $_SESSION["user_info"][0] = $dato['firstNames'];
                $_SESSION["user_info"][1] = $dato['lastNames'];
                $_SESSION["user_info"][2] = $dato['gender'];
                $_SESSION["user_info"][3] = $dato['id'];

                $mensaje ="Bienvenid@";
                echo "<script> alert('$mensaje');
                window.location.href='../html/index.php';
                </script>";  
                
            }else{
                $var = "Contraseña incorrecta";
                echo "<script> alert('".$var."');
                window.location.href='../html/Login.php';
                </script>";
            }
        }
        else{
            $var = "Correo incorrecto o inexistente";
            echo "<script> alert('".$var."');
            window.location.href='../html/Login.php';
            </script>";
        }
    }

?>
