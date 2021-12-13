function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var nombre=document.getElementById("nombre");
var rif=document.getElementById("rif");
var direccion=document.getElementById("direccion");

$("#submit").on("click", function(){
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

    if(rif.value==null || rif.value==""){
        rif.focus();
        alerta("Ingresa el rif");  
        return false;  
    }else{
        var expresion= /^[a-zA-Z0-9]{5,20}$/;
        if (!expresion.test(rif.value)) {
            rif.focus();
            alerta("El rif no tiene un formato válido");
            return false;
        }
    }

    if(direccion.value==null || direccion.value==""){
        direccion.focus();
        alerta("Ingresa la direccion");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{3,250}$/;
        if (!expresion.test(direccion.value)) {
            direccion.focus();
            alerta("La direccion no tiene un formato válido");
            return false;
        }
    }

   $('#form').submit();
   return true;
    
});