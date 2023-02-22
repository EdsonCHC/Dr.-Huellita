<?php
    session_start();
    
    function esconder(){//No se muestra si no hay sesión
        if(!isset($_SESSION["user_info"][0])){
            echo "esconder";
        }
    }

    function esconderv2(){//No se muestra si hay sesión
        if(isset($_SESSION["user_info"][0])){
            echo "esconder";
        }
    } 
?>