    function alerta(titulo){
        Swal.fire({
            icon: 'warning',
            title: titulo,
            showConfirmButton: false,
            timer: 1500
        })
    }
    var nombre=document.getElementById("nombre");
    var correo=document.getElementById("correo");
    var clave = document.getElementById("clave");
    var filename = $('#fotos').val();
    //var apellido=document.getElementById("apellido");
    //var telefono=document.getElementById("telefono");
    
    //var direccion=document.getElementById("adress");
    //var formulario=document.getElementById("formularioClients");
    
    $("#submit").on("click", function(){
        if(nombre.value==null || nombre.value==""){
            nombre.focus();
            alerta("Ingresa el Nombre");  
            return false;  
        }else{
            var expresion= /^[a-zA-Z0-9\_\-]{4,20}$/;
            if (!expresion.test(nombre.value)) {
                nombre.focus();
                alerta("El nombre no tiene un formato válido");
                return false;
            }
        }

        if(correo.value==null || correo.value==""){
            correo.focus();
            alerta("Ingresa el Correo");  
            return false;  
        }else{
            var expresion= /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}$/;
            if (!expresion.test(correo.value)) {
                correo.focus();
                alerta("El Correo no tiene un formato válido");
                return false;
            }
        }

        if(clave.value==null || clave.value==""){
            clave.focus();
            alerta("Ingresa el Clave");  
            return false;  
        }else{
            var expresion= /^[a-zA-Z0-9\_\-]{4,20}$/;
            if (!expresion.test(clave.value)) {
                clave.focus();
                alerta("El Clave no tiene un formato válido");
                return false;
            }
        }
        
        var select = $('#rol').val();
           // console.log(select);
        if (select == null || select=="") {
            
            $('#rol').focus();
            alerta("Ingresa el Rol"); 
            return false;
        }
        var file = document.getElementById('fotos');
        var valor = file.value;
        if(valor == "" || valor == null ){
            file.focus();
                alerta("Debes ingresar una imagen"); 
                return false;
        }else{
            var expresion=/(.PNG|.JPG)$/i;
            if(!expresion.exec(valor)){
                file.focus();
                alerta("El archivo no es una imagen"); 
                return false;
            }
        }
        

       $('#form_usuario').submit();
       return true;
        
    });

 