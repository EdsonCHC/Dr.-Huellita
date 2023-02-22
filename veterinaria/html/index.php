<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinaria Dr. Huellita</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../img/logo.png">
</head>
<body>
    <!-- import header -->
    <?php

    include("../html/header.php");
    ?>
    
    <header>
        <img class="animalImg" src="../img/vista-frontal-hermoso-perro-espacio-copia.jpg" alt="petsImg">
        <div class="frase">
            <p class="name">Dr. <br> 
                Huellita</p>
            <p class="little">
                Clínica Veterinaria
            </p>
        </div>
    </header>
    <main>
        <section class="mainSection" >
            <article class="art" id="nosotros">
                <div class="container">
                    <h2>Sobre Nosotros</h2>
                    <img class="animal" src="../img/xd.png" alt="imagen sobre nosotros">
                </div>
                <div class="cont">
                    <p class="txt">Dr. Huellita, situada en el C.C.  cuenta con las instalaciones 
                        más modernas y todos los servicios médicos que necesitas para cuidar la 
                        salud y el bienestar de tu mejor amigo. </p>
                </div>
            </article>
           <article class="art" id="servicios">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                <img class="animal" src="../img/xd2.png" alt="imagen sobre Servicios">
            </div>
           <div class="cont">
            <p class="txt">En Clínica Veterinaria Dr. Huellita ofrecemos una asistencia completa y de calidad
                 a tu mascota. Nuestro principal objetivo es mantener la salud y el bienestar de nuestros
                  animales y ayudarlos a restablecerse cuando están enfermos. Para ello, contamos con un
                   personal altamente cualificado e instalaciones modernas y bien equipadas.</p>
           </div>
           </article>
        </section>
    </main>
    <div class="wrap">
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Medicina General</p>
				</div>
			</div>
		</div>
        <div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Vacunaciones</p>
				</div>
			</div>
		</div>
        <div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Desparacitación</p>
				</div>
			</div>
		</div>
        <div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Cirugía General</p>
				</div>
			</div>
		</div>
        <div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Nutrición</p>
				</div>
			</div>
		</div>
        <div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante">
					<p>Revision Veterinaria</p>
				</div>
			</div>
		</div>
	</div>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>
</body>
</html>