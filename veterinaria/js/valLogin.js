const formulario = document.getElementById("formulario");
const correo = document.getElementById("email");
const pass = document.getElementById("pass");
const text = document.getElementById("warnings");
const text2 = document.getElementById("warnings2");

formulario.addEventListener("submit", e => {
    let warnings = "";
    let warnings2 = ""; 
    let entrar = false;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    let regexPass = /^[A-Za-z\d]{8,}$/ 
    text.innerHTML = "";
    text2.innerHTML = "";
    //Validación email
    if (!regexEmail.test(correo.value)) {
        warnings += `El correo contiene caracteres inválidos`;
        entrar = true;
    }
    //Validación contraseña
    if (!regexPass.test(pass.value)) {
        warnings2 += `La contraseña no es valida, solo puede contener letras y números`;
        entrar = true;
    }
    if (entrar) {
        text.innerHTML = warnings;
        text2.innerHTML = warnings2;
        e.preventDefault();
    }
});