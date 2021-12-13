function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var fecha = document.getElementById("fecha");
var denuncia=document.getElementById("denuncia");
var ofico=document.getElementById("ofico");
var conservacion=document.getElementById("conservacion");

$("#submit").on("click", function(){

    if(fecha.value==null || fecha.value==""){
        fecha.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }

    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,20}$/;
    if (!expresion.test(denuncia.value)) {
        denuncia.focus();
        alerta("La denuncia no tiene un formato válido");
        return false;
    }
    
    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,20}$/;
    if (!expresion.test(oficio.value)) {
        oficio.focus();
        alerta("El oficio no tiene un formato válido");
        return false;
    }

    
    var select = $('#cod_bien').val();
    if (select == null || select=="") {
        
        $('#cod_bien').focus();
        alerta("Ingresa la Bien"); 
        return false;
    }

    if(conservacion.value==null || conservacion.value==""){
        conservacion.focus();
        alerta("Ingresa la conservacion");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{2,50}$/;
        if (!expresion.test(conservacion.value)) {
            conservacion.focus();
            alerta("La conservacion no tiene un formato válido");
            return false;
        }
    }

   $('#form_desincorporar').submit();
   return true;
    
});