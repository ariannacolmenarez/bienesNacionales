
function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var usuario=document.getElementById("usuario");
var clave=document.getElementById("clave");

$("#submit").on("click", function(e){
    if(usuario.value==null || usuario.value==""){
        e.preventDefault();
        usuario.focus();
        alerta("Ingresa el usuario");  
        return false;  
    }

    if(clave.value==null || clave.value==""){
        e.preventDefault();
        clave.focus();
        alerta("Ingresa la clave");  
        return false;  
    }
   $('#form').submit();
   return true;
    
});