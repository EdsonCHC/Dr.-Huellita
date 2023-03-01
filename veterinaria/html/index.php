<?php
    session_start();
?>
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
            <p class="name">DR <span id="dot">.</span> <br>
                HUELLITA</p>
            <p class="little">
                Clínica Veterinaria
            </p>
        </div>
    </header>
    <main>
        <section class="mainSection">
            <article class="art" id="nosotros">
                <div class="container">
                    <h2>Sobre Nosotros</h2>
                    <img class="animal" src="../img/xd.png" alt="imagen sobre nosotros">
                </div>
                <div class="cont">
                    <p class="txt">Dr. Huellita, situada en el C.C. cuenta con las instalaciones
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
                    <p class="servicio">Medicina General</p>
                    <img class="icon" src="../icons/health-insurance.png" alt="general-medicine">
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante">
                    <p class="servicio">Vacunaciones</p>
                    <img class="icon" src="../icons/medical-equipment.png" alt="vacuum">
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante">
                    <p class="servicio">Desparacitación</p>
                    <img class="icon" src="../icons/pills.png" alt="parasite">
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante">
                    <p class="servicio">Cirugía General</p>
                    <img class="icon" src="../icons/surgery-room.png" alt="general-surgery">
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante">
                    <p class="servicio">Nutrición</p>
                    <img class="icon" src="../icons/hospital.png" alt="nutrition">
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante">
                    <p class="servicio">Revision Veterinaria</p>
                    <img class="icon" src="../icons/stethoscope.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="cita">
        <h1>Realice su cita</h1>
        <form action="" method="post">
            <div class="campos">
                <fieldset>
                    <label for="nombreP">
                        Nombre Del Dueño
                        <input type="text" />
                    </label>
                    <label for="numTel">
                        Numero de Teléfono
                        <input type="tel">
                    </label>
                    <p class="warnings" id="warnings"></p>
                </fieldset>
                <fieldset>
                    <label for="sint">
                        Síntomas del animal <sub>esto debe ser necesario?</sub>
                        <textarea name="síntomas" id="sint" cols="30" rows="5"></textarea>
                    </label>
                    <label for="date">
                        Seleccionar fecha
                        <input type="date">
                    </label>
                    <label for="time" class="labels">
                        Horario
                        <select name="horario" id="time">
                            <option value="" selected disable></option>
                            <option value="Mañana">Por La Mañana</option>
                            <option value="Tarde">Por la Tarde</option>
                        </select>
                    </label>
                    <p>Seleccione su mascota</p>
                    <label for="dog">
                        <input type="radio" name="animal" id="dog">
                        Perro
                    </label>
                    <label for="cat">
                        <input type="radio" name="animal" id="dog">
                        Gato
                    </label>
                    </label>
                    <label for="other">
                        <input type="radio" name="animal" id="other">
                        Gato
                    </label>
                    <label for="mascotaList" id="displayOther">
                        <input list="mascotaList" id="mascotaList">
                        <datalist id="mascotaList">
                            <option value="mascota 1"></option>
                            <option value="mascota 2"></option>
                            <option value="mascota 5"></option>
                            <option value="mascota 6"></option>
                            <option value="mascota 7"></option>
                            <option value="mascota 8"></option>
                            <option value="mascota 9"></option>
                            <option value="mascota 10"></option>
                        </datalist>
                    </label>
                </fieldset>
            </div>
            <label for="button" id="labelS">
                Enviar
            </label>
            <input type="submit" id="button">
        </form>
    </div>
    <!-- import footer -->
    <?php
    include('../html/footer.php');
    ?>

    <script src="../js/toggle.js"></script>
</body>

</html>