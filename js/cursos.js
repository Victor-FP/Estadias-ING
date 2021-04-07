const app = new Vue({
    el: '#app',
    data:{
        cursos1: [
            {nombre: 'Induccion', desc:'Breve introduccion', src:'1-INDUCCION-INSTITUCIONAL.pdf', img:'Curso1.PNG'},
            {nombre: 'OEA y Ctpat', desc:'Conocer las certificaciones de la empresa', src:'2-CERTIFICACIONES-OEA-Y-C-TPAT.pdf', img:'Curso2.PNG'},
            {nombre: 'Salud y bienestar', desc:'Que nuestros colaboradores sean capaces de identificar las consecuencias que implica el uso y consumo de drogas y alcohol en todos los ámbitos de la vida: social, familiar, laboral y de salud.', src:'3-SALUD-Y-BIENESTAR-ALCOHOL-Y-DROGAS.pdf', img:'Curso3.PNG'},
            {nombre: 'Servicio', desc:'Que todos y cada uno de nuestros colaboradores comprendan la importancia del buen servicio', src:'8-SERVICIO.pdf', img:'Curso8.PNG'}
        ],
        cursos2: [
            {nombre: 'Seguridad en el trabajo', desc:'Breve introduccion', src:'MANEJO-TECNICO.pdf', img:'Curso9.PNG'},
            {nombre: 'Materiales peligrosos', desc:'Breve introduccion', src:'`1-INDUCCION-INSTITUCIONAL.pdf`', img:'Curso10.PNG'},
            {nombre: 'Induccion operador foraneo', desc:'Breve introduccion', src:'1.- INDUCCIÓN INSTITUCIONAL.pdf', img:'Curso11.PNG'},
            {nombre: 'Procedimientos de operacion', desc:'Breve introduccion', src:'1.- INDUCCIÓN INSTITUCIONAL.pdf', img:'Curso12.PNG'}
        ],
        cursos3: [
            {nombre: 'Bitacora de servicio', desc:'Breve introduccion', src:'MANEJO-TECNICO.pdf', img:'Curso13.PNG'},
            {nombre: 'Inspeccion del equipo', desc:'Breve introduccion', src:'`1-INDUCCION-INSTITUCIONAL.pdf`', img:'Curso15.PNG'},
            {nombre: 'Manejo defensivo', desc:'Breve introduccion', src:'1.- INDUCCIÓN INSTITUCIONAL.pdf', img:'Curso17.PNG'},
            {nombre: 'Monitoreo y seguimiento', desc:'Breve introduccion', src:'1.- INDUCCIÓN INSTITUCIONAL.pdf', img:'Curso18.PNG'}
        ],
        cursos4: [
            {nombre: 'Manejo tecnico', desc:'Breve introduccion', src:'MANEJO-TECNICO.pdf', img:'Curso20.PNG'}
        ]
    }
})