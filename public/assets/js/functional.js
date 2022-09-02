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
      pathUrl               = "api/user/register",
      method            	 = "POST",
      dtype 	             = "json",
      rdata 	             = $(this).serialize();

      if(confirmpassword != password){
         alert('password did not match')
      }else if(captcha == ''){
         alert('captcha is required')
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
               }else{
                  $('#verifyModal').modal('show');
                  $('#loginModal').modal('hide');
                  $('#return_text').html(response.message);
                  $('#email_text').html(response.data.email);
               }
            },
            error: function(X) { 
               console.log(X.responseJSON.errors.captcha[0])
            }       
        });
            // $btnLogin.val("Login").prop("disabled", false);
            // if(response.status == "success"){
            //    window.location.replace('index.php?page=document')
            // } else if(response.status == "logout"){
            //          $btnLogin.val("Logout").prop("disabled", false);
            //      }
            // else {
            //    swal.fire('Login Error!',`${response.message} `,'error');
            // }

      }
   });
});
