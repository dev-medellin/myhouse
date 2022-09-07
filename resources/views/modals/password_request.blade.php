<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index: 10000;">
    <div class="modal-dialog" role="document" style="height:100%">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
            <form id="verifyPassForm">
            @csrf
              <div class="verification_form">
                  <h2>Request Verification Code Sent!</h2>
                  <p style="color:red !important">Verification Code Required to change password</p>
                  <p>Please enter the verification code sent to:
                      <br>
                  <span class="high_text" id="email_text_pass"></span>
                  </p> 
                  <label class="code_field">
                          <input type="text" maxlength="4" id="verifyCode" name="verifyCode" required="required"> 
                          <span style="top:54% !important">••••</span>
                  </label>
                  <button type="submit" class="button-primary-full">Verify Email Address</button>
                  <p><span class="high_text" id="return_text"></span></p>
                  <div class="foot_note">
                      <p>Didn’t receive email? Please check your Spam folder or<br>
                          <a href="javascript:;" class="high_text">resend email verification</a>.
                      </p>
                  </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>