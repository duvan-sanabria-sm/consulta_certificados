'use strict';
class Excel {

    constructor(){

        //Property
        this.inputFile = $("#file");
        this.form = "";

        //Method
        this.getFile();
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
              $('#successText').text(response);
            },
            error: function(error) {
                console.error('Error en la solicitud:', error);
              }
        });
    }

}
const file = new Excel();