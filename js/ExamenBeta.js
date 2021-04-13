const contenedor = document.getElementById("test");
const botonRes = document.getElementById("boton");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
  {
    pregunta: "1. ¿Qué significa OEA?",
    respuestas: {
      a: "Nuevo esquema de empresas certificadas",
      b: "Operador Economico Autorizado",
      c: "Certificación para los transportistas",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "2. ¿Qué significa C-TPAT?",
    respuestas: {
      a: "Asociación entre aduanas y el comercio contra el terrorismo",
      b: "Manual que regula los valores y ética profesional de la empresa",
      c: "Rige el comportamiento de los empleados",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "3. ¿Qué es una inspección de 17 puntos de seguridad ?",
    respuestas: {
      a: "Es un estatuto de confianza",
      b: "Es una verificación visual de puntos clave de la unidad y el remolque",
      c: "Es una revisión de personas",
      
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "4. ¿Qué busca el C-TPAT?",
    respuestas: {
      a: "Que haya mas exportaciones",
      b: "Disuadir a los terroristas de utilizar las cadenas comerciales",
      c: "Que haya menos importaciones",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "5. ¿Qué consecuencia trae a la empresa y a tu persona una contaminación?",
    respuestas: {
      a: "No pasa nada",
      b: "Perdida de confianza entre sus empleados",
      c: "Perdida del permiso para cruzar, perdida de mi libertad, multas, Etc.",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "6. ¿Qué beneficios tiene Fletes México de participar en C-TPAT?",
    respuestas: {
      a: "Acceso a la línea fast, confianza de los clientes, seguridad para sus empleados. etc.",
      b: "Ninguno",
      c: "Menos trabajo",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "7. ¿Por qué debemos estar alerta?",
    respuestas: {
      a: "Por que el crimen organizado utiliza empresas de prestigio para cumplir con sus objetivos",
      b: "Para tener mas trabajo",
      c: "Por que me lo exigen",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "8. ¿Qué hay que hacer en caso de que el remolque tenga los sellos violados?",
    respuestas: {
      a: "No pararme para nada",
      b: "Reportar inmediatamente a despacho y no moverme",
      c: "Hacer caso omiso",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "9. ¿Qué pasa si un empleado es sorprendido con drogas o personas ajenas?",
    respuestas: {
      a: "Se aplican medidas disciplinarias y se puede llegar a la terminación laboral",
      b: "No pasa nada",
      c: "Los guardias lo pueden multar",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "10. ¿Qué hay que hacer cuando una autoridad rompe el sello?",
    respuestas: {
      a: "Poner otro sello  ",
      b: "Informar vía omnitrac el número de sello que se quito y el número de sello que se puso  ",
      c: "Venirme sin parar  ",
    },
    respuestaCorrecta: "b",
  },
];

function mostrarTest() {
  const preguntasYrespuestas = [];

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const respuestas = [];

    for (letraRespuesta in preguntaActual.respuestas) {
      respuestas.push(
        `<label>
                  <input type="radio" name="${numeroDePregunta}" value="${letraRespuesta}" />
                  ${letraRespuesta} : ${preguntaActual.respuestas[letraRespuesta]}
              </label><br>`
      );
    }

    preguntasYrespuestas.push(
      `<br><div class="cuestion"> <u><strong>${preguntaActual.pregunta}</strong></u></div>
          <div class="respuestas"> ${respuestas.join("")} </div>
          `
    );
  });

  contenedor.innerHTML = preguntasYrespuestas.join("");
}

mostrarTest();

function mostrarResultado() {
    const respuestas = contenedor.querySelectorAll(".respuestas");
    let respuestasCorrectas = 0;
  
    preguntas.forEach((preguntaActual, numeroDePregunta) => {
      const todasLasRespuestas = respuestas[numeroDePregunta];
      const checkboxRespuestas = `input[name='${numeroDePregunta}']:checked`;
      const respuestaElegida = (
        todasLasRespuestas.querySelector(checkboxRespuestas) || {}
      ).value;
  
      if (respuestaElegida === preguntaActual.respuestaCorrecta) {
        respuestasCorrectas++;
  
        respuestas[numeroDePregunta].style.color = "blue";
      } else {
        respuestas[numeroDePregunta].style.color = "red";
      }
    });
  
    resultadoTest.innerHTML =
      "Usted ha acertado " +
      respuestasCorrectas +
      " preguntas de un total de " +
      preguntas.length;
  }
  
  botonRes.addEventListener("click", mostrarResultado);