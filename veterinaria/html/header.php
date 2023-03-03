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
          <li class="navLI"><a class="cita" href="../html/citas.php">Cita</a></li>
    </ul>
    <div class="user-config" id="subMenu">
        <div id="userInfo">
            <h2><?php echo $_SESSION["user_info"][0]?> <?php echo $_SESSION["user_info"][1]?></h2>
            <hr>
            <a href="../html/usuarios.php" class="listUser"><i><img class="userIcon" src="../icons/setting.png" alt="settings"></i><p>Cuenta</p> <span class="arrow">></span></a>
            <a href="" class="listUser"><i><img class="userIcon" src="../icons/plus-symbol-button.png" alt="quote"></i><p>Hacer Cita</p> <span class="arrow">></span></a>
            <a href="../html/pet.php" class="listUser"><i><img class="userIcon" src="../icons/pawprint.png" alt="pet"></i><p>Mascotas</p> <span class="arrow">></span></a>
            <a href="../php/logout.php" class="listUser"><i><img class="userIcon" src="../icons/logout.png" alt="logout"></i><p>Cerra Sesión</p> <span class="arrow">></span></a>
        </div>
    </div>
</div>