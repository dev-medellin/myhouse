<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="media">
            <div class="media-body">
                <div class="col-12" style="padding: 0px 40px 38px 0px;">
                 <!-- <button class="btn btn-md btn-outline-danger modify-btn" style="float: right;">Edit</button> -->
                </div>
                <form id="forms-edit">
                @csrf
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>First Name</label>&nbsp;<span class="empty_text text-danger"></span>
                            <input class="form-control" id="fname" name="fname" value="<?php echo (auth()->user() != null ? auth()->user()->fname : '');?>" required title="This field should not be left blank." readonly data-inputmask="'alias': 'text'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Last Name</label>&nbsp;<span class="empty_text text-danger"></span>
                            <input class="form-control" id="lname" name="lname" value="<?php echo (auth()->user() != null ? auth()->user()->lname : '');?>" required  title="This field should not be left blank." readonly data-inputmask="'alias': 'text'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Phone:</label>&nbsp;<span class="empty_text text-danger"></span>
                            <input class="form-control" id="phone" name="phone" value="<?php echo (auth()->user() != null ? auth()->user()->contact : '');?>" required title="This field should not be left blank." readonly data-inputmask-alias="(+63) 9999-9999-99"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Email:</label>&nbsp;<span class="empty_text text-danger"></span>
                            <input class="form-control" id="email" name="email" value="<?php echo (auth()->user() != null ? auth()->user()->email : '');?>" required title="This field should not be left blank." readonly data-inputmask="'alias': 'email'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group" id="change_btn">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group" id="save_btn">
                        </div>
                    </div>
                </form>
                <button class="btn btn-md modify-btn" id="edit_cancel" data-status="edit" style="outline: none;"><i class="fa fa-edit"></i> Edit</button>
            </div>
        </div>
    </div>
        <div class="tab-pane fade" id="pills-favorite" role="tabpanel" aria-labelledby="pills-favorite-tab">
            <div class="media">
            <div class="media-body">
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
                                <td>{{$proj->type}}</td>
                                <td>₱{{number_format($proj->proj_est_price, 2, '.',',')}}</td>
                                <td>
                                  <a href="{{url('/projects/'.$proj->proj_slug)}}" class="btn btn-primary "">View</a>
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
    <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="media">
        <img class="mr-3 w-25 rounded" src="../assets/images/samples/300x300/14.jpg" alt="sample image">
        <div class="media-body">
            <p>
                I'm really more an apartment person. This man is a knight in shining armor. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. You all right, Dexter?
            </p>
            <p>
                I'm generally confused most of the time. Cops, another community I'm not part of. You're a killer. I catch killers. Hello, Dexter Morgan.
            </p>
        </div>
        </div>
    </div> -->
</div>