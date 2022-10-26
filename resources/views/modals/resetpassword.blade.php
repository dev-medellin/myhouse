<div class="modal fade" id="resetpassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index: 10000;">
    <div class="modal-dialog" role="document" style="height:100%">
      <div class="modal-content" style="top : 30%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
            <form id="resetEmailPass">
            @csrf
              <div class="verification_form">
                  <h2>Reset Password Request!</h2> 
                    <p>Please enter the email and we will send you code
                  </p> 
                  <label class="code_field">
                        <input type="text" class="resend_Email_code" id="resetlPassmail" name="resetlPassmail" required="required" style="font-weight: 100;font-size: 18px;"> 
                  </label>
                  <button type="submit" class="button-primary-full">Verify Email Address</button>
                  <p><span class="high_text" id="return_text_reset"></span></p>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>