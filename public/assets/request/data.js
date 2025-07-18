
    $(document).ready(function () {
        $('#miModal').modal('hide');

        $('#abrirModal').click(function () {
            $('#miModal').modal('show');
        });

        $('#guardarCambiosBtn').click(function () {
            // Obtener los datos del formulario
            var formData = $('#editarForm').serialize();
            console.log(formData);

            $.ajax({
                url: 'actualizar',
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Manejar la respuesta del controlador aquí
                    // Puedes mostrar un mensaje de éxito o error
                    console.log(response);
                    $('#miModal').modal('hide');
                },
                error: function (error) {
                    // Manejar errores aquí
                    console.error(error);
                }
            });
        });
    });
