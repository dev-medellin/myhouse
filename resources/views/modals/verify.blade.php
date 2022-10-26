<div class="modal fade" id="verifyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index: 10000;">
    <div class="modal-dialog" role="document" style="height:100%">
      <div class="modal-content" style="top : 30%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
            <form id="verifyForm">
            @csrf
              <div class="verification_form">
                  <h2>Verification Required</h2> 
                  <p>Please enter the verification code sent to:
                      <br>
                  <span class="high_text" id="email_text"></span>
                  </p> 
                  <label class="code_field">
                          <input type="text" maxlength="4" id="verifyCode" name="verifyCode" required="required"> 
                          <input type="hidden" class="resend_Email_code" id="emailVerify" name="emailVerify" required="required"> 
                          <span style="top: 44% !important;">••••</span>
                  </label>
                  <button type="submit" class="button-primary-full">Verify Email Address</button>
                  <p><span class="high_text" id="return_text"></span></p>
                  <div class="foot_note">
                      <p>Didn’t receive email? Please check your Spam folder or<br>
                        <p class="count_text">
                          <a href="javascript:void(0);" class="high_text reset_code reset_text">resend email verification</a>.
                        </p>
                      </p>
                  </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>