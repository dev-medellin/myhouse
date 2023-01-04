// const { functionsIn } = require("lodash");

$(document).ready(function(){

   var base_url = $('#url').val();
   var text_contact = '';

   sessionStorage.clear()
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
                     setTimeout(() => {
                        $(document.body).addClass('modal-open');
                     }, 1000)
                  }else{

                     if(response.data.status == 'exist'){
                        $('#home-tab').trigger('click')
                        $('#registerForm')[0].reset();
                        // Put the results in a div
                        $('#loginModal').modal('show');
                        $('#emailInputLog').val(response.data.email);

                     }else{
                        $('#verifyModal').modal('show');
                        $('#loginModal').modal('hide');
                        $('#return_text').html(response.message);
                        $('#email_text').html(response.data.email);
                        $('#emailVerify').val(response.data.email);
                        setTimeout(() => {
                           $(document.body).addClass('modal-open');
                        }, 1000)
                     }
                  }
               },
               error: function(X) { 
                  alert('please fill-up the inputs')
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
                  if(response.status == "SUCCESS"){
                     $('#verifyModal').modal('hide');
                     $('#email_text').html('');
                     $('#emailVerify').val('');
                     $('#return_text').html('');
                     $('#home-tab').trigger('click')
                     $('#registerForm')[0].reset();
                     // Put the results in a div
                     $('#loginModal').modal('show');
                     $('#emailInputLog').val(response.data.email);
                     alert(response.message);
                     // location.reload();
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
                     localStorage.removeItem('text_contact');
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

   $('#contructorForm').on('submit', function(e){
      e.preventDefault();

      var   pathUrl               = base_url+"/users/contractor/applied",
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
                  window.location.href = base_url+"/users/contractor/message";
               }else{
                  alert(response.message);
               }
            },
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
   $(document).on('click','#resetPassword',function(e){
      e.preventDefault();
      $('#loginModal').modal('hide');
      $('#resetpassModal').modal('show');
   });
   $('#resetEmailPass').on('submit',function(e){
      e.preventDefault();
      var emailLogreset = $('#resetlPassmail').val();
      var   pathUrl         = base_url+"/passwordReset",
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
            $('#resetpassModal').modal('hide');
            $('#passwordModal').modal('show');
            $('#email_text_pass').html(emailLogreset)
            $('#emailVerifyReset').val(emailLogreset)
          }
      });
   });
   $(document).on('click','#pass_btn',function(e){
      e.preventDefault();
      document.getElementById("changepass").innerHTML = "Sending to you email......";
      var timeleft = 10;

      var   pathUrl         = base_url+"/users/getcode",
      method            	 = "POST",
      dtype 	             = "json";

      $.ajax({
         type: method,  
         url: pathUrl,
         dataType: dtype,
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         success: function(response){  
               if(response.status == "SUCCESS"){
                  var downloadTimer = setInterval(function(){
                     if(timeleft <= 0){
                        clearInterval(downloadTimer);
                        $('#email_text_pass').html(response.data.email);
                        $('#passwordModal').modal('show');
                        document.getElementById("changepass").innerHTML = 'Request <a href="javascript:void();" id="pass_btn" style="color:red">Change Password</a> here!';
                     } else {
                        document.getElementById("changepass").innerHTML = "Sending code to your email <span style='color:red' >" + timeleft + "</span> seconds remaining";
                     }
                     timeleft -= 1;
                     }, 1000);
                  // alert(response.message);
               }else{
                  alert(response.message);
               }
            },
      });

   });

});

   setTimeout(() => {
      $('#room-slider').css('display','block');
   console.log('test')
   }, 2000);

$("#searchForm").on('submit',function() {
   $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
   return true; // ensure form still submits
});

$("#searchBtn").on('click',function(){
      var bed_room   = $('#bed_room').val();
      var bath_room  = $('#bath_room').val();
      var stories    = $('#stories').val();
      var price_min    = $('.price_min').val();
      var price_max    = $('.price_max').val();
      var sq_area    = $('#sq_area').val();

      localStorage.setItem('bed_room', bed_room);
      localStorage.setItem('bath_room', bath_room);
      localStorage.setItem('stories', stories);
      localStorage.setItem('price_min', price_min);
      localStorage.setItem('price_max', price_max);
      localStorage.setItem('sq_area', sq_area);
      localStorage.setItem('searchStats', true);
});

// $('#clearSearch').on('click', function(e){
//    e.preventDefault();
//    localStorage.removeItem('bed_room');
//    localStorage.removeItem('bath_room');
//    localStorage.removeItem('stories');
//    localStorage.removeItem('price_min');
//    localStorage.removeItem('price_max');
//    localStorage.removeItem('sq_area');
//    localStorage.removeItem('searchStats');

//    $('#bed_room').val("");
//    $('#bath_room').val("");
//    $('#stories').val("");
//    $('#sq_area').val("");

//    var check_url = window.location.href;

//    if(check_url == base_url+"/projects"){
//       window.location.href = base_url+"/projects";
//    }
// });



var base_url = $('#url').val();
$('#verifyPassForm').on('submit', function(event){
   event.preventDefault();

var   pathUrl               = base_url+"/sendPassVerify",
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
               alert(response.message);
               $('#passwordModal').modal('hide');
               $('#passwordchangeModal').modal('show');
               $('#email_text_changepass').html(response.data.email)
               $('#changePassEmails').val(response.data.email)
               setTimeout(() => {
                  $(document.body).addClass('modal-open');
               }, 1000)
            }else{
               alert(response.message);
            }
         },
   });
});

$('.reset_code').on('click',function(e){
   e.preventDefault()

   var get_email = $('.resend_Email_code').val();
   $('.reset_text').html('Sending verification code please wait .....');
   $('.reset_text').remove();
   $('.count_text').append('<p class="reset_texts"></p>');
   var   pathUrl               = base_url+"/resendVerification",
   method            	 = "POST",
   dtype 	             = "json",
   rdata 	             = {get_email:get_email}; 

   $.ajax({
      type: method,  
      url: pathUrl,
      dataType: dtype,
      data: rdata,
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
      success: function(response){  
            if(response.status == "SUCCESS"){
               var timeleft = 59;
               var downloadTimer = setInterval(function(){
               if(timeleft <= 0){
                  clearInterval(downloadTimer);
                  // $('.reset_text').html('resend email verification');
                  $('.count_text').append('<a href="javascript:void(0);" class="high_text reset_code reset_text">resend email verification</a>.');
               } else {
                  $('.reset_texts').html("Resend after "+timeleft + " seconds remaining");
               }
               timeleft -= 1;
               }, 1500);
            }else{
               alert(response.message);
               $('.reset_code').html('resend email verification');
            }
         },
   });

})

$('#changePassForm').on('submit', function(event){
      event.preventDefault();
      var password         = $('#new_password').val(),
          confirm_password = $('#confirm_password').val();
      if(password != confirm_password){
         alert('Password not match!');
      }else{
         var   pathUrl               = base_url+"/changepassword",
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
                  alert(response.message);
                  $('#passwordchangeModal').modal('hide');
                  $('#edit_cancel').trigger('click');
               }else{
                  $('#return_text_error').html(response.message)
                  setTimeout(() => {
                     $('#return_text_error').html('')
                  }, 4000)
               }
            },
         });
      }
});

$('#wishList').on('click', function(e){
   e.preventDefault();
   var   pathUrl               = base_url+"/check/user",
   method            	 = "POST",
   dtype 	             = "json";
   // rdata 	             = $(this).serialize(); 

   $.ajax({
   type: method,  
   url: pathUrl,
   dataType: dtype,
   // data: rdata,
   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
   success: function(response){  
         if(response.status == "SUCCESS"){
            postWishList();
         }else{
            $('#home-tab').trigger('click')
            $('#loginModal').modal('show');
         }
      },
   });

});

function postWishList(){
   var projectID = $('#projectID').val();
  var   pathUrl               = base_url+"/users/wishlist",
   method            	 = "POST",
   dtype 	             = "json",
   rdata 	             = {projectID:projectID}; 

   $.ajax({
   type: method,  
   url: pathUrl,
   dataType: dtype,
   data: rdata,
   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
   success: function(response){  
         if(response.status == "SUCCESS"){
            
         }else{
            
         }
      },
   });
}


function timerset(){
      var timeleft = 10;
      var downloadTimer = setInterval(function(){
      if(timeleft <= 0){
         clearInterval(downloadTimer);
         document.getElementById("countdown").innerHTML = "Finished";
      } else {
         document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
      }
      timeleft -= 1;
      }, 1000);
}

$('#contactForm').on('submit',function(e){

   text_contact = $('#message').val();

   e.preventDefault();
   var   pathUrl               = base_url+"/check/user",
   method            	 = "POST",
   dtype 	             = "json";
   // rdata 	             = $(this).serialize(); 

   $.ajax({
   type: method,  
   url: pathUrl,
   dataType: dtype,
   // data: rdata,
   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
   success: function(response){  
         if(response.status == "SUCCESS"){
            getContact();
         }else{
            localStorage.setItem('text_contact', text_contact);
            $('#home-tab').trigger('click')
            $('#loginModal').modal('show');
         }
      },
   });
});
function getContact(){
   var   pathUrl               = base_url+"/contact",
   method            	       = "POST",
   dtype 	                   = "json",
   rdata 	                   = $('#contactForm').serialize(); 



   $.ajax({
   type: method,  
   url: pathUrl,
   dataType: dtype,
   data: rdata,
   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
   success: function(response){  
         if(response.status == "SUCCESS"){
            $('#message').val("");

         }else{
            
         }
      },
   });
}


// $('#searchForm').on('submit',function(e){
//    e.preventDefault();

//       var   pathUrl               = base_url+"/projects",
//       method            	 = "GET",
//       dtype 	             = "json",
//       rdata 	             = $(this).serialize(); 

//       $.ajax({
//          type: method,  
//          url: pathUrl,
//          dataType: dtype,
//          data: rdata,
//          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
//          success: function(response){  
//                if(response.status == "SUCCESS"){
//                   alert(response.message);
//                   rel
//                }else{
//                   alert(response.message);
//                }
//             },
//       });
// })

{/* <div id="countdown"></div> */}


(function($) {
   'use strict';
 
   // initializing inputmask
   $(":input").inputmask();
 
 })(jQuery);