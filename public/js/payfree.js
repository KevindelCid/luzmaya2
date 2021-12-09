function reservar(ide){

    $.ajax({
        type:'POST',
        url: baseURL+'/confirmar/cfree',
        data: {id:ide},
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          
          success: function(response) {
    
            
         
    
          
            var resultado = JSON.parse(JSON.stringify(response));
            console.log(resultado);
       

            if(resultado["mensaje"] != null){
                swal(resultado["mensaje"],'success');
               
                window.location= baseURL+"/inicio";
        
        }else{ 
            swal('Falló!','Hubo un error verifique su conexión a internet','error');
        
        }
       
    }
});

}