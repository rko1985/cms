$(document).ready(function(){


    //Editor CKEDITOR
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );

    //Rest of the code here

});

