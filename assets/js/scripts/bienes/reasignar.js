$("#cod_bien").on("change", function(e){
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "selectDependencias/" + this.value,
        success: function (response) {
            let json = JSON.parse(response);

            $('#cod_dep').children().remove();

            $('#cod_dep').append($('<option>', {
                value: json.data.codigo_dependencia,
                text: json.data.dependencia
            }));
            


        },
        error: (response) => {
            console.log(response);
        }
    });
})

