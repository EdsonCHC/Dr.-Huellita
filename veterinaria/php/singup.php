<?php
        include('../php/conex.php')

        //OBTENCIÓN DE DATOS
       $nombre = $_POST['firstNames'];
       $apellido = $_POST['lastNames'];
       $email = $_POST['email'];
       $numTel = $_POST['numTel'];
       $gender = $_POST['gender'];
       $fecha = $_POST['date'];
       $dui = $_POST['DUI'];
       $direction = $_POST['direction'];
       $password = $_POST['pass'];

       if(buscarRepetido($email) == 1) {
 
        echo "<script> alert('El Correo ingresado ya existe, por favor ingresa otro...');
        window.location.href='../html/signUp.php';
        </script>";
       }
       else{
        if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
        }
        else {

        $stmt = $conn->prepare("INSERT INTO users(`firstNames`, `lastNames`, `gender`, `email`, `pass`,
        `numTel`, `date`, `DUI`,`direction`) 
        VALUES (?,?,?,?,?)"); 
        $stmt->bind_param("ssssssds", $nombre, $apellido, $gender, $email, $password, $numTel, $date, $dui, $direction); 
        sleep(1);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        $mensaje ="Registro exitoso, Ya puedes iniciar sesión";
        echo "<script> alert('$mensaje');
        window.location.href='../html/Login.php';
        </script>";
       }
       
       }
       
        function buscarRepetido($email){
        $search = $conn->prepare("SELECT * FROM users WHERE Email = ?");
        $search->bind_param("s", $email);
        $search->execute();
        $result=$search->get_result();

        if($result-> num_rows > 0){
                return 1;
        }else{
                return 0;
        }

       }

?>