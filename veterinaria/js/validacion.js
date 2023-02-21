const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
//agregar las opciones para validar genero

const expresiones = {
    //Restricciones para inputs
    firstNames: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    lastNames: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    pass: /^.{4,12}$/, 
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\[a-zA-Z0-9-.]+$/,
    numTel: /^\d{7,12}$/
};

const validarFormulario = (e) => {
    switch(e.target.name){
        case "firstNames":
            if (expresiones.firstNames.test()){
                
            }
        break;
        case "lastNames":
            
        break;
        case "numTel":
            
        break;
        case "genere":
            
        break;
        case "date":
            
        break;
        case "DUI":
            
        break;
        case "direction":
            
        break;
        case "email":
            
        break;
        case "pass":
            
        break;
    };
};

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
});

