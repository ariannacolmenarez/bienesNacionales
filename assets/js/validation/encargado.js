function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var nombre=document.getElementById("nombre");
var apellido=document.getElementById("apellido");
var cedula = document.getElementById("cedula");
var telefono = document.getElementById("telefono");


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

    if(apellido.value==null || apellido.value==""){
        apellido.focus();
        alerta("Ingresa el Apellido");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{3,75}$/;
        if (!expresion.test(apellido.value)) {
            apellido.focus();
            alerta("El Apellido no tiene un formato válido");
            return false;
        }
    }
    
    var select = $('#cargo').val();

    if (select == null || select=="") {
        
        $('#cargo').focus();
        alerta("Ingresa el Cargo"); 
        return false;
    }

    if(cedula.value==null || cedula.value==""){
        cedula.focus();
        alerta("Ingresa el Cedula");  
        return false;  
    }else{
        var expresion= /^[0-9]{6,10}$/;
        if (!expresion.test(cedula.value)) {
            cedula.focus();
            alerta("El Cedula no tiene un formato válido");
            return false;
        }
    }

        var expresion= /^[0-9]{0,11}$/;
        if (!expresion.test(telefono.value)) {
            telefono.focus();
            alerta("El Teléfono no tiene un formato válido");
            return false;
        }
    

   $('#form_encargado').submit();
   return true;
    
});