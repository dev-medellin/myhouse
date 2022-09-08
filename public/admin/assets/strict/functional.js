$(document).ready(function(){

    $('.insertProject').on('click', function(e){
        e.preventDefault();

        $('#insertProdMod').modal('show');
    })
});

var base_url = $('#url').val();

$('#projInserForm').on('submit', function(event){
    event.preventDefault();

    var   pathUrl            = base_url+"/admin/project/create",
      method            	 = "POST",
      dtype 	             = "json",
      rdata 	             = $(this).serialize(); 

    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: rdata,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){  
            if(response.status == "SUCCESS"){
                // alert(response.message);
                // $('#passwordModal').modal('hide');
                // $('#passwordchangeModal').modal('show');
                // $('#email_text_changepass').html(response.data.email)
                // setTimeout(() => {
                //     $(document.body).addClass('modal-open');
                // }, 1000)
            }else{
                // alert(response.message);
            }
            },
    });
});