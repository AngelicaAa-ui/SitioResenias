function enviarFormulario(event) {
    event.preventDefault(); 
    var formData = new FormData(document.getElementById("formulario"));

    $.ajax({
        url: "procesarActualizar.php",  
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $('#mensaje').html(response);
        },
            error: function() {
                $('#mensaje').html("<p style='color:red;'>Hubo un error al procesar la información.</p>");
            }
        });
    }