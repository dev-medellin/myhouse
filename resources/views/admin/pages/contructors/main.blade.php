<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
          <h5>Customers Contractor Applications</h5>
        </div>
        <div style="padding: 15px 30px 10px 10px;">
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-information-tab" data-toggle="pill" href="#pending" role="tab" aria-controls="pending" aria-selected="true">Pending (<?php echo count($data['contructors']['pending']);?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-materials-tab" data-toggle="pill" href="#pills-materials" role="tab" aria-controls="pills-materials" aria-selected="true">Approved (<?php echo count($data['contructors']['approved']);?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="declined-tab" data-toggle="pill" href="#declined" role="tab" aria-controls="declined" aria-selected="true">Declined (<?php echo count($data['contructors']['declined']);?>)</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="padding: 0% !important;max-height :800px;min-height :800px; overflow:auto">
                <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                    <div class="media">
                        <div class="media-body">
                            @include('admin.pages.contructors.contents.pending')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="pills-materials" role="tabpanel" aria-labelledby="pills-materials-tab">
                    <div class="media">
                        <div class="media-body">
                           @include('admin.pages.contructors.contents.approved')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="declined" role="tabpanel" aria-labelledby="declined-tab">
                    <div class="media">
                        <div class="media-body">
                           @include('admin.pages.contructors.contents.declined')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
                    <div class="media">
                    <div class="media-body">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>