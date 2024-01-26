document.addEventListener('DOMContentLoaded', function() {
    var carrusel = document.querySelector('.carrusel-contenedor');
    var btnPrevio = document.querySelector('.previo');
    var btnSiguiente = document.querySelector('.siguiente');
    var totalElementos = 20;
    var paso = 140; // Ancho de cada elemento
    var posicionActual = 0;

    btnSiguiente.addEventListener('click', function() {
        if (posicionActual > -(paso * (totalElementos - 1))) {
            posicionActual -= paso;
            carrusel.style.transform = 'translateX(' + posicionActual + 'px)';
        }
    });

    btnPrevio.addEventListener('click', function() {
        if (posicionActual < 0) {
            posicionActual += paso;
            carrusel.style.transform = 'translateX(' + posicionActual + 'px)';
        }
    });
});
