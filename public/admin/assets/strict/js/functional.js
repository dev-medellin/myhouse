$(document).ready(function(){

    $('.insertProject').on('click', function(e){
        e.preventDefault();

        $('#insertProdMod').modal('show');
    })
});

var base_url = $('#url').val();

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
    var id = $('.modify-proj').data('id');

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
                // swal(
                //     `${response.status}`,
                //     `${response.message}`,
                //     'success'
                // )
                // setTimeout(() => {
                //     location.reload();
                // }, 3000)
            }else{
                // alert(response.message);
            }
        },error:function(){
            // $.toast({heading:"Failed",text:`Please fillup the missing attributes`,position:"bottom-right",icon:"error",showHideTransition:"slide",loaderBg:"#f2a654"})
        }
    });

})
