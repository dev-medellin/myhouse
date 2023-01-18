<div class="card-body">
    <div class="row">
        <div class="col-2">
            <label>Insert Material</label>
            <input class="form-control" id="materials_input" placeholder="Type what material is it" />
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-success btn-rounded btn-icon insertMaterialRow" style="margin-top: 85%;">
                <i class="ti-plus"></i>
            </button>
        </div>
    </div>
    <div id="marterials_row" style="margin-top: 5%;">
            <form class="forms-sample" id="materials_form">
            <input class="form-control" type="hidden" id="projID" name="projID" value="{{$data['info']->id}}" />
            <input class="form-control" type="hidden" id="projType" name="projType" value="{{$data['info']->proj_type}}" />
                <div id="material_list">
                    @foreach($data['materials'] as $key => $value)
                        <div class="mb-3 form-group" id="<?php echo 'removeclass'.$data['materials'][$key]['id']?>">
                            <h4 class="card-title">
                            {{$data['materials'][$key]['title']}} <span><a href="javascript:void(0);" class="text-danger font-weight-bold">[Remove Material]</a></span>
                                <div class="float-right">
                                    <span><a href="javascript:void(0);" class="text-success font-weight-bold" onclick="insert_attr(3);">[Insert Attribute]</a></span>
                                </div>
                            </h4>
                            <div class="mb-3 form-group removeData6">
                                <br />
                                @foreach($value['attributes_materials'] as $key_attr)
                                <div class="form-group row">
                                    <div class="col-4"><label>Material</label><input class="form-control materials_title featurematerials" data-id="6" data-mat="3" required="" /></div>
                                    <div class="col-4"><label>Price</label><input class="form-control materials_price featurematerials" data-id="6" data-mat="3" required="" /></div>
                                    <div class="col-4">
                                        <label>Quantity</label><input class="form-control materials_quantity featurematerials" data-id="6" data-mat="3" required="" />
                                        <span class="float-right"><a href="javascript:void(0);" class="text-danger font-weight-bold" onclick="remove_data_fields(6);">[Remove Attribute]</a></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <!-- <h4 class="card-title">Form mask
                        <span><a href="javascript:void(0);" class="text-danger font-weight-bold">[Remove Material]</a></span>
                        <div class="float-right">
                            <span>
                                <a href="javascript:void(0);" class="text-success font-weight-bold">[Insert Attribute]</a>
                            </span>
                        </div>
                    </h4> -->
                        <!-- <div class="form-group row">
                            <div class="col-4">
                                <label>Material</label>
                                <input class="form-control" />
                            </div>
                            <div class="col-4">
                                <label>Price</label>
                                <input class="form-control" />
                            </div>
                            <div class="col-4">
                                <label>Quantity</label>
                                <input class="form-control" />
                                <span class="float-right"><a href="javascript:void(0);" class="text-danger font-weight-bold">[Remove Attribute]</a></span>
                            </div>
                        </div> -->
                </div>
                <div id="BtnDisplay">
                 <button type="submit" class="btn btn-primary mr-2">Submit</button><button class="btn btn-light">Cancel</button>
                </div>
            </form>
        
    </div>
</div>