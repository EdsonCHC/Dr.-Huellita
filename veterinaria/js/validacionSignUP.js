const formulario = document.getElementById("formulario");
const firstNames = document.getElementById("firstNames");
//const lastName = document.getElementById("lastNames")
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const text = document.getElementById("warnings");

formulario.addEventListener("submit", e => {
    e.preventDefault();
    let warnings = ""; 
    let entrar = false;
    //let firstNames = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    //let lastNames = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    //let telefono = /^\d{7,12}$/
    //let dui = /^\d{7,12}$/
    //let direccion = /^[a-zA-ZÁ-ÿ\s]{1,150}$/
    let regexEmail = /^w+@[a-zA-Z_]+?.[a-zA-Z] {2,3}$/
    //let pass = /^.{4,12}$/
    text.innerHTML = "";
    if (firstNames.value.length < 8) {
        warnings += `El nombre no es valido`;
        entrar = true;
        text.innerHTML = warnings;
    };
    if (!regexEmail.test(email.value)) {
        warnings += `El email no es valido`;
        entrar = true;
    };
    if (pass.value.length < 8) {
        warnings += `La contraseña no es valida`;
        entrar = true;
    };
    if (entrar) {
        text.innerHTML = warnings;
    }else{
        text.innerHTML = "Enviado";
    };
});