//FUNCIÓN PARA MOSTRAR CONTRASEÑA EN LOGIN Y REGISTER
function mostrarContraseña() {
    
    const tipo = document.getElementById("pass");
    const showPass = document.getElementById("changeImage");
    if (tipo.type == "password") {
        tipo.type = "text";
        showPass.src = "../icons/nover.png";
    } else {
        tipo.type = "password";
        showPass.src = "../icons/ver.png";
    }

}