function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var codigo=document.getElementById("codigo");
var presupuestaria=document.getElementById("presupuestaria");

$("#submit").on("click", function(){

    if(codigo.value==null || codigo.value==""){
        codigo.focus();
        alerta("Ingresa el codigo");  
        return false;  
    }else{
        var expresion= /^[0-9]{2,20}$/;
        if (!expresion.test(codigo.value)) {
            codigo.focus();
            alerta("El codigo no tiene un formato válido");
            return false;
        }
    }

    if(presupuestaria.value==null || presupuestaria.value==""){
        presupuestaria.focus();
        alerta("Ingresa el presupuestaria");  
        return false;  
    }else{
        var expresion= /^[a-zA-Z/s0-9]{2,20}$/;
        if (!expresion.test(presupuestaria.value)) {
            presupuestaria.focus();
            alerta("El presupuestaria no tiene un formato válido");
            return false;
        }
    }

    var select = $('#clasificacion').val();
    if (select == null || select=="") {
        
        $('#clasificacion').focus();
        alerta("Ingresa la clasificacion"); 
        return false;
    }

    var select = $('#denominacion').val();
    if (select == null || select=="") {
        
        $('#denominacion').focus();
        alerta("Ingresa la denominacion"); 
        return false;s
    }

   $('#form_dependencia').submit();
   return true;
    
});