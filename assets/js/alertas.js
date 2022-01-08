document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile.style['background-image'] = 'url('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});

// var eliminar = document.querySelectorAll('[onclick="return confirmar();"]');
// console.log(eliminar);
$('[onclick="return confirmar();"]').click(function(e){
  e.preventDefault();
  var href = e.currentTarget.href;
  Swal.fire({
    title: 'Está seguro?',
    text: "El registro sera eliminado del sistema!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar!'
  }).then((result) => {
    if(result){
      if(result.value){
        window.location = href;
      }
    }
  })
});

$('[onclick="restaurar();"]').click(function(e){
  e.preventDefault();
  Swal.fire({
    title: 'Está seguro de restaurar?',
    text: "La Base de Datos sera restaurada al punto deseado!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Restaurar!'
  }).then((result) => {
    if(result){
      if(result.value){
        document.formRest.submit()
      }
    }
  })
});

$('[onclick="respaldo();"]').click(function(e){
  e.preventDefault();
  var href = "mantenimiento/respaldo";
  Swal.fire({
    title: 'Está seguro de crear copia de seguridad?',
    text: "Se creará una copia de seguridad de la base de datos hasta este punto!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Respaldar!'
  }).then((result) => {
    if(result){
      if(result.value){
        window.location = href;
      }
    }
  })
});

