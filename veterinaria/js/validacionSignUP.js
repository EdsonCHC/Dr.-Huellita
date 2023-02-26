const formulario = document.getElementById("formulario");
const firstNames = document.getElementById("firstNames");
const lastNames = document.getElementById("lastNames");
const cell = document.getElementById("numTel");
const dui = document.getElementById("DUI");
const direction = document.getElementById("direction")
const correo = document.getElementById("email");
const pass = document.getElementById("pass");
const text = document.getElementById("warnings");

formulario.addEventListener("submit", e => {
    let warnings = ""; 
    let entrar = false;
    let regexNombre = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    let regexApellido = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    let regexTelefono = /(\+\d{1,3}( )?)?((\(\d{1,3}\))|\d{1,3})[- .]?\d{3,4}[- .]?\d{4}$/
    //let fecha = /^([1-2][0-9]|3[0-1]|0?[1-9])([-\.\/ ])(1[0-2]|0?[1-9])(\2)([\d]{4}|[\d]{2})$/
    let regexDui = /^\d{8}-\d{1}$/
    let regexDirection = /^[A-Za-z0-9\s]+$/g
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    let regexPass = /^[A-Za-z\d]{8,}$/ 
    text.innerHTML = "";
    //Validación nombre
    if (!regexNombre.test(firstNames.value)) {
        warnings += `El nombre no es valido<br>`;
        entrar = true;
    }
    //Validación apellido
    if (!regexApellido.test(lastNames.value)) {
        warnings += `El apellido no es valido<br>`;
        entrar = true;
    }
    //Validación telefóno
    if (!regexTelefono.test(cell.value)) {
        warnings += `El número de telefóno no es valido<br>`;
        entrar = true;
    }
    //Validación dui
    if (!regexDui.test(dui.value)) {
        warnings += `El número de DUI no es valido<br>`;
        entrar = true;
    }
    //Validación direccion
    if (!regexDirection.test(direction.value)) {
        warnings += `La dirección no es valida<br>`;
        entrar = true;
    }
    //Validación email
    if (!regexEmail.test(correo.value)) {
        warnings += `El email no es valido<br>`;
        entrar = true;
    }
    //Validación contraseña
    if (!regexPass.test(pass.value)) {
        warnings += `La contraseña no es valida<br>`;
        entrar = true;
    }
    if (entrar) {
        text.innerHTML = warnings;
        e.preventDefault();
    }else{
        text.innerHTML = "Enviado";
    }
});