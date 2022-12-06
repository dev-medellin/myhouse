<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                      <div class="float-right" style="margin: -0px 10px 0px 10px;padding: 0px 10px 0px 10px;">
                        <!-- <button type="button" class="btn btn-success btn-rounded btn-icon insertProject">
                          <i class="ti-plus"></i>
                        </button> -->
                      </div>
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>User Wishlist</th>
                            <th>Email Status</th>
                            <th>Est. Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @isset($data['users_list'])
                            @foreach($data['users_list'] as $user)
                              <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->fname.' '.$user->lname}}</td>
                                <td><?php echo ($user->wishlist > 0 ? $user->wishlist : 'No Wishlist') ?> </td>
                                <td><label class="badge <?php echo ($user->email_status == 'verified' ? 'badge-success' : 'badge-danger');?>">{{ucfirst($user->email_status)}}</label></td>
                                <td>₱600K</td>
                                <td>
                                  <label class="badge <?php echo ($user->status == 'active' ? 'badge-success' : 'badge-danger');?>">{{ucfirst($user->status)}}</label>
                                </td>
                                <td>
                                  <a href="{{url('/admin/users/edit/'.$user->id)}}" class="btn btn-outline-primary" data-id="{{$user->id}}">View</a>
                                </td>
                              </tr>
                            @endforeach
                          @endisset
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>