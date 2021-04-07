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
            {nombre: 'Seguridad en el trabajo', desc:'Dar a connoocer a los empleados las medidad de seguridad', src:'9-Seguridad-en-el-trabajo.pdf', img:'Curso9.PNG'},
            {nombre: 'Materiales peligrosos', desc:'Conocer e identificar los materiales peligrosos asi como sus medidad de seguridad', src:'10-MATERIALES-PELIGROSOS.pdf', img:'Curso10.PNG'},
            {nombre: 'Induccion operador foraneo', desc:'Que hacer antes, durante y despues del viaje', src:'11-INDUCCION-OPERADOR-FORANEO.pdf', img:'Curso11.PNG'},
            {nombre: 'Procedimientos de operacion', desc:'Que los empleados conozcan las politicas e seguridad', src:'12-Procedimientos-de-operacion.pdf', img:'Curso12.PNG'}
        ],
        cursos3: [
            {nombre: 'Bitacora de servicio', desc:'Dar a conocer a los colaboradores toda la informacion relacionada con la norma oficial mexicana NOM-087-SCT-2-2017', src:'13-BITACORA-DE-HORAS-DE-SERVICIO.pdf', img:'Curso13.PNG'},
            {nombre: 'Inspeccion del equipo', desc:'Que el operador cheque, y esté seguro, del estado en que se encuentra su equipo de trabajo, (Tractor y Remolque) y NO cause costo para sus ingresos', src:'15-inspeccion-del-equipo.pdf', img:'Curso15.PNG'},
            {nombre: 'Manejo defensivo', desc:'Concientizar a los operadores sobre la operacion de un tracto camion y la manera correcta de utilizarlo en un ambiente de alto riesgo', src:'17-Manejo-Defensivo.pdf', img:'Curso17.PNG'},
            {nombre: 'Monitoreo y seguimiento', desc:'Que nuestros empleados sepan y conozcan la importancia del uso del OMNITRAC, para seguridad propia, comunicación con la Empresa y para cualquier autorización, recomendación, instrucción o reportes.', src:'18-MACROS-MONITOREO-Y-SEGUIMIENTO.pdf', img:'Curso18.PNG'}
        ],
        cursos4: [
            {nombre: 'Manejo tecnico', desc:'Saber los conceptos basicos de operacion y las tecnicas profesionales del manejo para obtener un buen rendimiento diesel', src:'20-MANEJO-TECNICO.pdf', img:'Curso20.PNG'}
        ]
    }
})