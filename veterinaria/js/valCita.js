const formulario = document.getElementById("formulario");
const sintomas = document.getElementById("sint");
const hoy = new Date().toISOString().split("T")[0];
    document.getElementsByName("fecha")[0].setAttribute('min', hoy);
const text = document.getElementById("warnings");

formulario.addEventListener("submit", e => {
    let warnings = ""; 
    let entrar = false;
    let regexSint = /^[A-Za-z\d]{15,}$/ 
    text.innerHTML = "";
    //Validación nombre
    if (!regexSint.test(sintomas.value)) {
        warnings += `Los los <br>`;
        entrar = true;
    }
    if (entrar) {
        text.innerHTML = warnings;
        e.preventDefault();
    }else{
        text.innerHTML = "Enviado";
    }
});