<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index:10000;">
  <div class="modal-dialog" role="document" style="height: 100%">
    <div class="modal-content" style="top : 15%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
        <img class="img-responsive center-block d-block mx-auto" src="{{ asset('assets/images/logo/logo2.png') }}" alt="sample image" style="margin-top: 5%; margin-bottom : 10%">
          <ul  class="nav nav-tabs nav-justified tab-login"  role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Register</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade" id="home-1" role="tabpanel" aria-labelledby="home-tab">
            <div class="media">
              <div class="media-body">
                <div class="content">
                    <br>
                    <form id="loginForm">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" id="emailInputLog" name="emailInputLog" type="email" value="" placeholder="Email" required title="This field should not be left blank." />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="passwordInputLog" name="passwordInputLog" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <span class="float-right">Forgot your password? <a href="javascript:void(0);" class="text-danger" id="resetPassword" style="text-decoration: underline;">click here!</a></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
            <div class="media">
            <!-- <img class="mr-3 w-25 rounded" src="{{ asset('assets/images/logo/logo2.png') }}" alt="sample image"> -->
              <div class="media-body">
              <div class="content">
                    <br>
                    <form id="registerForm">
                      @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input class="form-control" id="fname" name="fname" value="" placeholder="Email" required title="This field should not be left blank." data-inputmask="'alias': 'text'" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input class="form-control" id="lname" name="lname" value="" placeholder="Email" required title="This field should not be left blank." data-inputmask="'alias': 'text'" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" type="email" id="emailInput" name="emailInput" value="" placeholder="Email" required title="This field should not be left blank." />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpasswordInput" name="confirmpasswordInput" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>