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
                    <input type="text" class="form-control" id="proj_area" name="proj_area">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Project Type</label>
                     <select id="proj_type" name="proj_type" class="form-control">
                        <option value="1">Type1</option> 
                        <option value="2">Type2</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Bed Room</label>
                        <input type="text" class="form-control" id="bed_room" name="bed_room">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Bathroom</label>
                        <input type="text" class="form-control" id="bath_room" name="bath_room">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label for="exampleSelectGender">Story</label>
                        <input type="text" class="form-control" id="story" name="story">
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