function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var nombre=document.getElementById("nombre");
var observacion=document.getElementById("observacion");
var fecha = document.getElementById("fecha");


$("#submit").on("click", function(){

    var select = $('#clasificacion').val();
    if (select == null || select=="") {
        
        $('#clasificacion').focus();
        alerta("Ingresa la Clasificacion"); 
        return false;
    }

    if(nombre.value==null || nombre.value==""){
        nombre.focus();
        alerta("Ingresa el Nombre");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{3,50}$/;
        if (!expresion.test(nombre.value)) {
            nombre.focus();
            alerta("El nombre no tiene un formato válido");
            return false;
        }
    }

    var select = $('#locacion').val();
    if (select == null || select=="") {
        
        $('#locacion').focus();
        alerta("Ingresa la locacion"); 
        return false;
    }

    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,240}$/;
    if (!expresion.test(observacion.value)) {
        observacion.focus();
        alerta("La observacion no tiene un formato válido");
        return false;
    }

    var select = $('#cedula').val();
    if (select == null || select=="") {
        
        $('#cedula').focus();
        alerta("Ingresa el encargado"); 
        return false;
    }

    if(fecha.value==null || fecha.value==""){
        fecha.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }

        
    

   $('#form_dependencia').submit();
   return true;
    
});