<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                      <div class="float-right" style="margin: -0px 10px 0px 10px;padding: 0px 10px 0px 10px;">
                        <button type="button" class="btn btn-success insertProject">
                        <i class="fa fa-download"></i> Download
                        </button>
                      </div>
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Customer Name</th>
                            <th>Created At</th>
                          </tr>
                        </thead>
                        <tbody>
                          @isset($data['wish'])
                            @foreach($data['wish'] as $w)
                              <tr>
                                <td>{{$w->wishID}}</td>
                                <td>{{$w->proj_name}}</td>
                                <td>{{$w->fname." ".$w->lname}}</td>
                                <td>{{date('F d, Y', strtotime($w->projCreated))}}</td>
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