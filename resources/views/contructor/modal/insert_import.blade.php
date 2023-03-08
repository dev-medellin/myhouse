<div class="modal fade" id="importMaterials" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" style="z-index:10000">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Import/Export Materials</h4>
            </div>
            <div class="moda-body">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <div class="custom-file text-left">
                                <input type="hidden" name="proj_id" id="proj_id" value="<?php echo $data['info']['id'] ?>">
                                <input type="file" name="file" id="file" required class="file-upload-default" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled required placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                <!-- <input type="file" type="file" name="file" id="customFile" class="file-upload-default" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" /> -->
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Import data</button>
                        <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>