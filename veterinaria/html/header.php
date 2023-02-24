<?php 
 include("../php/functions.php");
?>
<div class="headerContainer">
    <div class="logo">
      <img src="../img/logo.png" class="logo"></a>
    </div>
    <ul class="headUl">
          <li class="navLI"><a href="./index.php">Inicio</a></li>
          <li class="navLI"><a href="./index.php#nosotros">Nosotros</a></li>
          <li class="navLI"><a href="./index.php#servicios">Servicios</a></li>
          <li class="navLI <?php esconderv2(); ?>"><a href="./signUP.php">Registrase</a></li>
          <li class="navLI <?php esconderv2(); ?>"><a href="./Login.php">Iniciar Sesión</a></li>
          <li class="navLI <?php esconder(); ?>"><div id="user-pic" onclick="toggleMenu()"><img src="../icons/user.png" alt="user"></div></li>
          <li class="navLI"><a class="cita" href="#">Cita</a></li>
    </ul>
    <div class="user-config" id="subMenu">
        <div class="userInfo">
            <h2>Lorem, ipsum.</h2>
            <hr>
        <ul>
            <li>Lorem, ipsum. <span>></span></li>
            <li>Lorem, ipsum. <span>></span></li>
            <li>Lorem, ipsum. <span>></span></li>
        </ul>
        </div>
    </div>
</div>

