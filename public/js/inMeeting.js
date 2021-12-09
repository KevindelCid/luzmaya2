


function guardarContinuacion(){
 





    



        // agrego la data del form a formData
        var fd = new FormData(document.getElementById("datosform"));
        

    let fecha = $("#fecha").val();
    let hora = $("#inicio").val();
    let tiempo = $("#tiempo").val();
    let hora_inicial = moment(fecha+" "+hora).format('HH:mm:ss');
    let hora_final = moment(fecha+" "+hora).add(tiempo,'m').format('HH:mm:ss');
   

    fd.set("inicio", hora_inicial);
    fd.set("horafinal", hora_final);



    fd.set("enlace", $("#enlace").val());


  
      
    if(tiempo == ""||fecha == "" || hora == ""){
        swal('Campos requeridos',"Debe seleccionar una fecha, hora y duración aproximada del siguiente evento",'error');
         
      }
      
      else{
      
        
        $.ajax({
            type:'POST',
            url: baseURL+'/perfil/guardarContinuacion',
            data:fd,
            cache:false,
            contentType: false,
            processData: false,
         
        }).done(function(respuesta){

            if(respuesta && respuesta.ok){
                // calendar.refetchEvents();
                swal("Evento agregado",'Su evento se ha ingresado correctamente, ahora puede verlo en su agenda o eventos proximos al igual que su cliente.','success');
                limpiar();
            }else{

                swal('Error',"Se ha producido un error de conexión, Comprueba tu acceso a internet",'error');
            }

        });


       

}






}



function limpiar(){

    $('#modalcontinuacion').modal('hide');

    $("#fecha").val("");
    $("#inicio").val("");
    $("#titulo").val("");
    $("#tiempo").val("");
    $("#precio").val("");
    $("#descripcion").val("");

}
