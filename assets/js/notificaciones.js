$(document).ready(function() {
    // INTERACCION
    var down = false;
    
    $('#bell').click(function(e) {
        var color = $(this).text();
        if (down) {
            $('#box').fadeOut();
            down = false;
        } else {
            var pantalla = $(window).height();
            var navbar = $('#navbar').height();
            pantalla = pantalla - navbar-25;
            $('#box').css('height', pantalla+'px');
            $('#box').slideDown();     
            down = true;

        }

    });

    $('#getout').click(function(e) {
        $('#box').fadeOut();
        down = false;
    });


    // PETICIONES
    const getNotifications = () => {
        $.ajax({
            type: "POST",
            url: BASE_URL + "notificaciones/listar",
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                // console.log(response.data.length);
                if (response.data.length !== 0) {
                    $('.notifications-item').remove();
                    response.data.forEach((e) => {
                        let link = ""
                        if(e.titulo.search("Desincorporado") > 0){
                            link = 'desincorporar';
                        }
                        else{
                            link = 'incorporar';
                        }
                        console.log(link)
                        $('#box').append(`
                            <div class="notifications-item" id="notificacion-${e.id}">
                                <div class="text" onClick="window.location = '${BASE_URL + link}'">
                                    <h4><i class="fas fa-boxes"></i> ${e.titulo}</h4>
                                    <p class="mb-0">${e.mensaje}</p>
                                </div>
                                <div class="notifications-item-close" onClick="dismissNotificacion(${e.id})"><i class="fas fa-times"></i></div>
                            </div>
                        `);
                    })
                    $('#cantidadNotificaciones').show()
                    $('#cantidadNotificaciones').text(response.data.length);
                } else {

                }
            },
            error: (response) => {
                console.log(response);

            }
        });
    }

    getNotifications();

    // setInterval(getNotifications, 15000);
});

function dismissNotificacion (id) {
    console.log('dismiss: ' + id);
    $.ajax({
            type: "POST",
            url: BASE_URL + "notificaciones/eliminar",
            data: { id },
            dataType: "json",
            success: function(response) {

                if (response) {
                    $(`#notificacion-${id}`).fadeOut(200)
                    let nuevaCantidad = parseInt($('#cantidadNotificaciones').text() - 1)
                    if (nuevaCantidad > 0) {
                        $('#cantidadNotificaciones').text(nuevaCantidad)
                    } else {
                        $('#cantidadNotificaciones').hide()
                    }

                } else {
                    console.log('error');
                }
            },
            error: (response) => {
                console.log(response);
            }
        });
}