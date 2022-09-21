(function($) {
    'use strict';
    if ($("#summernoteExample").length) {
        $('#summernoteExample').summernote({
            height:650,                 // set editor height
            minHeight: 650,             // set minimum height of editor
            maxHeight: 650,       
            disableResizeEditor: true,
        });
    }
})(jQuery);

$(document).ready(function(){
    var projID = $('#projID').val();
    var   pathUrl            = base_url+"/admin/projects/getmaterials",
      method            	 = "POST",
      dtype 	             = "json";

    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: {projID:projID},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){  
            if(response.status == "SUCCESS"){
                $('#summernoteExample').summernote('code',response.data.materials)
            }
        }
    });
});