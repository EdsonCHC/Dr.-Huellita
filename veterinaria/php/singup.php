<?php
        $conn = new mysqli('localhost','root','','drhuellita');

        //OBTENCIÓN DE DATOS
       $nombre = $_POST['firstNames'];
       $apellido = $_POST['lastNames'];
       $email = $_POST['email'];
       $numTel = $_POST['numTel'];
       $gender = $_POST['gender'];
       $fecha = $_POST['date'];
       $dui = $_POST['DUI'];
       $dui = hash('sha256',$dui);
       $direction = $_POST['direction'];
       $password = $_POST['pass'];
       $password = hash('sha256',$password);
       $carpeta = '../img';
       $Nombre_imagen = 'logo.png';
       $img = $carpeta.'/'.$Nombre_imagen;

       if(buscarRepetido($email) == 1) {
 
        echo "<script> alert('El Correo ingresado ya existe, por favor ingresa otro...');
        window.location.href='../html/signUp.php';
        </script>";
        
       }
       else{
        $conn = new mysqli('localhost','root','','drhuellita');
        if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
        }
        else {

        $stmt = $conn->prepare("INSERT INTO users(`firstNames`, `lastNames`, `gender`, `email`, `pass`,
        `numTel`, `date`, `DUI`,`direction`,`img`) 
        VALUES (?,?,?,?,?,?,?,?,?,?)"); 
        $stmt->bind_param("ssssssssss", $nombre, $apellido, $gender, $email, $password, $numTel, $fecha, $dui, $direction, $img); 
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
        $conn = new mysqli('localhost','root','','drHuellita');
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