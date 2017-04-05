/* 
 * scrip petición ajax para registrar los clientes
 */
$(document).ready(function() {
    $("#mainsubscripcion").submit(function(e) {
        e.preventDefault();
        param = {
            "nombre": $("#mainsubscripcion input:eq(0)").val(),
            "email": $("#mainsubscripcion input:eq(1)").val()
        };

        $.ajax({
            url: "../include/peticiones.php?op=1",
            data: param,
            type: 'POST',
            beforeSend: function() {
                $("#mensaje").html('<p><i class="fa fa-spinner fa-spin"></i> Enviando mensaje...</p>').fadeIn();
            }
        }).done(function(data) {

            $("#mensaje").html("<p class='text-success'>" + data + "</p>").delay(3000).fadeOut();

            document.getElementById("main-contact-form").reset();

        });
    });
});


