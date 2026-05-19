
import './timeline.js'

import Alpine from 'alpinejs'

globalThis.Alpine = Alpine

Alpine.start()

globalThis.timeLineComponent = (yearData) => ({
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

            const url = intro.dataset.url // por si se cambia la ruta en el futuro, p no tocar el JS

            globalThis.location.href = url
        })
    }
})

// Función para volver a inicio después de inactividad
const tiempoInactividad = 60000

let temporizador

function volverAlInicio() {

    if (globalThis.location.pathname !== '/') { // ruta página de inicio

        globalThis.location.href = '/' 

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

