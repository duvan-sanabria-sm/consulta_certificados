'use strict';
class Excel {

    constructor(){

        //Property
        this.inputFile = $("#file");
        this.form = "";

        //Method
        this.getFile();

        this.Downoload_report();
    }

    getFile(){
        const self = this;

        self.inputFile.on("change", (event) => {

            if(this.inputFile.length > 0){
                $('#errorText').text('');
                this.files = event.target.files[0];
            }
        });


        $('#btn-send').on("click",() => {

            var value = this.inputFile.val();
            
            if($.trim(value)==''){

                $('#errorText').text('Ambos campos son requeridos.');

            }else{
                 $('#errorText').text('');

                this.form = new FormData();
                this.form.append('excel_file',this.files);
           
                if(this.form.has('excel_file')){
                    this.insert();    
                }
                
            }
        }); 
    }

    insert() {

        $.ajax({
            url: 'certificados',
            type: 'post',
            data: this.form,
            processData: false,
            contentType: false,
            success: function(response){
              $('#successText').text(response.message);
            },
            error: function(xhr) {
                const response = xhr.responseJSON;
                console.error('Error en la solicitud:', response?.message);
                $('#errorText').text(response?.message|| 'Ocurrió un error inesperado');
              }
        });
    }

    Downoload_report() {

        $('#click_downoload').on('click', function (e){

            e.preventDefault();

            $.ajax({
                url: 'descarga',
                method: 'POST',
                xhrFields: {responseType: 'blob'},
                processData: false,
                contentType: false,
                success: function (data, status, xhr) {
                        
                    const blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                    const disposition = xhr.getResponseHeader('Content-Disposition');
                    let fileName = "certificados.xlsx";
    
                    if (disposition && disposition.indexOf('filename=') !== -1) {
                            fileName = disposition.split('filename=')[1].replace(/['"]/g, '').trim();
                    }

                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = fileName;
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
            },
             error: function (xhr) {
                console.error("Error al descargar:", xhr);
                $('#errorText').text('Error al descargar el reporte.');
            }
        
            });


        });


    }

    



}
const file = new Excel();