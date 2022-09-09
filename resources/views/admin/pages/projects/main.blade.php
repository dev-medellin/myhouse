<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                      <div class="float-right" style="margin: -0px 10px 0px 10px;padding: 0px 10px 0px 10px;">
                        <button type="button" class="btn btn-success btn-rounded btn-icon insertProject">
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Project Area</th>
                            <th>Project Type</th>
                            <th>Est. Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @isset($data['projects'])
                            @foreach($data['projects'] as $proj)
                              <tr>
                                <td>{{$proj->id}}</td>
                                <td>{{$proj->proj_name}}</td>
                                <td>{{$proj->proj_area}} sqm.</td>
                                <td>{{$proj->type}}</td>
                                <td>$1500</td>
                                <td>
                                  <label class="badge <?php echo ($proj->status == 'active' ? 'badge-success' : 'badge-danger');?>">{{ucfirst($proj->status)}}</label>
                                </td>
                                <td>
                                  <a href="javascript:void()" class="btn btn-outline-primary modify-proj" data-id="{{$proj->id}}">View</a>
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