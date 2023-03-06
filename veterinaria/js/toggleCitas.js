let citas = document.getElementById("citaAsig");

function closeMenu() {
    citas.classList.toggle("closeMenu");
    histo.classList.toggle("openMenu");
}


let histo = document.getElementById("citaHisto");

function openMenu() {
    histo.classList.toggle("openMenu");
    citas.classList.toggle("closeMenu");
}