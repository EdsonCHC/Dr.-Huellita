const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
//agregar las opciones para validar genero

const expresiones = {
    //Restricciones para inputs
    nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    apellido: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    contraseña: /^.{4,12}$/, 
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\[a-zA-Z0-9-.]+$/,
    teléfono: /^\d{7,12}$/
};

const validarFormulario = (e) => {
    switch(e.target.name){
        case "names":
            if (expresiones.nombre.test()){
                
            }
        break;
        case "lastNames":
            
        break;
        case "numTelf":
            
        break;
        case "genere":
            
        break;
        case "dates":
            
        break;
        case "DUI":
            
        break;
        case "direction":
            
        break;
        case "correo":
            
        break;
        case "contra":
            
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

