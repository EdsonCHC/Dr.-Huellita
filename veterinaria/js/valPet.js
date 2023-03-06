const formulario = document.getElementById("form-container");
const pet = document.getElementById("inputAnimal");
const name = document.getElementById("inputName");
const edad = document.getElementById("inputAge");
const color = document.getElementById("inputColor");
const sexo = document.getElementById("inputSexo");
const raza = document.getElementById("inputRaza");
const text = document.getElementById("warnings");
const text2 = document.getElementById("warnings2");
const text3 = document.getElementById("warnings3");
const text4 = document.getElementById("warnings4");
const text5 = document.getElementById("warnings5");
const text6 = document.getElementById("warnings6");

formulario.addEventListener("submit", e => {
    let warnings = "";
    let warnings2 = ""; 
    let warnings3 = ""; 
    let warnings4 = ""; 
    let warnings5 = ""; 
    let entrar = false;
    let regexMascota = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    let regexName = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    let regexEdad = /^\d+$/
    let regexColor = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    let regexRaza = /^[a-zA-ZÁ-ÿ\s]{1,40}$/
    text.innerHTML = "";
    text2.innerHTML = "";
    text3.innerHTML = "";
    text4.innerHTML = "";
    text5.innerHTML = "";
    //Validación mascota    
    if (!regexMascota.test(pet.value)) {
        warnings += `El tipo de mascota no es valido`;
        entrar = true;
    }//Validación nombre    
    if (!regexName.test(name.value)) {
        warnings2 += `El nombre no es valido`;
        entrar = true;
    }
    //Validación edad 
    if (!regexEdad.test(edad.value)) {
        warnings3 += `La edad no puede ser menor a 1 y mayor a 14`;
        entrar = true;
    }
    //Validación color
    if (!regexColor.test(color.value)) {
        warnings4 += `El color no es valido`;
        entrar = true;
    }//validación raza
    if (!regexRaza.test(raza.value)) {
        warnings5 += `La raza no es valida`;
        entrar = true;
    }
    if (entrar) {
        text.innerHTML = warnings;
        text2.innerHTML = warnings2;
        text3.innerHTML = warnings3;
        text4.innerHTML = warnings4;
        text5.innerHTML = warnings5;
        //text7.innerHTML = warnings7;
        e.preventDefault();
    }
});


//validación imagen
function validar() {

    let warnings6 = "";
    text6.innerHTML = "";

    let archivo = document.getElementById('archivo').value,

        extension = archivo.substring(archivo.lastIndexOf('.'),archivo.length);

    if(document.getElementById('archivo').getAttribute('accept').split(',').indexOf(extension) < 0) {
      warnings6 += 'Archivo inválido. No se permite la extensión ' + extension;
    }

    text6.innerHTML = warnings6;
  }