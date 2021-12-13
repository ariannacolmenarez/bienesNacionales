function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var fecha = document.getElementById("fecha");
var concepto=document.getElementById("concepto");

$("#submit").on("click", function(){

    var select = $('#tipo').val();
    if (select == null || select=="") {
        
        $('#tipo').focus();
        alerta("Ingresa la tipo de Bien"); 
        return false;
    }

    if(fecha.value==null || fecha.value==""){
        fecha.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }
    
    var select = $('#cod_bien').val();
    if (select == null || select=="") {
        
        $('#cod_bien').focus();
        alerta("Ingresa la Bien"); 
        return false;
    }

    var select = $('#dependenciaN').val();
    if (select == null || select=="") {
        
        $('#dependenciaN').focus();
        alerta("Ingresa la nueva dependencia"); 
        return false;
    }

    if(concepto.value==null || concepto.value==""){
        concepto.focus();
        alerta("Ingresa el concepto");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{2,250}$/;
        if (!expresion.test(concepto.value)) {
            concepto.focus();
            alerta("El concepto no tiene un formato válido");
            return false;
        }
    }

   $('#form_desincorporar').submit();
   return true;
    
});