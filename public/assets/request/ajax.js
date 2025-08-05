'use strict';

class Certificate {
        constructor(){
              this.$elementError = $('#errorText');
              this.GetId();
        }

        certificatesQuery(object_id){

                $.ajax({
                        url: '/certificates_query',
                        method:'post',
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
                        },
                        error: function(xhr, status, error) {
                                console.error(`Error AJAX:
                                Status: ${status} | 
                                Código de estado HTTP: ${xhr.status} | 
                                Texto estado: ${xhr.statusText} | 
                                Mensaje de error: ${error} | 
                                Respuesta completa: ${xhr.responseText}`);
                        }
                });     
        }

        GetId(){

                $('#send').on('click', function() {

                        var id = $('#identifier').val();
                        const path_parts = window.location.pathname.split('/');
                        const country = path_parts[path_parts.length-1];

                        var object_id = {
                            identificador: id,
                            country: country
                        };

                        console.log("Datos del objeto:", object_id);
                        this.certificatesQuery(object_id); 
                }.bind(this));
                
        }
}

const instance = new Certificate();

