let ubicacionPrincipal = window.pageYOffset;
window.onscroll = function() {
    let Desplazamiento_Actual = window.pageYOffset;
    if (ubicacionPrincipal >= Desplazamiento_Actual) {
        document.getElementById('marqc').style.marginTop = '0';
    } else {
        document.getElementById('marqc').style.marginTop = '-1000px';
    }
    ubicacionPrincipal = Desplazamiento_Actual;
}