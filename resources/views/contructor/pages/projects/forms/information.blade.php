<div class="card-body">
<form class="forms-sample" id="editInfoProj">
        <div class="form-group row">
            <div class="col-lg-4 col-md-4 mt-4">
                <label for="exampleInputName1">Project Name</label>
                <input type="hidden" name="proj_id" id="proj_id" value="<?php echo $data['info']['id'] ?>">
                <input type="text" class="form-control" id="proj_name" name="proj_name" placeholder="Name" value="<?php echo isset($data['info']['proj_name']) ? $data['info']['proj_name'] :''; ?>">
            </div>
            <div class="col-lg-4 col-md-4 mt-4">
                <label for="exampleSelectGender">Type</label>
                <select class="form-control" id="proj_type" name="proj_type" style="color:black;">
                    <option value="1" <?php echo isset($data['info']['proj_type']) && $data['info']['proj_type'] == 1 ? "selected" :''; ?> >Single Storey</option>
                    <option value="2" <?php echo isset($data['info']['proj_type']) && $data['info']['proj_type'] == 2 ? "selected" :''; ?> >Two Storey</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-4 mt-4">
                <label for="exampleInputEmail3">Project Estimated Price</label>
                <input type="text" class="form-control" id="proj_est_price" name="proj_est_price" placeholder="square ft." value="<?php echo isset($data['info']['proj_est_price']) ? $data['info']['proj_est_price'] :''; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="exampleInputEmail3">Project Area</label>
                <input type="text" class="form-control" id="proj_area" name="proj_area" placeholder="square ft." value="<?php echo isset($data['info']['proj_area']) ? $data['info']['proj_area'] :''; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="exampleInputEmail3">Project Bed Room</label>
                <input type="text" class="form-control" id="proj_bed_room" name="proj_bed_room" placeholder="square ft." value="<?php echo isset($data['info']['bed_room']) ? $data['info']['bed_room'] :''; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="exampleInputEmail3">Project Bathroom</label>
                <input type="text" class="form-control" id="proj_bath_room" name="proj_bath_room" placeholder="square ft." value="<?php echo isset($data['info']['bath_room']) ? $data['info']['bath_room'] :''; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="exampleInputEmail3">Project Storey</label>
                <input type="text" class="form-control" id="proj_stories" name="proj_stories" placeholder="square ft." value="<?php echo isset($data['info']['stories']) ? $data['info']['stories'] :''; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="property-bathroom">Fence</label>
                    <select id="fence" name="fence" class="form-control">
                        @if($data['info']['fence'] != NULL)
                            <option  value="">Choose</option>
                            <option  <?php echo $data['info']['fence'] == "wood_fence" ? 'selected' : '' ?> value="wood_fence">Wood Fence</option>
                            <option  <?php echo $data['info']['fence'] == "steel_fence" ? 'selected' : '' ?> value="steel_fence">Steel Fence</option>
                            <option  <?php echo $data['info']['fence'] == "concrete_wall_fence" ? 'selected' : '' ?> value="concrete_wall_fence">Concrete Wall Fence</option>
                        @else
                            <option  value="">Choose</option>
                            <option  value="wood_fence">Wood Fence</option>
                            <option  value="steel_fence">Steel Fence</option>
                            <option  value="concrete_wall_fence">Concrete Wall Fence</option>
                        @endif
                    </select>
            </div>
            <div class="col-lg-3 col-md-3 mt-4">
                <label for="property-bathroom">Roof</label>
                    <select id="roof" name="roof" class="form-control">
                        @if($data['info']['roof'] != NULL)
                            <option  value="">Choose</option>
                            <option value="">Choose</option>
                                <option <?php echo $data['info']['roof'] == "gable_roof" ? 'selected' : '' ?> value="gable_roof">Gable Roof</option>
                                <option <?php echo $data['info']['roof'] == "hip_roof" ? 'selected' : '' ?> value="hip_roof">Hip Roof</option>
                                <option <?php echo $data['info']['roof'] == "pyramid_roof" ? 'selected' : '' ?> value="pyramid_roof">Pyramid Roof</option>
                                <option <?php echo $data['info']['roof'] == "skillion_roof" ? 'selected' : '' ?> value="skillion_roof">Skillion Roof</option>
                                <option <?php echo $data['info']['roof'] == "flat_roof" ? 'selected' : '' ?> value="flat_roof">Flat Roof</option>
                        @else
                            <option  value="">Choose</option>
                                <option value="">Choose</option>
                                <option value="gable_roof">Gable Roof</option>
                                <option value="hip_roof">Hip Roof</option>
                                <option value="pyramid_roof">Pyramid Roof</option>
                                <option value="skillion_roof">Skillion Roof</option>
                                <option value="flat_roof">Flat Roof</option>
                        @endif
                    </select>
            </div>
            <div class="col-lg-6 col-md-6 mt-4">
                <label>Thumbnail upload</label>
                <input type="file" name="file" id="file" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4">
                <label>Thumbnail Display</label>
                <div class="mt-3">
                    <img src="<?php echo isset($data['info']['thumbnail']) ? url('thumbnail/'.$data['info']['thumbnail'].'') :''; ?>" alt="thumbnail" width="300" height="300" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-4">
                <label for="exampleTextarea1">Project Description</label>
                <textarea class="form-control" id="proj_desc" name="proj_desc" rows="12"><?php echo isset($data['info']['proj_description']) ? $data['info']['proj_description'] :''; ?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
</form>
</div>