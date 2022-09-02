
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="z-index:10000; !important">
  <div class="modal-dialog" role="document" style="height: 100%">
    <div class="modal-content" style="top : 30%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <ul  class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Login</a>
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
                <img class="img-responsive center-block d-block mx-auto" src="{{ asset('assets/images/logo/logo2.png') }}" alt="sample image" style="margin-top: 20px">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
              <img class="img-responsive center-block d-block mx-auto" src="{{ asset('assets/images/logo/logo2.png') }}" alt="sample image" style="margin-top: 20px">
                    <br>
                    <form id="registerForm">
                      @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpasswordInput" name="confirmpasswordInput" placeholder="Password">
                        </div>
                        {{-- <div class="form-group mt-4 mb-4">
                          <div class="captcha">
                              <span>{!! captcha_img() !!}</span>
                              <button type="button" class="btn btn-danger" class="reload" id="reload">
                                  ↻
                              </button>
                        </div> --}}
                      </div>
                      <div class="form-group mb-4">
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
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