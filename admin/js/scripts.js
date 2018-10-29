$(document).ready(function(){


    //Editor CKEDITOR
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );

    //Rest of the code here

    //Bulk Media Selecting (select all boxes)
   
    $('#selectAllBoxes').click(function(event){

        if(this.checked){
            $('.checkBoxes').each(function(){

                this.checked = true;

            });
        } else {
            $('.checkBoxes').each(function(){

                this.checked = false;

            });
        }

    });

});

