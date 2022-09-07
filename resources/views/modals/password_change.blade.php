<div class="modal fade" id="passwordchangeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-status="false" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index: 15000;">
    <div class="modal-dialog" role="document" style="height:100%">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body" id="modBody" data-status="hidden">
            <form id="changePassForm">
              <div class="verification_form">
                  <h2>Change Password</h2>
                  <p>Please enter the new password for:
                      <br>
                  <span class="high_text" id="email_text_changepass"></span>
                  </p> 
                  <label class="code_field">
                    <div class="fields input_text">
                      <input type="password" placeholder="Password" name="new_password" id="new_password" style="outline: none;" autofocus="autofocus" class="" required>
                    </div>
                    <div class="fields input_text">
                      <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" style="outline: none;" autofocus="autofocus" class="" required>
                    </div>
                  </label>
                  <button type="submit" class="button-primary-full">Verify Email Address</button>
                  <p><span class="high_text" id="return_text_error"></span></p>
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