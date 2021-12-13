
$('#agg').on("click",function(e){
    e.preventDefault()
    const inputs = `<div class="hijo">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="codigo"><b>Código</b></label>
                                <input type="text" class="form-control bg-light" name="codigo[]" id="codigo" placeholder="Codigo del bien">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control bg-light" name="nombre[]" id="nombre" placeholder="Nombre del bien">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_tipo"><b>Tipo del Bien</b></label>
                                <select class=" select form-control bg-light" name="id_tipo[]" id="id_tipo">
                                    <option selected disabled>Seleccione el Tipo de Bien</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codigo_categoria"><b>Categoria SIGECOF</b></label>
                                <select class="select2 form-control bg-light" name="codigo_categoria[]" id="codigo_categoria">
                                    <option selected disabled>Seleccione la categoria SIGECOF</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="descripcion"><b>Descripción</b></label>
                                <textarea class="form-control bg-light" name="descripcion[]" id="descripcion" placeholder="Descripcion" rows="4"></textarea>
                            </div>
                        </div>
                        
                    </div>`;
                
    $("#copia").append(inputs);

    $(document).ready(function() {
        var url="http://localhost/bienes_nacionales/bienes/selectTipo"
        $.ajax({
                type: "POST",
                url: url,
                success: function(response)
                {
                    $('.select').last().append(response);
                }
        });
    
    });
    $(document).ready(function() {
        var url="http://localhost/bienes_nacionales/bienes/selectcategoria"
        $.ajax({
                type: "POST",
                url: url,
                success: function(response)
                {
                    $('.select2').last().append(response);
                }
        });
    
    });
});
const button= `<div class="row justify-content-end mt-1>
                            <div class="col-1">
                                <button type="button" class="eliminar btn btn-danger" onclick="return eliminar();">Eliminar</button>
                            </div>
                        </div>`;

                        
$("#agg").on("click",function(){
    $('.eliminar').first().remove();
})
$("#agg").on("click",function(){
    $('#copia').append(button);
})
function eliminar(){
    $(".hijo").last().remove();
};


