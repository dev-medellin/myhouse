<div class="card">
    <div class="modal fade" id="approved_testi" tabindex="-1" role="dialog" aria-labelledby="approved_testi" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-danger">Contructor Application</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p id="approve_name"></p>
            <p id="approve_message"></p>
            <p id="approve_contact"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success approveBtn">Approve</button>
            <button type="button" class="btn btn-danger declineBtn" data-dismiss="modal">Decline</button>
        </div>
        </div>
    </div>
    </div>
    <div class="card-body">
    <h4 class="card-title">Customers Applications</h4>
    <div class="row">
        <div class="col-12">
        <div class="table-responsive">
            <div class="float-right" style="margin: -0px 10px 0px 10px;padding: 0px 10px 0px 10px;">
                <!-- <button type="button" class="btn btn-success btn-rounded btn-icon insertProject">
                <i class="ti-plus"></i>
                </button> -->
            </div>
            <table id="order-listing-declined" class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Date Declined</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['contructors']['declined'] as $testi)
                <tr>
                    <td>{{ $testi->id;}}</td>
                    <td>{{ $testi->comp_email;}}</td>
                    <td>{{ $testi->comp_contact;}}</td>
                    <td><label class="badge text-white <?php echo ($testi->status == 'declined' ? 'badge-danger' : 'badge-success');?>">{{ucfirst($testi->status)}}</label></td>
                    <td>{{date('M d, Y', strtotime($testi->updated_at));}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </div>
</div>