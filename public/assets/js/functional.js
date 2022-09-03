$(document).ready(function(){

   
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

   $('.loginBtn').on('click',function(event){
    event.preventDefault();
    $('#verifyModal').modal('hide');
    $('#home-tab').trigger('click')
    // Put the results in a div
    $('#loginModal').modal('show');
   });
   

   // $('#reload').click(function () {
   //    $.ajax({
   //        type: 'GET',
   //        url: 'reload-captcha',
   //        success: function (data) {
   //            $(".captcha span").html(data.captcha);
   //            $(".captcha span").load();
   //        }
   //    });
   // });


   $('#registerForm').on('submit', function(event){
      event.preventDefault();

      var validation        =  false;
      email                 = $('#emailInput').val(),
      password              = $('#passwordInput').val(),
      confirmpassword       = $('#confirmpasswordInput').val(),
      captcha               = $('#captcha').val()
      pathUrl               = "user/register",
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

   var pathUrl              = "user/verify",
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
      
         var   pathUrl               = "user/login",
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
         var pathUrl              = "user/logout",
         method            	 = "GET",
         dtype 	             = "json";
         $.ajax({
            type: method,  
            url: pathUrl,
            dataType: dtype,
            success: function(response){
               if(response.status == "SUCESS"){
                  setTimeout(function(){// wait for 5 secs(2)
                     location.reload(); // then reload the page.(3)
                }, 2000); 
               }
            }
            });
   })
   
});
