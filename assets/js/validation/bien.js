function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var fecha=document.getElementById("fecha");
var numFactura=document.getElementById("numFactura");
var nom_ordenC = document.getElementById("nom_ordenC");
var nom_ordenP = document.getElementById("nom_ordenP");
var codigo=document.getElementById("codigo");
var nombre=document.getElementById("nombre");
var descripcion=document.getElementById("descripcion");


$("#submit").on("click", function(){

    // validacion acta

    if(fecha.value==null || fecha.value==""){
        fecha.focus();
        alerta("Ingresa la fecha");  
        return false;  
    }

    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,50}$/;
    if (!expresion.test(numFactura.value)) {
        numFactura.focus();
        alerta("El numero de factura no tiene un formato válido");
        return false;
    }

    var file = document.getElementById('img');
    var valor = file.value;
    if(valor != ""){
        var expresion=/(.PNG|.JPG)$/i;
        if(!expresion.exec(valor)){
            file.focus();
            alerta("El archivo no es una imagen"); 
            return false;
        }
    }

    var expresion= /^[0-9]{0,20}$/;
    if (!expresion.test(num_ordenC.value)) {
        num_ordenC.focus();
        alerta("El numero de la orden de compra no tiene un formato válido");
        return false;
    }

    var expresion= /^[0-9]{0,20}$/;
    if (!expresion.test(num_ordenP.value)) {
        num_ordenP.focus();
        alerta("El numero de factura no tiene un formato válido");
        return false;
    }

    // validacion bien
    if(codigo.value==null || codigo.value==""){
        codigo.focus();
        alerta("Ingresa el codigo del bien");  
        return false;  
    }else{
        var expresion= /^[0-9]{2,10}$/;
        if (!expresion.test(codigo.value)) {
            codigo.focus();
            alerta("El codigo no tiene un formato válido");
            return false;
        }
    }

    if(nombre.value==null || nombre.value==""){
        nombre.focus();
        alerta("Ingresa el Nombre del bien");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{3,50}$/;
        if (!expresion.test(nombre.value)) {
            nombre.focus();
            alerta("El nombre no tiene un formato válido");
            return false;
        }
    }
        
    var select = $('#id_tipo').val();
    if (select == null || select=="") {
        
        $('#id_tipo').focus();
        alerta("Ingresa el tipo de bien"); 
        return false;
    }

    var select = $('#codigo_categoria').val();
    if (select == null || select=="") {
        
        $('#codigo_categoria').focus();
        alerta("Ingresa la categoria SIGECOF"); 
        return false;
    }
    
    var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{0,250}$/;
    if (!expresion.test(descripcion.value)) {
        descripcion.focus();
        alerta("El descripcion no tiene un formato válido");
        return false;
    }

   $('#form_dependencia').submit();
   return true;
    
});