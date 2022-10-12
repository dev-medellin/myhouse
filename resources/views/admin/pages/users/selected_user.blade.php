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
                        <!-- <p>{{$data['users_info']['users']['fname'].' '.$data['users_info']['users']['lname']}}</p> -->
                        <!-- <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p> -->
                      </div>
                      <form action="">
                        <div class="py-4">
                          <p class="clearfix">
                            <span class="float-left"> Status </span>
                            <span class="float-right text-muted"> <input class="form-control <?php echo ($data['users_info']['users']['status'] != 'inactive' ? 'text-success font-weight-bold' : 'text-danger font-weight-bold') ?>" type="text" value="{{ucfirst($data['users_info']['users']['status'])}}" style="text-align: right;border:hidden;background-color:white;" readonly> </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Phone </span>
                            <span class="float-right text-muted"> <input class="form-control" type="text" value="{{$data['users_info']['users']['contact']}}" style="text-align: right;border:hidden;background-color:white;" readonly> </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Mail </span>
                            <span class="float-right text-muted"> Jacod@testmail.com </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Facebook </span>
                            <span class="float-right text-muted">
                              <a href="#">David Grey</a>
                            </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Twitter </span>
                            <span class="float-right text-muted">
                              <a href="#">@davidgrey</a>
                            </span>
                          </p>
                        </div>
                      </form>
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
                                <th>Order #</th>
                                <th>Purchased On</th>
                                <th>Customer</th>
                                <th>Ship to</th>
                                <th>Base Price</th>
                                <th>Purchased Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>2012/08/03</td>
                                <td>Edinburgh</td>
                                <td>New York</td>
                                <td>$1500</td>
                                <td>$3200</td>
                                <td>
                                  <label class="badge badge-info">On hold</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>2015/04/01</td>
                                <td>Doe</td>
                                <td>Brazil</td>
                                <td>$4500</td>
                                <td>$7500</td>
                                <td>
                                  <label class="badge badge-danger">Pending</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>2010/11/21</td>
                                <td>Sam</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-success">Closed</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>2016/01/12</td>
                                <td>Sam</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-success">Closed</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>2017/12/28</td>
                                <td>Sam</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-success">Closed</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>2000/10/30</td>
                                <td>Sam</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-info">On-hold</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>2011/03/11</td>
                                <td>Cris</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-success">Closed</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>2015/06/25</td>
                                <td>Tim</td>
                                <td>Italy</td>
                                <td>$6300</td>
                                <td>$2100</td>
                                <td>
                                  <label class="badge badge-info">On-hold</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>2016/11/12</td>
                                <td>John</td>
                                <td>Tokyo</td>
                                <td>$2100</td>
                                <td>$6300</td>
                                <td>
                                  <label class="badge badge-success">Closed</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>2003/12/26</td>
                                <td>Tom</td>
                                <td>Germany</td>
                                <td>$1100</td>
                                <td>$2300</td>
                                <td>
                                  <label class="badge badge-danger">Pending</label>
                                </td>
                                <td>
                                  <button class="btn btn-outline-primary">View</button>
                                </td>
                              </tr>
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