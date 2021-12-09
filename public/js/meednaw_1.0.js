// aqui vamos a hacer que se pueda solicitar una fecha cholqij




const nawalespg = [
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
    "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",

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
    "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",

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
    "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",

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
    "KEME", "KEEJ", "Q'ANIL", "TOJ", "TZ'I'",

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


// const diass = ["11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
//     "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
    const diassg = ["11", "12", "13",
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
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10","11", "12", "13",
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
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10","11", "12", "13",
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
//encuentro la distancia entre la fecha 07/01/1001 y el día de hoy 
//saco la cantidad de años transcurridos
// saco los dias 
// luego obtengo el nawal del dia de hoy 
// con un array recorrer hasta encontrar la busquedaNawal y la busquedaEnergia 




// la cantidad de repeticiones que contenga el bucle hasta encontrar lo buscado serán los días que hacen falta
// para que llegue la fecha lunar seleccionada por el usuario
// sumar los dias a la fecha actual para obtener la fecha en la que se encuentra dicha fecha lunar (12 E) 

function naw() {

    const tiempoTranscurrido = Date.now();
    const hoy = new Date(tiempoTranscurrido);
    diaCholqijM(restaFechaHoyM(hoy.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));
    

 
}
function diaCholqijM(dias) {

    let n = Math.floor(dias / 260);
    let nn = dias + 1 - n * 260;

    detNawalM(nn);

}
function detNawalM(diasC) {


    let naw = Math.floor(diasC / 20);
    let naww = diasC - naw * 20;
    lunas = lunacionesM(diasC - 1, naww - 1);
    



}

function restaFechaHoyM(f2) {

   

    var aFecha1 = "07/01/1001".split('/');
    var aFecha2 = f2.split('/');
    var nfecha = aFecha2[1] + "/" + aFecha2[0] + "/" + aFecha2[2];
    var anfecha = nfecha.split('/');

    var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
    var fFecha2 = Date.UTC(anfecha[2], anfecha[1] - 1, anfecha[0]);
    var dif = fFecha2 - fFecha1;
    var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

    // calcularCargador(nfecha);

    return dias;

}



function lunacionesM(posDia, posNawal) {

    var busuedaNawal = document.getElementById("nawalS").value;
    var busquedaEnergia = document.getElementById("energiaS").value;
    

for(let i =0; i<=261; i++){

    if(diassg[posDia+i] == busquedaEnergia && nawalespg[posNawal + i] == busuedaNawal){


        sumarDiasM(i);
        break;
    }


}

    

}

function sumarDiasM(d){

    const tiempoTranscurrido = Date.now();
    const hoy = new Date(tiempoTranscurrido);
    let fecha = hoy.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' });



 
    

















    // var Fecha = new Date();
    // var sFecha = fecha || (Fecha.getDate() + "/" + (Fecha.getMonth() +1) + "/" + Fecha.getFullYear());
    // var sep = sFecha.indexOf('/') != -1 ? '/' : '-';
    // var aFecha = sFecha.split(sep);
    // var fecha = aFecha[2]+'/'+aFecha[1]+'/'+aFecha[0];
    // fecha= new Date(fecha);
    // fecha.setDate(fecha.getDate()+parseInt(d));
    // var anno=fecha.getFullYear();
    // var mes= fecha.getMonth()+1;
    // var dia= fecha.getDate();
    // mes = (mes < 10) ? ("0" + mes) : mes;
    // dia = (dia < 10) ? ("0" + dia) : dia;
    // var fechaFinal = dia+sep+mes+sep+anno;










// Fecha de hoy hoy=new Date(); 
// Milisegundos de 3 días mas 
// (días * 24 horas * 60 minutos * 60 segundos * 1000 milésimas de segundo) 
suma3dias= d*24*60*60*1000; 
// Sumamos a la fecha de hoy en milisegundos, los 3 días más en milisegundos 
// Tendremos una nueva variable en milisegundos de la fecha actual + 3 días 
fechacontresdiasmas = hoy.getTime()+(d*24*60*60*1000); 
// Si la queremos en formato fecha 
fechacontresdiasmasformatada= new Date(fechacontresdiasmas);




  
    


    // const tiempoTranscurrido = Date.now();
    // const hoy = new Date(tiempoTranscurrido);
    //  let woy =  moment(hoy).format("dddd DD [de] MMMM [de] YYYY");

    diaCholqij(restaFechaHoy(fechacontresdiasmasformatada.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));

//  let f = moment(fechacontresdiasmasformatada.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })).format("YYYY-MMMM-dddd"); alert(fechacontresdiasmasformatada.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' }));
    moment.locale('es', {
        months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
        monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
        weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sábado'.split('_'),
        weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
        weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
      }
      );
    moment.locale('es');

    
     let woy =  moment(fechacontresdiasmasformatada).format("dddd DD [de] MMMM [de] YYYY");
  
  calcularAniosSolares(restarSolar(moment(fechacontresdiasmasformatada).format("DD/MM/YYYY")));


  

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

// function diaCholqij(dias) {

//     let n = Math.floor(dias / 260);
//     let nn = dias + 1 - n * 260;
//   alert("traigo "+dias+" dias");
//     detNawal(nn);

// }

