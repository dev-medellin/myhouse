$(document).ready(function(){

   $('.loginBtn').on('click',function(event){
    event.preventDefault();
    var  url ='modal/loginModal';

    var posting = $.get( url );
 
        // Put the results in a div
        posting.done(function( data ) {
            $('#exampleModal-4').modal('show');
            $("#modalBody").html(data).show();
        });
   });

   $('.registerBtn').on('click',function(event){
    event.preventDefault();
    var  url ='modal/registerModal';

    var posting = $.get( url );
 
        // Put the results in a div
        posting.done(function( data ) {
            $('#exampleModal-4').modal('show');
            $("#modalBody").html(data).show();
        });
   });

});

$('#checkData').on('click', function(e){
    e.preventDefault();
    alert();
})