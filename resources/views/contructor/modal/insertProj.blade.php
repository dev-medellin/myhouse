<div class="modal fade" id="insertProdMod" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" style="z-index:10000">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Insert New Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="projInserForm">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Project Name:</label>
                    <input type="text" class="form-control" id="proj_name" name="proj_name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Project Area:</label>
                    <input type="text" class="form-control" id="proj_area" name="proj_area" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Project Type</label>
                     <select id="proj_type" name="proj_type" class="form-control">
                        <option value="1">Single Stories</option> 
                        <option value="2">Two Stories</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Bed Room</label>
                        <input type="text" class="form-control" id="bed_room" name="bed_room" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Bathroom</label>
                        <input type="text" class="form-control" id="bath_room" name="bath_room" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Story</label>
                        <input type="text" class="form-control" id="story" name="story" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-lg-4 col-md-4">
                        <label for="property-bathroom">Fence</label>
                        <select id="fence" name="fence" class="form-control">
                            <option value="">Choose</option>
                            <option value="wood_fence">Wood Fence</option>
                            <option value="steel_fence">Steel Fence</option>
                            <option value="concrete_wall_fence">Concrete Wall Fence</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label for="property-bathroom">Roof</label>
                            <select id="roof" name="roof" class="form-control">
                                <option value="">Choose</option>
                                <option value="gable_roof">Gable Roof</option>
                                <option value="hip_roof">Hip Roof</option>
                                <option value="pyramid_roof">Pyramid Roof</option>
                                <option value="skillion_roof">Skillion Roof</option>
                                <option value="flat_roof">Flat Roof</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Description:</label>
                    <textarea class="form-control" id="proj_desc" name="proj_desc"></textarea>
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success">Insert Project</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
    </div>
</div>