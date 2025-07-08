'use strict';

class Certificate {
        constructor(){
              this.$elementError = $('#errorText');
              this.GetId();
        }

        certificatesQuery(object_id){
                
                $.ajax({
                        url: 'consulta',
                        method:'get',
                        dataType: 'json', 
                        data: object_id,
                
                        success: function(data) {
                                  if (data == null) {
                                        $('#main-table').hide();
                                        $('#errorText').text("No se encontraron registros.");
                                } else {
                                        $('#errorText').text('');
                                        $('#tablaDatos').empty();
                                        $('#main-table').show();

                                        var row = document.createElement("tr");

                                        row.innerHTML += `<td>${data.no_certificado}</td>`;
                                        row.innerHTML += `<td>${data.nombre}</td>`;
                                        row.innerHTML += `<td>${data.capacitacion}</td>`;
                                        row.innerHTML += `<td>${data.fecha}</td>`;
                                        row.innerHTML += `<td>
                                        <a href="${data.link_certificado}" target="_blank" class="btn btn-primary">
                                                Descargar certificado
                                        </a>
                                        </td>`;

                                        document.getElementById("tablaDatos").appendChild(row);

                               
                                }
                                /*
                                if(data == null){
                                        $('#main-table').hide();
                                        const error = "No se encontro registros"
                                        $('#errorText').text(error);  
                                }else{
                                        
                                       $('#errorText').text('');
                                       $('#tablaDatos').empty();
                                       $('#main-table').show();
                
                                        // Recorrer los datos y agregar filas a la tabla
                                        var tableData = document.getElementById("tablaDatos");
                                        var row = document.createElement("tr");
                                        for (var key in data) {
                                                var cell = document.createElement("td");
                                                cell.textContent = data[key];
                                                row.appendChild(cell);
                                        }
                                        tableData.appendChild(row); 
                                }*/
                        },
                        error: function(xhr, status, error) {
                                // Manejar los errores aquí
                                console.error(error,"mal");
                        }
                });     
        }

        GetId(){

                $('#send').on('click', function() {

                        var id = $('#identifier').val();
                        var object_id = {
                            identificador: id
                        };
                        this.certificatesQuery(object_id); 
                }.bind(this));
                
        }
}

const instance = new Certificate();

