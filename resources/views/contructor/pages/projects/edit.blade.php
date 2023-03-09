<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            Update Information for [<span class="text-danger font-weight-bold">{{ucwords(strtolower($data['info']->proj_name), '\',. ')}}</span>]
            <span class="float-right">Current Status: <?php echo $data['info']->status == 'active' ? '<span class="text-success font-weight-bold">Active</span>' : '<span class="text-danger font-weight-bold">Inactive</span>'; ?></span>
        </div>
        <div style="padding: 15px 30px 10px 10px;">
        <?php echo $data['info']->status == 'active' ? '<button type="button" data-id="'.$data['info']->id.'" data-status="inactive" id="statusBTN" class="btn btn-danger btn-icon-text float-right"><i class="fa fa-eye-slash btn-icon-prepend"></i>Hide</button>' : '<button type="button" id="statusBTN" data-id="'.$data['info']->id.'" data-status="active" class="btn btn-success btn-icon-text float-right"><i class="fa fa-eye btn-icon-prepend"></i>Show</button>'; ?>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-information-tab" data-toggle="pill" href="#pills-information" role="tab" aria-controls="pills-information" aria-selected="true">Informations</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="pills-materials-tab" data-toggle="pill" href="#pills-materials" role="tab" aria-controls="pills-materials" aria-selected="true">Materials</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" id="pills-new_materials-tab" data-toggle="pill" href="#pills-new_materials" role="tab" aria-controls="pills-new_materials" aria-selected="true">Materials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-selected="false">Upload Image</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="padding: 0% !important;max-height :800px;min-height :800px; overflow:auto">
                <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                    <div class="media">
                        <div class="media-body">
                            @include('contructor.pages.projects.forms.information')
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade show" id="pills-materials" role="tabpanel" aria-labelledby="pills-materials-tab">
                    <div class="media">
                        <div class="media-body">
                            @include('contructor.pages.projects.forms.form_materials')
                        </div>
                    </div>
                </div> -->
                <div class="tab-pane fade show" id="pills-new_materials" role="tabpanel" aria-labelledby="pills-new_materials-tab">
                    <div class="media">
                        <div class="media-body">
                            @include('contructor.pages.projects.forms.new_form_materials')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
                    <div class="media">
                    <div class="media-body">
                        @include('contructor.pages.projects.forms.image_upload')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>