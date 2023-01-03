<div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="<?php echo isset($data['self']['comp_profile']) ? url('uploads/profiles/'.$data['self']['comp_profile'].'') :''; ?>" alt="profile" class="img-lg rounded-circle mb-3" style="max-width:200px; max-height: 200px; width:100%; height:100%"/>
                        <h3>About Me</h3>
                      </div>
                      <div class="mt-4">
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="d-flex justify-content-between">
                        <div>
                            <h4>{{$data['self']['comp_name']}}</h4>
                          <span>Company Name</span>
                        </div>
                      </div>
                      <div class="profile-feed">
                          <form class="forms-sample" id="profileContruct">
                                  <div class="form-group row">
                                      <div class="col-lg-12 col-md-12 mt-4">
                                          <div class="col-lg-6 col-md-6 mt-4">
                                              <label>Profile upload</label>
                                              <input type="file" name="comp_prof_file" id="comp_prof_file" class="file-upload-default">
                                              <div class="input-group col-xs-12">
                                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                  <span class="input-group-append">
                                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                  </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6 mt-4">
                                          <label for="exampleInputName1">Project Names</label>
                                          <input type="text" class="form-control" id="comp_name" name="comp_name" placeholder="Name" value="{{$data['self']['comp_name']}}">
                                      </div>
                                      <div class="col-lg-6 col-md-6 mt-4">
                                          <label for="exampleInputName1">Project Email</label>
                                          <input type="text" class="form-control" id="comp_email" name="comp_email" placeholder="Name" value="{{$data['self']['comp_email']}}">
                                      </div>
                                      <div class="col-lg-6 col-md-6 mt-4">
                                          <label for="exampleInputName1">Project Contact</label>
                                          <input type="hidden" name="proj_id" id="proj_id" value="">
                                          <input type="text" class="form-control" id="comp_num" name="comp_num" placeholder="Name" value="{{$data['self']['comp_contact']}}">
                                      </div>
                                      <div class="col-lg-6 col-md-6 mt-4">
                                          <label for="exampleInputName1">Project Address</label>
                                          <input type="hidden" name="proj_id" id="proj_id" value="">
                                          <input type="text" class="form-control" id="comp_address" name="comp_address" placeholder="Name" value="{{$data['self']['comp_address']}}">
                                      </div>
                                      <div class="col-lg-12 col-md-12 mt-4">
                                          <label for="exampleTextarea1">Project Description</label>
                                          <textarea class="form-control" id="comp_desc" name="comp_desc" rows="12">{{$data['self']['comp_desc']}}</textarea>
                                      </div>
                                      <div class="col-lg-6 col-md-6 mt-4">
                                          <label>Watermark upload</label>
                                          <input type="file" name="water_mark_file" id="water_mark_file" class="file-upload-default">
                                          <div class="input-group col-xs-12">
                                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                              <span class="input-group-append">
                                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-5 col-md-5 mt-4">
                                          <label>Watermark Display</label>
                                          <div class="mt-3">
                                           <img src="<?php echo isset($data['self']['comp_watermark']) ? url('uploads/watermarks/'.$data['self']['comp_watermark'].'') :''; ?>" alt="thumbnail" width="300" height="300" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
                                          </div>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>