$("#recuperar").on("click",function(){ 
    Swal.fire({
        title: 'Recuperar Contraseña',
        text: 'Ingresa tu correo afiliado para enviar tu nueva contraseña',
        html: `<input type="email" id="login" class="swal2-input" placeholder="Username">`,
        showCancelButton: true,
        confirmButtonText: 'Enviar',
        focusConfirm: false,
        preConfirm: () => {
          const email = Swal.getPopup().querySelector('#login').value
          if (!email) {
            Swal.showValidationMessage(`Por favor ingresa el correo`)
          }
          return { email:email}
        },
      allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
          console.log(result.value.email);
          url ="login/recuperar";
      $.ajax({
            
        url: url,
        type: "POST",
        datatype:"json",
        data:{email:result.value.email,api:"test"},
        success: function (data) {
            console.log(result.value.email);
            if(data == "null"){
                Swal.fire({
                    icon: 'error',
                    title: 'El correo no coincide',
                    text: 'El Correo no Existe, por favor Verifique.'                  })
            }else{
                Swal.fire({
                    icon: 'success',
                    title: 'Correo enviado exitosamente',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

        },
        error: (data) => {
            console.log(data);
        }
      });
      
    });
    

});




