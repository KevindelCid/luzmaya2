

















































// aqui vamos a hacer que se pueda solicitar una fecha cholqij




const nawalespg = [
    // primera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // segunda vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // tercera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",

    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // segunda vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // tercera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",

    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // segunda vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // tercera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",

    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // segunda vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // tercera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",

    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // segunda vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
    // tercera vuelta
    "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI"];


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
    
return diaCholqijM(restaFechaHoyM(hoy.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));


}
function diaCholqijM(dias) {

    let n = Math.floor(dias / 260);
    let nn = dias + 1 - n * 260;

   
    return  detNawalM(nn);

}
function detNawalM(diasC) {


    let naw = Math.floor(diasC / 20);
    let naww = diasC - naw * 20;
    // lunas = lunacionesM(diasC - 1, naww - 1);
    
return lunacionesM(diasC - 1, naww - 1);


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


   return sumarDiasM(i);
      
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

    // diaCholqij(restaFechaHoy(fechacontresdiasmasformatada.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));

return fechacontresdiasmasformatada.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' });


}

// function diaCholqij(dias) {

//     let n = Math.floor(dias / 260);
//     let nn = dias + 1 - n * 260;
//   swal("traigo "+dias+" dias");
//     detNawal(nn);

// }




















function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

//     $(document).ready(function () {
//     //CheckBox mostrar contraseña
//     $('#ShowPassword').click(function () {
//         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
//     });
// });



function mostrarPassword2(){
    var cambio = document.getElementById("txtPassword2");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

//     $(document).ready(function () {
//     //CheckBox mostrar contraseña
//     $('#ShowPassword2').click(function () {
//         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
//     });
// });

function mostrarNawalModal(){

    var bun = document.getElementById("nawalS").value;
    var bue = document.getElementById("energiaS").value;

    let m = moment(naw()).format("YYYY-MM-DD");
    let hora_inicio = moment(naw()).format("hh:mm:ss");
            let hora_finalizacion = moment(naw()).format("hh:mm:ss");
            $("#fecha").val(m);
            $("#titulo").val(bue+" "+bun);
            $("#inicio").val(hora_inicio);
            $("#finalizacion").val("30");
            $("#evento").modal();

             calendar.unselect();

             
}





var calendar = null;


document.addEventListener('DOMContentLoaded', function() {


    // let formulario = document.querySelector("form");
    

    


    
      var calendarEl = document.getElementById('agenda');
    
 calendar = new FullCalendar.Calendar(calendarEl, {



    // dayRender: function (date, cell) {
    //     cell.addClass("cosasss");
    //     cell.css("background","url(http://localhost/walijab/public/storage/naw/E.png) no-repeat center");
    //     cell.css("background-size","contain")
    // },
    // eventRender: function(event, element) {
    //     $(element).css("opacity", "0.75");
    // },
        
            timeZone: 'local',
        initialView: 'dayGridMonth',
      
        locale:"es",

      
        headerToolbar: {

            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
    
        },
     
      

        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,

    



        select: function(arg) {
        
            let m = moment(arg.start).format("YYYY-MM-DD");

            let hora_inicio = moment(arg.start).format("hh:mm:ss");
            let hora_finalizacion = moment(arg.start).format("hh:mm:ss");

console.log(hora_inicio, hora_finalizacion, m);

         $("#fecha").val(m);
         $("#inicio").val(hora_inicio);
         $("#finalizacion").val("30");
         $("#evento").modal();
          calendar.unselect();
        },
        eventClick: function(info) {
            moment.lang('es', {
                months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
                monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
                weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
                weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
                weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
              }


              
              );

             
            let hora_inicioE = moment(info.event.start).format("hh:mm A");
            let fecha_inicioE = moment(info.event.start).format("dddd DD [de] MMMM [de] YYYY");

            let m = moment(info.event.start).format("YYYY-MM-DD");
            let h = moment(info.event.start).format("H:MM");
            let inicio = info.event.start;
            let fin = info.event.end;



            var difference = fin.getTime() - inicio.getTime(); // This will give difference in milliseconds
          let tiempo = Math.round(difference / 60000);


            $("#tituloE").val(info.event.title.toUpperCase());
            $("#descriE").text(info.event.descripcion);
            $("#idE").val(info.event.id);




            $("#fechaE").val(m);
            $("#horaE").val(h);
          
            $("#tiempoE").val(tiempo);

            $("#tituloEd").text(info.event.title.toUpperCase());
            $("#descriEd").text(info.event.descripcion);
            $("#HoraEd").text("La cita quedó agendada para la fecha: "+fecha_inicioE+" a las "+hora_inicioE);


            $("#click_evento").modal(); // show para ver el modal && modal('hide') para esconder la vista.


            var id = info.event.id;



            $.ajax({
                type:'POST',
                url: baseURL+'/perfil/eventito?id='+id,
                data: {id:id},
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  
                  success: function(response) {
            
                    
                 
            
                  
                    var resultado = JSON.parse(JSON.stringify(response));
                    console.log(resultado);
               
                    $("#descriE").text(resultado["datoid"]);
                   
let precio ;
                    if(resultado["precio"] == null){
                         precio ="Gratis!"; 
                         $("#precioEd").text(precio);
                
                }else{ 
                    precio = resultado["precio"];  
                    $("#precioEd").text("$"+precio+" USD");
                
                }
               

                    $("#descriEd").text(resultado["datoid"]);
                    $("#precioE").val(resultado["precio"]);

                    $("#descripcioned").val(resultado["datoid"]);
            
            
            
            
                }
            });
        
            // change the border color just for fun
            info.el.style.borderColor = 'red';
  },

      
        editable: true,
     
        eventSources:  baseURL+'/perfil/listar',
        
      });
      
  


    //     dateClick:function(info){
    
    //         $("#evento").modal("show");
    //     }
    
    
    //   });
    
    
    
      calendar.render();
    
    // document.getElementById("btnGuardar").addEventListener("click", function(){
    
    // const datos = new FormData(formulario);
    // console.log(datos);
 
    
    //     axios.post("http://localhost/walijab/public/perfil/agregar", datos).
    //     then(
    //         (respuesta)=>{

    //             $("#evento").modal("hide");
    //         }

    //     )


    // });
    
    });
    

    function limpiar(){

        $('#evento').modal('hide');
        $('#editmodal').modal('hide');
        $("#fecha").val("");
        $("#inicio").val("");
        $("#titulo").val("");
        $("#tiempo").val("");
        $("#precio").val("");
        $("#descripcion").val("");

    }

    function confirmarTodo(idp){




        $.ajax({
            type:'POST',
            url: baseURL+'/admin/confirmationAll/'+idp,
            data: {id:idp},
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              
              success: function(response) {
        
                
             
        
              
                var resultado = JSON.parse(JSON.stringify(response));
                console.log(resultado);
           
    
                if(resultado["mensaje"] != null){
                    swal(resultado["mensaje"] );
                    window.location= baseURL+"/admin/detalles/"+idp;
            
            }else{ 
               
            swal('Falló!','Hubo un error al confirmar todo','error');
            }
           

              
        
        
        
            }
        });



    
            }


    function confirmar(ide,idp){




        $.ajax({
            type:'POST',
            url: baseURL+'/admin/confirmation/'+ide,
            data: {id:ide},
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              
              success: function(response) {
        
                
             
        
              
                var resultado = JSON.parse(JSON.stringify(response));
                console.log(resultado);
           
    
                if(resultado["mensaje"] != null){
                    swal(resultado["mensaje"] );
                    window.location= baseURL+"/admin/detalles/"+idp;
            
            }else{ 
               
            swal('Falló!','Hubo un error al confirmar','error');
            }
           

              
        
        
        
            }
        });



    
            }

    

function editar(){



    
            // agrego la data del form a formData
            var fd = new FormData(document.getElementById("datosformeditar"));
            

        let fecha = $("#fechaE").val();
        let hora = $("#horaE").val();
        let tiempo = $("#tiempoE").val();
        // let hora_inicial = moment(hora).format('HH:mm:ss');
        // let hora_final = moment(hora).add(tiempo,'m').format('HH:mm:ss');
        let hora_inicial = moment(fecha+" "+hora).format('HH:mm:ss');
        let hora_final = moment(fecha+" "+hora).add(tiempo,'m').format('HH:mm:ss');


        fd.set("inicio", hora_inicial);
        fd.set("horafinal", hora_final);


      
          
            $.ajax({
                type:'POST',
                url: baseURL+'/perfil/editar',
                data:fd,
                cache:false,
                contentType: false,
                processData: false,
             
            }).done(function(respuesta){

                if(respuesta && respuesta.ok){
                    calendar.refetchEvents();
                    swal("¡Evento Modificado!",'success');
                    limpiar();
                }else{

                    swal("Error",'Se produjo un error de conexión, verifique su conexión a internet','error');
                }

            });

}



    function guardar(){


            // agrego la data del form a formData
            var fd = new FormData(document.getElementById("datosform"));
            

        let fecha = $("#fecha").val();
        let hora = $("#inicio").val();
        let tiempo = $("#tiempo").val();
        let hora_inicial = moment(fecha+" "+hora).format('HH:mm:ss');
        let hora_final = moment(fecha+" "+hora).add(tiempo,'m').format('HH:mm:ss');

        fd.set("inicio", hora_inicial);
        fd.set("horafinal", hora_final);


      
          
          if(tiempo == ""){
              
              swal('Dato requerido','Ingrese el campo duración por favor','error');
          }
          
          else{
          
            $.ajax({
                type:'POST',
                url: baseURL+'/perfil/guardar',
                data:fd,
                cache:false,
                contentType: false,
                processData: false,
             
            }).done(function(respuesta){

                if(respuesta && respuesta.ok){
                    calendar.refetchEvents();
                    swal("Evento agregado",'Su evento se ha ingresado correctamente, ahora puede verlo en su agenda o eventos proximos','success');
                    limpiar();
                }else{

                    swal('Error',"Se ha producido un error de conexión, Comprueba tu acceso a internet",'error');
                }

            });
    
}

















        
    

    }