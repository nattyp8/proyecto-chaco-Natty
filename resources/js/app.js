
import './timeline.js'
// import L from 'leaflet';
// import 'leaflet/dist/leaflet.css';

// document.addEventListener('DOMContentLoaded', () => {

//     const map = L.map('map', {
//         zoomControl: false,
//         attributionControl: false
//     }).setView([-21.5, -60], 6);

//     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
//         .addTo(map);

// });
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

window.timeLineComponent = (yearData) => ({
    year: yearData,
    currentEvent: null,
    currentIndex: 0,

    get step() {
        return this.year.events.length > 1
            ? 100 / (this.year.events.length - 1)
            : 0
    },

    selectEvent(event, index) {
        this.currentEvent = event
        this.currentIndex = index
    }
})

// Agrega un evento de clic al elemento con id "intro"
document.addEventListener('DOMContentLoaded', () => {

    const intro = document.getElementById('intro')

    if (intro) {

        intro.addEventListener('click', () => {

            const url = intro.dataset.url // por si cambiamos la ruta en el futuro, no tenemos que tocar el JS

            window.location.href = url
        })
    }
})

// Función para volver a la página de inicio después de un período de inactividad
const tiempoInactividad = 60000

let temporizador

function volverAlInicio() {

    if (window.location.pathname !== '/') { // o la ruta que corresponda a tu página de inicio

        window.location.href = '/' // o la ruta que corresponda a tu página de inicio

    }

}

function reiniciarTemporizador() {

    clearTimeout(temporizador)

    temporizador = setTimeout(() => {

        volverAlInicio()

    }, tiempoInactividad)

}

document.addEventListener('DOMContentLoaded', () => {

    document.addEventListener('click', reiniciarTemporizador)

    document.addEventListener('mousemove', reiniciarTemporizador)

    document.addEventListener('touchstart', reiniciarTemporizador)

    document.addEventListener('keydown', reiniciarTemporizador)

    reiniciarTemporizador()

})

