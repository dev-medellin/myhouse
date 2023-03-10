<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data table</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
              <div class="float-right" style="margin: -0px 10px 0px 10px;padding: 0px 10px 0px 10px;">
                <button type="button" class="btn btn-success btn-sm insertProject" data-toggle="modal" data-target="#importMaterials">
                    Import Material 
                </button>
              </div>
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Material Category</th>
                    <th>Material Name</th>
                    <th>Type</th>
                    <th>Est. Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                  </tr>
                </thead>
                <tbody>
                  @isset($data['mateials_exp'])
                    @foreach($data['mateials_exp'] as $mat)
                      <tr>
                        <td>{{$mat->id}}</td>
                        <td>{{$mat->material_category}}</td>
                        <td>{{$mat->material_name}}</td>
                        <td>{{$mat->material_pack}}</td>
                        <td>₱{{number_format($mat->material_price, 2, '.',',')}}</td>
                        <td>{{$mat->material_quantity}}</td>
                        <td>{{$mat->total_price}}</td>
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
  @include('contructor.modal.insert_import')