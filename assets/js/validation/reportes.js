function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var desde = document.getElementById("desde");
var hasta=document.getElementById("hasta");


$("#submit").on("click", function(){
    if ( $("#dependencia").length > 0 ) {
        var select = $('#dependencia').val();
        if (select == null || select=="") {
            
            $('#dependencia').focus();
            alerta("Ingresa la dependencia a consultar"); 
            return false;
        }
    }

    if(desde.value==null || desde.value==""){
        desde.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }

    if(hasta.value==null || hasta.value==""){
        hasta.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }
    
    

   $('#form').submit();
   return true;
    
});