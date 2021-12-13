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
function confirmar()
{
  // Swal.fire({
  //   title: 'Esta Seguro?',
  //   text: "El registro sera eliminado del sistema!",
  //   type: 'warning',
  //   showCancelButton: true,
  //   confirmButtonColor: '#3085d6',
  //   cancelButtonColor: '#d33',
  //   cancelButtonText: 'Cancelar',
  //   confirmButtonText: 'Si, eliminar!'
  // }).then((result) => {
  //   return result;
  // })
	// if(confirm("Estas seguro que quieres eliminarlo ?"))
	// {
	// 	return true;
	// }
	// return false;
}

