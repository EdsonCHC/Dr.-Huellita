const formulario = document.getElementById("formulario");
const pass = document.getElementById("pass");
const text2 = document.getElementById("warnings2");

formulario.addEventListener("submit", e => {
    let warnings2 = ""; 
    let entrar = false;
    let regexPass = /^[A-Za-z\d]{8,}$/ 
    text2.innerHTML = "";
    //Validación contraseña
    if (!regexPass.test(pass.value)) {
        warnings2 += `La contraseña no es valida, solo puede contener letras y números`;
        entrar = true;
    }
    if (entrar) {
        text2.innerHTML = warnings2;
        e.preventDefault();
    }
});