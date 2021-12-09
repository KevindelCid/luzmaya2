var lunas;



const tipoNawalC = [

    "Nawal de los animales cuadrúpedos", "Nawal de los caminos y dirigentes", "Nawal de la inteligencia", "Nawal del aire y la luna",
    "Nawal de los animales cuadrúpedos"


];
// const definiciones_positivas = [


// "Amable, con abundancia económica","Generoso, orador y pensador","Dulces, oradores e investigadores","Valerosos y fuertes, emprendedores",
// "íntegros, de palabras santas, organizados","Prudentes y analíticos",

// ];



const nawales = ["B'ATZ'", "E", "AJ", "I'X", "TZ'IKI'N", "AJMAQ'", "NO'J",
    "TIJAX", "KAWOQ", "AJPÚ", "IMOX", "IQ'", "AQ'AB'AL", "K'AT", "KAN",
    "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'"];
const diass = ["11", "12", "13",
"1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
"1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
"1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];

function calcularCargador(f2) {


let fechamodificada = 9;

    var fechaCargador = "31/08/-3290".split('/');
    var aFecha2 = f2.split('/');

    var fcargador = Date.UTC(fechaCargador[2], fechaCargador[1] - 1, fechaCargador[0]);
    var fFecha2 = Date.UTC(aFecha2[2], aFecha2[1] - 1, aFecha2[0]);
    var difcargador = fFecha2 - fcargador;
    var diascargador = Math.floor(difcargador / (1000 * 60 * 60 * 24)-1);




    let anios = Math.floor(diascargador / 365);
    let ani = diascargador - anios * 365




    let cargadores = [

        "KEEJ", "E", "NO'J", "IQ'", "KEEJ"
    ];
    var pivot = -1;
    var npivot = 0;
    for (let i = 0; i <= anios; i++) {
        pivot++;
        npivot++;
        if (pivot == 4) {
            pivot = 0;
        }
        if (npivot == 14) {
            npivot = 1;


        }
        if (i == anios) {
            npivot = npivot - 2; //aqui estoy obteniendo un erroe en la fecha 21/05/1998 me da de resultado -1 keej investigar la razon

            if (npivot == 0) {
                npivot = 13;

            } else if (npivot == -1) { npivot = 12 }
            let nAEI = document.querySelector("#nawalcargador")
            nAEI.innerHTML = npivot + " " + cargadores[pivot + 1];
            document.getElementById("imgcargador").src = baseURL + "/storage/naw/" + cargadores[pivot + 1] + ".png";
            let imgAEI = document.querySelector("#imgcargador")
            imgAEI.removeAttribute("hidden");
            document.getElementById("mimgncargador").src = baseURL + "/storage/" + cargadores[pivot + 1] + ".png";

            let tipocargador = document.querySelector("#tipocargador")
            tipocargador.innerHTML = tipoNawalC[pivot + 1];



        }



        //     pivot ++;
        // if(pivot == 14){
        //     pivot = 1;
        // }
        // let naw = anios*4;
        // let cargador =  

    }
}



// Función para calcular los días transcurridos entre dos fechas
restaFechaHoy = function (f2) {




    var aFecha1 = "17/06/-6118".split('/');
    var aFecha2 = f2.split('/');
    var nfecha = aFecha2[1] + "/" + aFecha2[0] + "/" + aFecha2[2];
    var anfecha = nfecha.split('/');

    var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
    var fFecha2 = Date.UTC(anfecha[2], anfecha[1] - 1, anfecha[0]);
    var dif = fFecha2 - fFecha1;
    var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

    calcularCargador(nfecha);








    return dias;

}
restaFechas = function (f2) {
    var aFecha1 = "17/06/-6118".split('/');
    var aFecha2 = f2.split('/');
    var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
    var fFecha2 = Date.UTC(aFecha2[2], aFecha2[1] - 1, aFecha2[0]);
    var dif = fFecha2 - fFecha1;
    var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

    calcularCargador(f2);



    return dias;
}





function calcularNawal() {







    let fecha = document.getElementById("nawalDate").value;

    let err = document.querySelector("#err")
    err.innerHTML = "";
    if (fecha == "") {

        err.innerHTML = "Debe seleccionar una fecha primero";
        return 0;


    } else
        if (fecha > "1592-10-04" & fecha < "1592-10-15") {


             err.innerHTML = "<strong>Nota: </strong> de la fecha 4 de octubre hasta 14 de octubre de 1592 no existen en la historia por el cambio del sistema juliano al calendario gregoriano. sin enbargo ésto no tiene ningún efecto en el calendario lunar y solar maya (cholq'ij y Ab) ya que éste ha funcionado perfectamente siempre, aunque para evitar confusiones se recomienda que a las fechas anteriores del 4 de octubre de 1592 se le sumen 10 días y las fechas entre el 5 y 14 obviarlas (ya que no existen en la historia) para obtener las energías correctas en el calendario cholq'ij haciendo uso del calendario gregoriano.";

        }
        else if (fecha > "9999-12-31") {

            err.innerHTML = "La fecha que seleccionó se encuentra fuera del rango permitido max: 31/12/9999";
            return 0;

        }

    var fe = fecha.split("-");
    let nfe = fe[2] + "/" + fe[1] + "/" + fe[0];
    calcularCargador(nfe);
    diaCholqij(restaFechas(nfe));
    calcularAniosSolares(restarSolar(nfe));



    let nAEI = document.querySelector("#nawalAEI")
    nAEI.innerHTML = lunas[0] + " " + lunas[1];
    document.getElementById("imgnAEI").src = baseURL + "/storage/naw/" + lunas[1] + ".png";
    let imgAEI = document.querySelector("#imgnAEI")
    imgAEI.removeAttribute("hidden");
    document.getElementById("mimgnAEI").src = baseURL + "/storage/" + lunas[1] + ".png";


    let nE = document.querySelector("#nawalE")
    nE.innerHTML = lunas[2] + " " + lunas[3];
    document.getElementById("imgnE").src = baseURL + "/storage/naw/" + lunas[3] + ".png";
    let imgE = document.querySelector("#imgnE")
    imgE.removeAttribute("hidden");
    document.getElementById("mimgnE").src = baseURL + "/storage/" + lunas[3] + ".png";

    let nAED = document.querySelector("#nawalAED")
    nAED.innerHTML = lunas[4] + " " + lunas[5];
    document.getElementById("imgnAED").src = baseURL + "/storage/naw/" + lunas[5] + ".png";
    let imgAED = document.querySelector("#imgnAED")
    imgAED.removeAttribute("hidden");
    document.getElementById("mimgnAED").src = baseURL + "/storage/" + lunas[5] + ".png";

    let nAI = document.querySelector("#nawalAI")
    nAI.innerHTML = lunas[6] + " " + lunas[7];
    document.getElementById("imgnAI").src = baseURL + "/storage/naw/" + lunas[7] + ".png";
    let imgAI = document.querySelector("#imgnAI")
    imgAI.removeAttribute("hidden");
    document.getElementById("mimgnAI").src = baseURL + "/storage/" + lunas[7] + ".png";

    let n = document.querySelector("#nawal")
    n.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgn").src = baseURL + "/storage/naw/" + lunas[9] + ".png";
    let img = document.querySelector("#imgn")
    img.removeAttribute("hidden");
    document.getElementById("mimgn").src = baseURL + "/storage/" + lunas[9] + ".png";


    let no = document.querySelector("#nawalfecha")
    no.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgfechan").src = baseURL + "/storage/naw/" + lunas[9] + ".png";
    let imgn = document.querySelector("#imgfechan")
    imgn.removeAttribute("hidden");




    let nAD = document.querySelector("#nawalAD")
    nAD.innerHTML = lunas[10] + " " + lunas[11];
    document.getElementById("imgnAD").src = baseURL + "/storage/naw/" + lunas[11] + ".png";
    let imgAD = document.querySelector("#imgnAD")
    imgAD.removeAttribute("hidden");
    document.getElementById("mimgnAD").src = baseURL + "/storage/" + lunas[11] + ".png";


    let nADI = document.querySelector("#nawalADI")
    nADI.innerHTML = lunas[12] + " " + lunas[13];
    document.getElementById("imgnADI").src = baseURL + "/storage/naw/" + lunas[13] + ".png";
    let imgADI = document.querySelector("#imgnADI")
    imgADI.removeAttribute("hidden");
    document.getElementById("mimgnADI").src = baseURL + "/storage/" + lunas[13] + ".png";

    let nD = document.querySelector("#nawalD")
    nD.innerHTML = lunas[14] + " " + lunas[15];
    document.getElementById("imgnD").src = baseURL + "/storage/naw/" + lunas[15] + ".png";
    let imgD = document.querySelector("#imgnD")
    imgD.removeAttribute("hidden");
    document.getElementById("mimgnD").src = baseURL + "/storage/" + lunas[15] + ".png";

    let nADD = document.querySelector("#nawalADD")
    nADD.innerHTML = lunas[16] + " " + lunas[17];
    document.getElementById("imgnADD").src = baseURL + "/storage/naw/" + lunas[17] + ".png";
    let imgADD = document.querySelector("#imgnADD")
    imgADD.removeAttribute("hidden");
    document.getElementById("mimgnADD").src = baseURL + "/storage/" + lunas[17] + ".png";




    // let tE = document.querySelector("#totalE")
    // tE.innerHTML = lunas[18];

    // tE.removeAttribute("hidden");



    let tE = document.querySelector("#totalE")
    tE.innerHTML = lunas[18];
    let txt = document.querySelector("#txt")
    txt.removeAttribute("hidden");


    moment.locale('es', {
        months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
        monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
        weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sábado'.split('_'),
        weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
        weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
    }
    );
    moment.locale('es');

    let woy = moment(fecha).format("dddd DD [de] MMMM [de] YYYY");

    let fecho = document.querySelector("#fecho")
    fecho.innerHTML = woy;

    fecho.removeAttribute("hidden");






}



















function calcularNawalHoy() {

    moment.locale('es', {
        months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
        monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
        weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sábado'.split('_'),
        weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
        weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
    }
    );
    moment.locale('es');

    const tiempoTranscurrido = Date.now();
    const hoy = new Date(tiempoTranscurrido);
    let woy = moment(hoy).format("dddd DD [de] MMMM [de] YYYY");

    diaCholqij(restaFechaHoy(hoy.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));
    
    calcularAniosSolares(restarSolar(moment(hoy).format("DD/MM/YYYY")));

    let nAEI = document.querySelector("#nawalAEI")
    nAEI.innerHTML = lunas[0] + " " + lunas[1];
    document.getElementById("imgnAEI").src = baseURL + "/storage/naw/" + lunas[1] + ".png";
    let imgAEI = document.querySelector("#imgnAEI")
    imgAEI.removeAttribute("hidden");
    document.getElementById("mimgnAEI").src = baseURL + "/storage/" + lunas[1] + ".png";

    let nE = document.querySelector("#nawalE")
    nE.innerHTML = lunas[2] + " " + lunas[3];
    document.getElementById("imgnE").src = baseURL + "/storage/naw/" + lunas[3] + ".png";
    let imgE = document.querySelector("#imgnE")
    imgE.removeAttribute("hidden");
    document.getElementById("mimgnE").src = baseURL + "/storage/" + lunas[3] + ".png";

    let nAED = document.querySelector("#nawalAED")
    nAED.innerHTML = lunas[4] + " " + lunas[5];
    document.getElementById("imgnAED").src = baseURL + "/storage/naw/" + lunas[5] + ".png";
    let imgAED = document.querySelector("#imgnAED")
    imgAED.removeAttribute("hidden");
    document.getElementById("mimgnAED").src = baseURL + "/storage/" + lunas[5] + ".png";

    let nAI = document.querySelector("#nawalAI")
    nAI.innerHTML = lunas[6] + " " + lunas[7];
    document.getElementById("imgnAI").src = baseURL + "/storage/naw/" + lunas[7] + ".png";
    let imgAI = document.querySelector("#imgnAI")
    imgAI.removeAttribute("hidden");
    document.getElementById("mimgnAI").src = baseURL + "/storage/" + lunas[7] + ".png";

    let n = document.querySelector("#nawal")
    n.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgn").src = baseURL + "/storage/naw/" + lunas[9] + ".png";
    let img = document.querySelector("#imgn")
    img.removeAttribute("hidden");
    document.getElementById("mimgn").src = baseURL + "/storage/" + lunas[9] + ".png";
    let no = document.querySelector("#nawalfecha")
    no.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgfechan").src = baseURL + "/storage/naw/" + lunas[9] + ".png";
    let imgn = document.querySelector("#imgfechan")
    imgn.removeAttribute("hidden");


    let nAD = document.querySelector("#nawalAD")
    nAD.innerHTML = lunas[10] + " " + lunas[11];
    document.getElementById("imgnAD").src = baseURL + "/storage/naw/" + lunas[11] + ".png";
    let imgAD = document.querySelector("#imgnAD")
    imgAD.removeAttribute("hidden");
    document.getElementById("mimgnAD").src = baseURL + "/storage/" + lunas[11] + ".png";


    let nADI = document.querySelector("#nawalADI")
    nADI.innerHTML = lunas[12] + " " + lunas[13];
    document.getElementById("imgnADI").src = baseURL + "/storage/naw/" + lunas[13] + ".png";
    let imgADI = document.querySelector("#imgnADI")
    imgADI.removeAttribute("hidden");
    document.getElementById("mimgnADI").src = baseURL + "/storage/" + lunas[13] + ".png";

    let nD = document.querySelector("#nawalD")
    nD.innerHTML = lunas[14] + " " + lunas[15];
    document.getElementById("imgnD").src = baseURL + "/storage/naw/" + lunas[15] + ".png";
    let imgD = document.querySelector("#imgnD")
    imgD.removeAttribute("hidden");
    document.getElementById("mimgnD").src = baseURL + "/storage/" + lunas[15] + ".png";

    let nADD = document.querySelector("#nawalADD")
    nADD.innerHTML = lunas[16] + " " + lunas[17];
    document.getElementById("imgnADD").src = baseURL + "/storage/naw/" + lunas[17] + ".png";
    let imgADD = document.querySelector("#imgnADD")
    imgADD.removeAttribute("hidden");
    document.getElementById("mimgnADD").src = baseURL + "/storage/" + lunas[17] + ".png";

    let tE = document.querySelector("#totalE")
    tE.innerHTML = lunas[18];
    let txt = document.querySelector("#txt")
    txt.removeAttribute("hidden");

    let fecho = document.querySelector("#fecho")
    fecho.innerHTML = woy;

    fecho.removeAttribute("hidden");

}















function diaCholqij(dias) {

    let n = Math.floor(dias / 260);
    let nn = dias + 1 - n * 260;

    detNawal(nn);

}

function detNawal(diasC) {


    let naw = Math.floor(diasC / 20);
    let naww = diasC - naw * 20;
    // prueba de que valor es numero y cual no lo es:
    // alert(parseInt(diasC) - 1);



    ////
    lunas = lunaciones(diasC - 1, naww - 1);
}

function lunaciones(posDia, posNawal) {





    const tipoNawal = [

        "Nawal de las Artes", "Nawal de los caminos y dirigentes", "Nawal de la casa y de los niños", "Nawal de la naturaleza", "Nawal del bienestar económico",
        "Nawal de todas las faltas", "Nawal de la inteligencia", "Nawal de la muerte repentina", "Nawal de toda clase de pleitos", "Nawal de sol",
        "Nawal del mar", "Nawal del aire y la luna", "Nawal de la claridad", "Nawal de las cárceles visibles e invisibles", "Nawal de la creación del hombre y la mujer",
        "Nawal de toda clase de muertes", "Nawal de los animales cuadrúpedos", "Nawal de toda clase de semillas", "Nawal de los cuatro señores del fuego", "Nawal de la justicia",

        "Nawal de las Artes", "Nawal de los caminos y dirigentes", "Nawal de la casa y de los niños", "Nawal de la naturaleza", "Nawal del bienestar económico",
        "Nawal de todas las faltas", "Nawal de la inteligencia", "Nawal de la muerte repentina", "Nawal de toda clase de pleitos", "Nawal de sol",
        "Nawal del mar", "Nawal del aire y la luna", "Nawal de la claridad", "Nawal de las cárceles visibles e invisibles", "Nawal de la creación del hombre y la mujer",
        "Nawal de toda clase de muertes", "Nawal de los animales cuadrúpedos", "Nawal de toda clase de semillas", "Nawal de los cuatro señores del fuego", "Nawal de la justicia",

        "Nawal de las Artes", "Nawal de los caminos y dirigentes", "Nawal de la casa y de los niños", "Nawal de la naturaleza", "Nawal del bienestar económico",
        "Nawal de todas las faltas", "Nawal de la inteligencia", "Nawal de la muerte repentina", "Nawal de toda clase de pleitos", "Nawal de sol",
        "Nawal del mar", "Nawal del aire y la luna", "Nawal de la claridad", "Nawal de las cárceles visibles e invisibles", "Nawal de la creación del hombre y la mujer",
        "Nawal de toda clase de muertes", "Nawal de los animales cuadrúpedos", "Nawal de toda clase de semillas", "Nawal de los cuatro señores del fuego", "Nawal de la justicia"



    ];
    //me aseguro que nunca se salga del rango creando este array que permitirá recorrer los nawales
    // de las lunaciones sin salir del rango de la constante global nawales[]
    const nawalesp = [
        // primera vuelta
        "B'ATZ'", "E", "AJ", "I'X", "TZ'IKI'N", "AJMAQ'", "NO'J",
        "TIJAX", "KAWOQ", "AJPÚ", "IMOX", "IQ'", "AQ'AB'AL", "K'AT", "KAN",
        "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",
        // segunda vuelta
        "B'ATZ'", "E", "AJ", "I'X", "TZ'IKI'N", "AJMAQ'", "NO'J",
        "TIJAX", "KAWOQ", "AJPÚ", "IMOX", "IQ'", "AQ'AB'AL", "K'AT", "KAN",
        "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",
        // tercera vuelta
        "B'ATZ'", "E", "AJ", "I'X", "TZ'IKI'N", "AJMAQ'", "NO'J",
        "TIJAX", "KAWOQ", "AJPÚ", "IMOX", "IQ'", "AQ'AB'AL", "K'AT", "KAN",
        "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'"];

    let total = parseInt(diass[posDia +13 - 8]) + parseInt(diass[posDia +13 - 1]) + parseInt(diass[posDia +13 - 2]) +
        parseInt(diass[posDia +13 - 6]) + parseInt(diass[posDia + 6]) + parseInt(diass[posDia +13 - 5])
        + parseInt(diass[posDia + 2]) + parseInt(diass[posDia + 1]) + parseInt(diass[posDia]);




    let lunas = [
        //fila engendramiento
        diass[posDia +13 - 1], nawalesp[posNawal + 20 + 6],
        diass[posDia +13- 8], nawalesp[posNawal + 20 - 8],
        diass[posDia +13- 2], nawalesp[posNawal + 20 - 2],
        //fila nawal
        diass[posDia +13- 6], nawalesp[posNawal + 20 - 6],
        diass[posDia], nawalesp[posNawal + 20], // 
        diass[posDia + 6], nawalesp[posNawal + 20 + 6],

        //fila destino
        diass[posDia + 2], nawalesp[posNawal + 20 + 2],
        diass[posDia +13 - 5], nawalesp[posNawal + 20 - 12],
        diass[posDia + 1], nawalesp[posNawal + 20 - 6],
        total
    ];




    let tipofecha1 = document.querySelector("#tipofecha1")
    tipofecha1.innerHTML = tipoNawal[posNawal + 20];



    let tipoengei = document.querySelector("#tipoai")
    tipoengei.innerHTML = tipoNawal[posNawal + 20 + 6];


    let tipoen = document.querySelector("#tipoe")
    tipoen.innerHTML = tipoNawal[posNawal + 20 - 8];


    let tipoed = document.querySelector("#tipoed")
    tipoed.innerHTML = tipoNawal[posNawal + 20 - 2];








    let tipoi = document.querySelector("#tipoi")
    tipoi.innerHTML = tipoNawal[posNawal + 20 - 6];


    let tipofecha = document.querySelector("#tipofecha")
    tipofecha.innerHTML = tipoNawal[posNawal + 20];


    let tipod = document.querySelector("#tipod")
    tipod.innerHTML = tipoNawal[posNawal + 20 + 6];







    let tipoid = document.querySelector("#tipoid")
    tipoid.innerHTML = tipoNawal[posNawal + 20 + 2];


    let tipond = document.querySelector("#tipond")
    tipond.innerHTML = tipoNawal[posNawal + 20 - 12];

    let tipodd = document.querySelector("#tipodd")
    tipodd.innerHTML = tipoNawal[posNawal + 20 - 6];






    return lunas;
}

