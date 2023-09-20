$(document).ready(function(){
        $('#resultado').hide();

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
                        $('#resultado').show();

                        // Recorrer los datos y agregar filas a la tabla
                        var tableData = document.getElementById("tablaDatos");
                        var row = document.createElement("tr");
                        for (var key in data) {
                                var cell = document.createElement("td");
                                cell.textContent = data[key];
                                row.appendChild(cell);
                        }
                        tableData.appendChild(row);

                        },
                        error: function(xhr, status, error) {
                                // Manejar los errores aquí
                                console.error(error,"mal");
                        }
                });
        });
});