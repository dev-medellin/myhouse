    <div class="card-body">
        <h4 class="card-title">Upload New Images</h4>
        <div class="dropzone" name="file" id="my-awesome-dropzone"></div>

        <hr>
        @isset($data['images'])
        <h2>Preview Current Images</h2>
        <div class="card-columns">
            @foreach($data['images'] as $key)
                <div class="card">
                    <img src="{{url('storage/').$key->image_path}}" style="min-height:350px; max-height:350px; min-width:350px; max-width:500px"alt="Card image cap" class="card-img-top">
                    <div class="card-body">
                        <div class="float-left pb-3">
                            <div id="mybutton">
                                <form id="update_image">
                                    <input type="file" id="myfile" name="myfile"/>
                                    <input type="hidden" id="pic_id" name="pic_id" value="{{$key->id}}"/>
                                    Update Image
                                </form>
                            </div>
                        </div>
                        <div class="float-right pb-3">
                            <button type="button" data-id="{{$key->id}}" data-filename="{{$key->image_path}}" class="btn btn-danger btn-icon-text btnImgDel"><i class="ti-trash btn-icon-prepend"></i>                                                    
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        @endisset
    </div>
