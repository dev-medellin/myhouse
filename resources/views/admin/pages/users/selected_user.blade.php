<div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="{{url('web_images/dummy-user-img.png')}}" alt="profile" class="img-lg rounded-circle mb-3" style="max-width:200px; max-height: 200px; width:100%; height:100%"/>
                        <h3>{{$data['users_info']['users']['fname'].' '.$data['users_info']['users']['lname']}}</h3>
                      </div>
                      <div class="mt-4">
                        <form id="forms-edit">
                          @csrf
                          <input type="hidden" name="user_id" id="user_id" value="{{$data['users_info']['users'] != null ? $data['users_info']['users']['id'] : ''}}">
                                <div class="form-group">
                                    <label>First Name</label>&nbsp;<span class="empty_text text-danger"></span>
                                    <input class="form-control" id="fname" name="fname" value="<?php echo ($data['users_info']['users'] != null ? $data['users_info']['users']['fname'] : '');?>" required title="This field should not be left blank." readonly data-inputmask="'alias': 'text'" />
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>&nbsp;<span class="empty_text text-danger"></span>
                                    <input class="form-control" id="lname" name="lname" value="<?php echo ($data['users_info']['users'] != null ? $data['users_info']['users']['lname'] : '');?>" required  title="This field should not be left blank." readonly data-inputmask="'alias': 'text'" />
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>&nbsp;<span class="empty_text text-danger"></span>
                                    <input class="form-control" id="phone" name="phone" value="<?php echo ($data['users_info']['users'] != null ? $data['users_info']['users']['contact'] : '');?>" required title="This field should not be left blank." readonly data-inputmask-alias="(+63) 9999-9999-99"/>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>&nbsp;<span class="empty_text text-danger"></span>
                                    <input class="form-control" id="email" name="email" value="<?php echo ($data['users_info']['users'] != null ? $data['users_info']['users']['email'] : '');?>" required title="This field should not be left blank." readonly data-inputmask="'alias': 'email'" />
                                </div>
                                <div class="form-group" id="change_btn">
                                </div>
                                <div class="form-group" id="save_btn">
                                </div>
                        </form>
                        <button class="btn btn-md modify-btn" id="edit_cancel" data-status="edit" style="outline: none;"><i class="fa fa-edit"></i> Edit</button>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Wish List</h3>
                        </div>
                      </div>
                      <div class="profile-feed">
                        <div class="table-responsive">
                        <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>Project Name</th>
                            <th>Project Area</th>
                            <th>Project Type</th>
                            <th>Est. Price</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @isset($data['favorite'])
                            @foreach($data['favorite'] as $proj)
                              <tr>
                                <td>{{$proj->proj_name}}</td>
                                <td>{{$proj->proj_area}} sqm.</td>
                                <td>{{isset($proj->proj_type) && $proj->proj_type == 1 ? 'Single Stories' : 'Two Stories'}}</td>
                                <td>₱{{number_format($proj->proj_est_price, 2, '.',',')}}</td>
                                <td>
                                  <a href="{{url('/projects/'.$proj->proj_slug)}}" class="btn btn-primary">View</a>
                                  <a href="javascript:void(0);" class="btn btn-danger remove_proj" data-id="{{$proj->id}}">Remove</a>
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
            </div>
          </div>
        </div>