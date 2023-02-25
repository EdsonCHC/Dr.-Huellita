<?php
    session_start();
    session_destroy();
    $var = "Te extrañaremos :c";
    echo "<script> alert('".$var."');
    window.location.href='../html/index.php';
    </script>";
?>