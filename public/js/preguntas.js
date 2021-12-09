let jsoner = [
    {
        "categoria": "Sistemas Mayas",
        "pregunta": "¿Cual de los siguientes no es un nawal?",
        "respuesta": "KYWOJ",
        "incorrecta1": "KAWOQ",
        "incorrecta2": "BAT'Z",
        "incorrecta3": "E",
        "imagen": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVXiC3AeqP1sF2A9AaxWa_CD3tG2_sk2calg&usqp=CAU",
        "objectFit": "cover"
    },
    {
        "categoria": "Sistemas Mayas",
        "pregunta": "¿Como se le llama a un guía espiritual Maya?",
        "respuesta": "Ajq'ij",
        "incorrecta1": "Ab",
        "incorrecta2": "Cholq'ij",
        "incorrecta3": "Ajq'ijab",
        "imagen": "https://i.postimg.cc/DfcqVqLQ/ajqij.jpg",
        "objectFit": "cover"
    },
    {
        "categoria": "Sistemas Mayas",
        "pregunta": "¿Cual es el nombre de este Nawal?",
        "respuesta": "AJPÚ",
        "incorrecta1": "TZIKIN",
        "incorrecta2": "KEME",
        "incorrecta3": "AJ",
        "imagen": "https://i.postimg.cc/c4p1XzCF/AJPU.png",
        "objectFit": "contain"
    },
    {
      "categoria": "Sistemas Mayas",
      "pregunta": "¿Cual es el nombre de este Nawal?",
      "respuesta": "E",
      "incorrecta1": "TZ'I'",
      "incorrecta2": "KAN",
      "incorrecta3": "NO'J",
      "imagen": "https://i.postimg.cc/ZnnqWWYn/E.png",
      "objectFit": "contain"
  },
  {
    "categoria": "Sistemas Mayas",
    "pregunta": "¿Cual es el nombre de este Nawal?",
    "respuesta": "IMOX",
    "incorrecta1": "E",
    "incorrecta2": "K'AT",
    "incorrecta3": "TOJ",
    "imagen": "https://i.postimg.cc/fR9f3Lk8/IMOX.png",
    "objectFit": "contain"
},
{
  "categoria": "Sistemas Mayas",
  "pregunta": "¿Cual es el nombre de este Nawal?",
  "respuesta": "Q'ANIL",
  "incorrecta1": "E",
  "incorrecta2": "AJPÚ",
  "incorrecta3": "KEEJ",
  "imagen": "https://i.postimg.cc/P5jQwHZh/QANIL.png",
  "objectFit": "contain"
}
,
{
  "categoria": "Sistemas Mayas",
  "pregunta": "¿Qué es el Cholq'ij?",
  "respuesta": "Calendario Lunar Maya",
  "incorrecta1": "Año Solar Maya",
  "incorrecta2": "Calendario gregoriano",
  "incorrecta3": "Año Biciesto",
  "imagen": "https://i.postimg.cc/L8SfCVxM/descarga.jpg",
  "objectFit": "cover"
}
,
{
  "categoria": "Sistemas Mayas",
  "pregunta": "¿Qué valor tiene el siguiente numero Maya?",
  "respuesta": "13",
  "incorrecta1": "20",
  "incorrecta2": "260",
  "incorrecta3": "2012",
  "imagen": "https://i.postimg.cc/JhcpYnNp/13.png",
  "objectFit": "contain"
}
];








window.onload = function() {
    
    interprete_bp = jsoner;
    escogerPreguntaAleatoria()
  }
  
  let pregunta
  let posibles_respuestas
  btn_correspondiente = [
    select_id("btn1"), select_id("btn2"),
    select_id("btn3"), select_id("btn4")
  ]
  npreguntas = []
  
  let preguntas_hechas = 0
  let preguntas_correctas = 0
  
  function escogerPreguntaAleatoria() {
    let n = Math.floor(Math.random() * interprete_bp.length)
    // n = 0
  
    while (npreguntas.includes(n)) {
      n++
      if (n >= interprete_bp.length) {
        n = 0
      }
      if (npreguntas.length == interprete_bp.length) {
        npreguntas = []
      }
    }
    npreguntas.push(n)
    preguntas_hechas++
    
    escogerPregunta(n)
  }
  
  function escogerPregunta(n) {
    pregunta = interprete_bp[n]
    select_id("categoria").innerHTML = pregunta.categoria
    select_id("pregunta").innerHTML = pregunta.pregunta
    select_id("numero").innerHTML = n
    let pc = preguntas_correctas
    if(preguntas_hechas>1){
      select_id("puntaje").innerHTML = pc + "/" + (preguntas_hechas-1)
    }else{
       select_id("puntaje").innerHTML = ""
    }
      
    style("imagen").objectFit = pregunta.objectFit;
    desordenarRespuestas(pregunta)
    if (pregunta.imagen) {
      select_id("imagen").setAttribute("src", pregunta.imagen)
      style("imagen").height = "200px"
      style("imagen").width = "100%"
    } else {
      style("imagen").height = "0px"
      style("imagen").width = "0px"
      setTimeout(() => {
              select_id("imagen").setAttribute("src", "")
      }, 500);
    }
  }
  
  function desordenarRespuestas(pregunta) {
    posibles_respuestas = [
      pregunta.respuesta,
      pregunta.incorrecta1,
      pregunta.incorrecta2,
      pregunta.incorrecta3
    ]
    posibles_respuestas.sort(() => Math.random() - 0.5)
  
    select_id("btn1").innerHTML = posibles_respuestas[0]
    select_id("btn2").innerHTML = posibles_respuestas[1]
    select_id("btn3").innerHTML = posibles_respuestas[2]
    select_id("btn4").innerHTML = posibles_respuestas[3]
  }
  
  let suspender_botones = false
  
  function oprimir_btn(i) {
    if (suspender_botones) {
      return
    }
    suspender_botones = true
    if (posibles_respuestas[i] == pregunta.respuesta) {
      preguntas_correctas++
      btn_correspondiente[i].style.background = "lightgreen"
    } else {
      btn_correspondiente[i].style.background = "pink"
    }
    for (let j = 0; j < 4; j++) {
      if (posibles_respuestas[j] == pregunta.respuesta) {
        btn_correspondiente[j].style.background = "lightgreen"
        break
      }
    }
    setTimeout(() => {
      reiniciar()
      suspender_botones = false
    }, 3000);
  }
  
  // let p = prompt("numero")
  
  function reiniciar() {
    for (const btn of btn_correspondiente) {
      btn.style.background = "rgb(46, 46, 46)"
    }
    escogerPreguntaAleatoria()
  }
  
  function select_id(id) {
    return document.getElementById(id)
  }
  
  function style(id) {
    return select_id(id).style
  }
  
  function readText(ruta_local) {
    var texto = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", ruta_local, false);
    xmlhttp.send();
    if (xmlhttp.status == 200) {
      texto = xmlhttp.responseText;
    }
    return texto;
  }