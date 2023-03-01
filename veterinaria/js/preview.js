let vista_preliminar = (event)=> {

    let vista =new FileReader();//vista sera igual a la lectura del file
    let id_img = document.querySelector("#img-preview");//llamo al id del contenedor de la imagen
    let sub_img = document.querySelector("#sub-img-preview");

    vista.onload = ()=>{//cargando vista
        if (vista.readyState==2){//readyState indica el valor de carga del elemento, con valor 1 no funciona, con 2 si Xd
            id_img.src = vista.result;
        }
    }
    vista.readAsDataURL(event.target.files[0])
    sub_img.classList.add("si-on",Element.width);//A al contenedor de la imagen se le añade la clase "si" al detectar un ancho
}



