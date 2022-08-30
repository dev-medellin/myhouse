<!-- <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->
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
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<div class="modal-footer">
<script>
 $('#home-tab').trigger('click')
</script>