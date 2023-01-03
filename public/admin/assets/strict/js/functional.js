$(document).ready(function(){

    var base_url = $('#url').val();

    $('.insertProject').on('click', function(e){
        e.preventDefault();
        var modals = $(this).data('modal');


        console.log(modals)
        switch(modals){

            case "contructor":
                window.location.href = `${base_url}/admin/contructor/create` 
            break;

            case "projects":
                $('#insertProdMod').modal('show'); 
            break;
            
        }
    })
    
});

$('#projInserForm').on('submit', function(event){
    event.preventDefault();

    var   pathUrl            = base_url+"/admin/projects/create",
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

$('.modify-proj').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');

var     pathUrl              = base_url+"/admin/projects/edit",
        method            	 = "POST",
        dtype 	             = "json",
        rdata 	             = {projID:id};
    
    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: rdata,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){ 
            if(response.status == "SUCCESS"){
                window.location.href = base_url+"/admin/projects/edit/"+response.data.slug;
            }else{
                window.location.href = base_url+"/admin/projects";
            }
        }
    });
});


$('#EditProForm').on('submit',function(e){
   e.preventDefault();
        if ($('#summernoteExample').summernote('isEmpty')){
            $.toast({
                heading: 'Editor is Empty',
                text: 'Please fillup the missing attributes',
                position: "bottom-right",
                icon: 'error',
                stack: false,
                loaderBg: '#f2a654'
              })
            return false;
        }else{
            var textareaValue = $('#summernoteExample').summernote('code');
            var form = $('#EditProForm').serializeArray();
            form.push({name: 'dataCode', value: textareaValue});

            var   pathUrl            = base_url+"/admin/projects/update",
            method            	 = "POST",
            dtype 	             = "json",
            rdata 	             = form; 

                $.ajax({
                    type: method,  
                    url: pathUrl,
                    dataType: dtype,
                    data: rdata,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
                    success: function(response){  
                        if(response.status == "SUCCESS"){
                            swal(
                                `${response.status}`,
                                `${response.message}`,
                                'success'
                            )
                            setTimeout(() => {
                                location.reload();
                            }, 3000)
                        }else{
                            // alert(response.message);
                        }
                    },error:function(){
                        // $.toast({heading:"Failed",text:`Please fillup the missing attributes`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
                    }
                });
        }

})


$('#statusBTN').on('click',function(e){
    e.preventDefault();

    var id = $(this).data('id');
    var status = $(this).data('status');

    var     pathUrl          = base_url+"/admin/projects/status",
        method            	 = "POST",
        dtype 	             = "json",
        rdata 	             = {projID:id,status:status};
    
    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: rdata,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){ 
            if(response.status == "SUCCESS"){
                $.toast({heading:"Success",text:`${response.message}`,position:"bottom-right",icon:"success",showHideTransition:"slide",loaderBg:"#f96868"})
                setTimeout(() => {
                    location.reload();
                }, 3000)
            }else{
                $.toast({heading:"Failed",text:`${response.message}`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
            }
        }
    });
});

$('.btnImgDel').on('click', function(e){
    e.preventDefault();

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3f51b5',
        cancelButtonColor: '#ff4081',
        confirmButtonText: 'Great ',
        buttons: {
            confirm: {
                text: "Yes Please!",
                value: true,
                visible: true,
                className: "btn btn-primary",
                closeModal: true
            },
          cancel: {
            text: "Cancel",
            value: null,
            visible: true,
            className: "btn btn-danger",
            closeModal: true,
          },
        }
      }).then((result) => {
        if (result) {
                var id = $(this).data('id');
                var filename = $(this).data('filename');

                var     pathUrl          = base_url+"/admin/projects/delete/image",
                    method            	 = "POST",
                    dtype 	             = "json",
                    rdata 	             = {imgID:id,filename:filename};
                
                $.ajax({
                    type: method,  
                    url: pathUrl,
                    dataType: dtype,
                    data: rdata,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
                    success: function(response){ 
                        if(response.status == "SUCCESS"){
                            swal(
                                'Deleted!',
                                'Your Image has been deleted.',
                                'success'
                            )
                            setTimeout(() => {
                                location.reload();
                            }, 3000)
                        }else{
                            $.toast({heading:"Failed",text:`${response.message}`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
                        }
                    }
                });
        }
       //success method
    });
})

$('#myfile').change(function(evt) {
    // alert($(this).val());


    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3f51b5',
        cancelButtonColor: '#ff4081',
        confirmButtonText: 'Great ',
        buttons: {
            confirm: {
                text: "Yes Please!",
                value: true,
                visible: true,
                className: "btn btn-primary",
                closeModal: true
            },
          cancel: {
            text: "Cancel",
            value: null,
            visible: true,
            className: "btn btn-danger",
            closeModal: true,
          },
        }
      }).then((result) => {
        if (result) {

            var formData = new FormData($('#update_image')[0]);
            var     pathUrl          = base_url+"/admin/projects/update/image",
                method            	 = "POST",
                dtype 	             = "json",
                rdata 	             = formData;

                console.log(formData);
            $.ajax({
                type: method,  
                url: pathUrl,
                dataType: dtype,
                processData : false,
                contentType: false,
                data: rdata,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
                success: function(response){ 
                    if(response.status == "SUCCESS"){
                        $.toast({heading:"Success",text:`${response.message}`,position:"bottom-right",icon:"success",showHideTransition:"slide",loaderBg:"#f96868"})
                        setTimeout(() => {
                            location.reload();
                        }, 3000)
                    }else{
                        $.toast({heading:"Failed",text:`${response.message}`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
                    }
                }
            });
        }
      });
});

$('#editInfoProj').on('submit', function(e){
    e.preventDefault();
    var formData = new FormData(this);

    var   pathUrl            = base_url+"/admin/projects/update/info",
    method            	 = "POST",
    dtype 	             = "json",
    rdata 	             = formData; 

    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: rdata,
        cache: false,
        contentType: false,
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){  
            if(response.status == "SUCCESS"){
                $.toast({
                    heading: 'Project Updated',
                    text: 'Project Changes are applied on live site!',
                    position: "bottom-right",
                    icon: 'success',
                    stack: false,
                    loaderBg: '#27B200'
                  })
                setTimeout(() => {
                    location.reload();
                }, 3000)
            }else{
                // alert(response.message);
            }
        },error:function(){
            // $.toast({heading:"Failed",text:`Please fillup the missing attributes`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
        }
    });

})

$('.logoutBtn').on('click', function(e){
    e.preventDefault();
    var pathUrl              = base_url+"/auth/logout",
    method            	 = "GET",
    dtype 	             = "json";
    $.ajax({
       type: method,  
       url: pathUrl,
       dataType: dtype,
       success: function(response){
          if(response.status == "SUCCESS"){
             alert(response.message);
             localStorage.removeItem('text_contact');
             setTimeout(function(){// wait for 5 secs(2)
                location.reload(); // then reload the page.(3)
          }, 2000); 
          }
       }
       });
})

var btn_status = $('#edit_cancel').data('status');
$('#edit_cancel').on('click', function(e){
      e.preventDefault();
      console.log(btn_status)
      if(btn_status == 'edit'){
         $(':input').removeAttr('readonly');
         $(this).html('<i class="fas fa-xmark"></i> Cancel');
         $(this).attr("data-status","cancel");
         $('#save_btn').append('<button class="btn btn-success" type="submit" id="saveBtn" style="outline: none;"><i class="fa fa-check"></i> Save</button>');
        return btn_status = 'cancel'
      }
      if(btn_status == 'cancel'){
         $(':input:not(.filter_search_data)').prop('readonly', true);
         $(this).html('<i class="fa fa-edit"></i> Edit');
         $(this).attr("data-status","edit");
         $('#saveBtn').remove();
         $('#changepass').remove();
         return btn_status = 'edit'
      }
});

var btn_approved = $('#approveBtn').data('id');
$('#approveBtn').on('click', function(e){
    e.preventDefault();
    const myJSON = JSON.stringify(btn_approved);
    const myObj = JSON.parse(myJSON);
    $('#approve_name').html(`Company Name : <br>${myObj.comp_name}`);
    $('#approve_message').html(`Email: <br>${myObj.comp_email}`);
    $('#approve_contact').html(`ContactNumber: <br>${myObj.comp_contact}`);
    $('#approved_testi').modal('show');
});

$('.approveBtn').on('click', function(e){
    e.preventDefault();
    postStatusTeti('approved');
})

function postStatusTeti(status){
    const myJSON = JSON.stringify(btn_approved);
    const myObj = JSON.parse(myJSON);
    var pathUrl              = base_url+"/admin/contructors/status",
    method            	 = "POST",
    dtype 	             = "json",
    rdata 	             = {status:status,tesID:myObj.id,uid:myObj.comp_uid}; 
    $.ajax({
       type: method,  
       url: pathUrl,
       dataType: dtype,
       data : rdata,
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       success: function(response){
          if(response.status == "SUCCESS"){
            $.toast({
                heading: 'Project Updated',
                text: `${response.message}`,
                position: "bottom-right",
                icon: 'success',
                stack: false,
                loaderBg: '#27B200'
              })
             localStorage.removeItem('text_contact');
             setTimeout(function(){// wait for 5 secs(2)
                location.reload(); // then reload the page.(3)
          }, 2000); 
          }
       }
       });
}

$('#save_btn').on('click',function(){
    $("#forms-edit input").each(function(){
       if ($.trim($(this).val()).length == 0){
           $(".empty_text").addClass("(This field is required!)");
           isFormValid = false;
       }
       else{
          $(".empty_text").html("");
       }
   });
 })

 $('#forms-edit').on('submit',function(e){
    e.preventDefault();

    $(".required input").each(function(){
       if ($.trim($(this).val()).length == 0){
           $(".error_empty").html("highlight");
           isFormValid = false;
       }
       else{
           $(this).removeClass("highlight");
       }
   });
   
    var   pathUrl               = base_url+"/admin/users/update",
    method            	 = "POST",
    dtype 	             = "json",
    rdata 	             = $(this).serialize(); 

    $.ajax({
       type: method,  
       url: pathUrl,
       dataType: dtype,
       data: rdata, 
       success: function(response){  
             if(response.status == "SUCCESS"){
                alert(response.message);
                setTimeout(function(){// wait for 5 secs(2)
                   location.reload(); // then reload the page.(3)
             }, 1000);
             }else{
                alert(response.message);
             }
          },
    });
 });