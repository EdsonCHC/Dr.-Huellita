<?php
    session_start();
    session_destroy();
    header("Location: ../html/doctor.php");
?>