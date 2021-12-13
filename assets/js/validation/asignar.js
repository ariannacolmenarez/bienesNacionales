function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var num_entrega=document.getElementById("num_entrega");
var prestamo=document.getElementById("prestamo");
var fecha = document.getElementById("fecha");


$("#submit").on("click", function(){

    if(num_entrega.value==null || num_entrega.value==""){
        num_entrega.focus();
        alerta("Ingresa el numero de entrega");  
        return false;  
    }else{
        var expresion= /^[0-9]{2,20}$/;
        if (!expresion.test(num_entrega.value)) {
            num_entrega.focus();
            alerta("El numero de entrega no tiene un formato válido");
            return false;
        }
    }

    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,50}$/;
    if (!expresion.test(prestamo.value)) {
        prestamo.focus();
        alerta("El numero de entrega no tiene un formato válido");
        return false;
    }

    if(fecha.value==null || fecha.value==""){
        fecha.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }
    

    var select = $('#codigo_dependencia').val();
    if (select == null || select=="") {
        
        $('#codigo_dependencia').focus();
        alerta("Ingresa la Dependencia"); 
        return false;
    }

    var select = $('#codigo_bien').val();
    if (select == null || select=="") {
        
        $('#codigo_bien').focus();
        alerta("Ingresa el Bien"); 
        return false;
    }

   $('#form_asignar').submit();
   return true;
    
});