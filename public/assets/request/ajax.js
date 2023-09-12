$(document).ready(function(){
        $('#send').on('click', function(){
                var id = $('#identifier').val();
              

                var object_id = {
                        identificador: id
                };

                
                $.ajax({
                        url: 'consulta',
                        method:'GET',
                        dataType: 'json', 
                        data: object_id,
                        success: function(data) {

                        $('#tablaDatos').empty();

                        // Recorrer los datos y agregar filas a la tabla
                        for (var key in data) {
                            var row = '<tr>' +
                                '<td>' + data[key] + '</td>' +
                                '<td>' + data[key] + '</td>' +
                                '<td>' + data[key] + '</tdg>' +
                                '<td>' + data[key]  + '</td>' +
                                '</tr>';

                            $('#tablaDatos').append(row);

                        }
                            },
                        error: function(xhr, status, error) {
                                // Manejar los errores aquí
                                console.error(error,"mal");
                        }
                });
        });
});