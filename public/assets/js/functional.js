$(document).ready(function(){

   var base_url = $('#url').val();
   
   //#region URL Function
   $('#pills-profile-tab').trigger('click')
   //#endregion

   function ajaxRequest (rUrl, rmethod, rtype, rdata, upload){
      var attr = {
            url:  rUrl,
            type: rmethod,
            dataType: rtype,
            data: rdata,
      }; 

      if (upload){
            attr = Object.assign(attr, {
               contentType:false,
               cache: false,
               processData: false
            });
      };

      return $.ajax(attr);	
   }
   //#region AuthFunction
      $('.loginBtn').on('click',function(event){
      event.preventDefault();
      $('#verifyModal').modal('hide');
      $('#home-tab').trigger('click')
      // Put the results in a div
      $('#loginModal').modal('show');
      });
      
      $('#registerForm').on('submit', function(event){
         event.preventDefault();

         var validation        =  false;
         email                 = $('#emailInput').val(),
         password              = $('#passwordInput').val(),
         confirmpassword       = $('#confirmpasswordInput').val(),
         captcha               = $('#captcha').val()
         pathUrl               = base_url+"/auth/register",
         method            	 = "POST",
         dtype 	             = "json",
         rdata 	             = $(this).serialize();

         if(confirmpassword != password){
            alert('password did not match')
         }else {
            
            $.ajax({
               type: method,  
               url: pathUrl,
               dataType: dtype,
               data: rdata, 
               success: function(response){  
                  if(response.status == "SUCESS"){
                     $('#loginModal').modal('hide');
                     $('#verifyModal').modal('show');
                     $('#return_text').html(response.message);
                     $('#email_text').html(response.data.email);
                     $('#emailVerify').val(response.data.email);
                  }else{
                     $('#verifyModal').modal('show');
                     $('#loginModal').modal('hide');
                     $('#return_text').html(response.message);
                     $('#email_text').html(response.data.email);
                     $('#emailVerify').val(response.data.email);
                  }
               },
               error: function(X) { 
                  console.log(X.responseJSON.errors.captcha[0])
               }       
            });
         }
      });

      $('#verifyForm').on('submit', function(e){
         e.preventDefault();

      var pathUrl              = base_url+"/auth/verify",
         method            	 = "POST",
         dtype 	             = "json",
         rdata 	             = $(this).serialize();
         $.ajax({
            type: method,  
            url: pathUrl,
            dataType: dtype,
            data: rdata, 
            success: function(response){  
                  if(response.status == "SUCESS"){
                     $('#verifyModal').modal('hide');
                     $('#email_text').html('');
                     $('#emailVerify').val('');
                     $('#return_text').html('');
                     alert(response.message);
                  }else{
                     alert(response.message);
                  }
               },
         
            });
      });

      $('#loginForm').on('submit',function(e){
         e.preventDefault();
         
            var   pathUrl               = base_url+"/auth/login",
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
                           }, 2000);
                           }else{
                              alert(response.message);
                           }
                        },
                  });
      });

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
                     setTimeout(function(){// wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                  }, 2000); 
                  }
               }
               });
      })
   //#endregion AuthFunction


   //#region ProfileEdit
   var btn_status = $('#edit_cancel').data('status');
   $('#edit_cancel').on('click', function(e){
         e.preventDefault();
         console.log(btn_status)
         if(btn_status == 'edit'){
            $(':input').removeAttr('readonly');
            $(this).html('Cancel');
            $(this).attr("data-status","cancel");
            $('#save_btn').append('<button class="btn btn-success" type="submit" id="saveBtn" style="outline: none;"><i class="fa fa-check"></i> Save</button>');
            $('#change_btn').append('<span id="changepass">Request <a href="javascript:void();" id="pass_btn" style="color:red">Change Password</a> here!</span>');
           return btn_status = 'cancel'
         }
         if(btn_status == 'cancel'){
            $(':input').prop('readonly', true);
            $(this).html('<i class="fa fa-edit"></i> Edit');
            $(this).attr("data-status","edit");
            $('#saveBtn').remove();
            $('#changepass').remove();
            return btn_status = 'edit'
         }
   });

   //#endregion ProfileEdit

   $('#forms-edit').on('submit',function(e){
      e.preventDefault();
      var   pathUrl               = base_url+"/users/update",
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
   var staus = $('#modBody').data('status');
   $(document).on('click','#pass_btn',function(e){
      e.preventDefault();
      $('#passwordModal').modal('show');
      if(staus =='hidden'){
         return staus = 'display'
      }
      if(staus =='display'){
         return staus = 'hidden';
      }
   });

});
$('#verifyPassForm').on('submit', function(event){
   event.preventDefault();
   $('#passwordModal').modal('hide');
   $('#passwordchangeModal').modal('show');
});



(function($) {
   'use strict';
 
   // initializing inputmask
   $(":input").inputmask();
 
 })(jQuery);