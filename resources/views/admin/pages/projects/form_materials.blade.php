<form id="EditProForm">
    <div id="summernoteExample">
    </div>
    <div class="p-1 m-1 float-right">
        <button type="submit" id="submitBTN" class="btn btn-danger btn-icon-text"><i class="ti-check-box btn-icon-prepend"></i>Submit Materials</button>
    </div>
    <input class="form-control" type="hidden" id="projID" name="projID" value="{{$data['info']->id}}" />
    <input class="form-control" type="hidden" id="projType" name="projType" value="{{$data['info']->proj_type}}" />
</form>

