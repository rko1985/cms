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

    //Loader

    var div_box = "<div id='load-screen'><div id='loading'></div></div>";

    $("body").prepend(div_box);

    $('#load-screen').delay(700).fadeOut(600, function(){
        $(this).remove();
    });


});

function loadUsersOnline() {

    $.get("functions.php?onlineusers=result", function(data){

        $(".usersonline").text(data);

    });

}

setInterval(function(){

    loadUsersOnline();

},500);

