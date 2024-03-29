$(document).ready(function(){
    var base_url = $('#url').val();
var     projID = $('#projID').val(),
        projType = $('#projType').val();

var input_count = 0,
    attr_count = 0,
    material_fetch = null;
    attrs_fetch = null;
    var   pathUrl            = base_url+"/contructor/projects/new_materials",
      method            	 = "POST",
      dtype 	             = "json",
      rdata 	             = {projID:projID, projType:projType}; 


    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        async: false,
        data:rdata,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){  
            input_count = response.data.input_count;
            attr_count = response.data.attr_count;
            material_fetch = response.data.materials
            attrs_fetch = response.data.attrs

            console.log(response.data.attrs)

            // response.forEach(function callback(value, index){

            // })

            // if(response.status == "SUCCESS"){
            //     swal(
            //         'Great!',
            //         'Project Added Successfully!.',
            //         'success'
            //     )
            //     // setTimeout(() => {
            //     //     $('#insertProdMod').modal('hide'); 
            //     //     location.reload();
            //     // }, 1000)
            //     // alert(response.message);
            //     // $('#passwordModal').modal('hide');
            //     // $('#passwordchangeModal').modal('show');
            //     // $('#email_text_changepass').html(response.data.email)
            //     // setTimeout(() => {
            //     //     $(document.body).addClass('modal-open');
            //     // }, 1000)
            // }else{
            //     // alert(response.message);
            // }
            },
    });
var input = (input_count ? input_count : 0);
var attrs = (attr_count ? attr_count : 0);
let mat = (material_fetch ? material_fetch : []),
    mattr = (attrs_fetch ? attrs_fetch : []);

$('.insertMaterialRow').on('click',function(e){
    e.preventDefault()

    input++;
    var objval = document.getElementById('materials_input').value;
    var new_title = $.fn.titleCase(objval);
    if(mat){
        var elementPos = mat.map(function(x) {return x.title; }).indexOf(new_title);
        if(elementPos != -1){
            $('.error_message').html('Materials Already Exist!!');
            setTimeout(() => {
                $('.error_message').html('');  
            },3000)
            return;
        }
    }

    if(objval === ''){
        $('.error_message').html('Input some materials first!!');
        setTimeout(() => {
            $('.error_message').html('');  
        },3000)
        console.log('empty')
        return;
    }

    if(material_fetch != null){
        let text = input.toString();
        mat.push({id : text, title : new_title})
    }else{
        mat.push({id : input, title : new_title})
    }

        var objTo = document.getElementById('material_list')
        // var btndisplay = document.getElementById('BtnDisplay')
        // var btntest = document.createElement("div");
        var divtest = document.createElement("div");
        divtest.setAttribute("class", " mb-3 form-group");
        divtest.setAttribute("id","removeclass"+input);
        divtest.innerHTML = '<h4 class="card-title">'+new_title+'  <span><a href="javascript:void(0);" class="text-danger font-weight-bold" onlick="$.fn.remove_education_fields('+input+');">[Remove Material]</a></span><div class="float-right"><span><a href="javascript:void(0);" class="text-success font-weight-bold" onclick="$.fn.insert_attr('+input+');">[Insert Attribute]</a></span></div></h4>';
        objTo.appendChild(divtest)
        $.fn.insert_attr(input);
        // btntest.innerHTML = '<button type="submit" class="btn btn-primary mr-2">Submit</button><button class="btn btn-light">Cancel</button>';
        // btndisplay.appendChild(btntest)

});


$.fn.titleCase = function titleCase(str) {
    var splitStr = str.toLowerCase().split(' ');
    for (var i = 0; i < splitStr.length; i++) {
        // You do not need to check if i is larger than splitStr length, as your for does that for you
        // Assign it back to the array
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
    }
    // Directly return the joined string
    return splitStr.join(' '); 
}

$.fn.insert_attr  = function insert_attr(ruid){
    attrs++;
    var objval = document.getElementById('materials_input').value;
    var new_title = $.fn.titleCase(objval);
    if(attrs_fetch.length > 0){
        console.log(attrs_fetch + ' noooo')
        let text = ruid.toString();
        let text2 = attrs.toString();
        mattr.push({id : text2, material_id : text, material_kind : '',material_by: '', price : '', quantity : ''});
    }else{
        console.log(attrs_fetch + ' yes')
        mattr.push({id : attrs, material_id : ruid, material_kind : '', material_by: '', price : '', quantity : ''});
    }
    // mattr.push({id : attrs, marterial_id : ruid, material_kind : '', price : '', quantity : ''});
    // console.log(mattr)
    // console.log("mattr")
    // var index = mat.findIndex(x => x.title == new_title);
        // for (var i = 0; i < 1; i++) {
        //     // You do not need to check if i is larger than splitStr length, as your for does that for you
        //     // Assign it back to the array
        //     arr.push({
        //         firsName: firstName,
        //         lastName: lastName
        //       });
        //     index != -1 ? mat.push([{title_:"tests1",price_:'wasas',quantity_ : 'okas'}]) : console.log("object already exists")
        // }
    console.log(mattr)
    console.log("mattr")
    // mattr.push({matertials : new_title,price : '',quantity : ''});
    var ojtest = document.getElementById('removeclass'+ruid);
    var ojdivtest = document.createElement("div");
    var slugifys = slugify(objval);
    ojdivtest.setAttribute("class", " mb-3 form-group removeData"+attrs);
    ojdivtest.innerHTML = '<br> <div class="form-group row"><div class="col-4"><label>Material</label><input class="form-control materials_title featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /></div><div class="col-4"><label>Materials Pack By</label><input type="text" class="form-control materials_by featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /></div><div class="col-4"><label>Price</label><input type="number" class="form-control materials_price featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /></div><div class="col-4"><label>Quantity</label><input type="number" class="form-control materials_quantity featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /><span class="float-right"><a href="javascript:void(0);" class="text-danger font-weight-bold" onclick="$.fn.remove_data_fields('+ attrs +');">[Remove Attribute]</a></span></div></div> ';
    // <label for="exampleInputEmail1" class="form-label">Attribute No'+attrs+'</label><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_price" aria-describedby="emailHelp"></div><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_quant" aria-describedby="emailHelp"></div><button class="btn btn-danger" type="button" onclick="remove_data_fields('+ attrs +');">-</button>
    ojtest.appendChild(ojdivtest);

}


$.fn.remove_education_fields  = function remove_education_fields(rid) {
    console.log(rid)
    $('#removeclass'+rid).remove();
    --input;
    $('.error_message').html('Data removed, click submit to save changes!');
    setTimeout(() => {
        $('.error_message').html('');  
    },3000)

}

$.fn.remove_data_fields = function remove_data_fields(rid) {
    console.log(rid)
    console.log(mattr)
    $('.removeData'+rid).remove();
    const objWithIdIndex = mattr.findIndex((obj) => obj.id === rid);
    console.log(objWithIdIndex)
    mattr.splice(rid, 1);
    --attrs;
    $('.error_message').html('Data removed, click submit to save changes!');
    setTimeout(() => {
        $('.error_message').html('');  
    },3000)
    console.log(mattr)
}


$('#materials_form').on('submit', function(e){
    e.preventDefault();

    // let result = [...mattr].map(([id, marterial_id, material_kind, price, quantity]) => ({ id, marterial_id, material_kind, price, quantity}))
    var result = new Map(mattr.map(i => [i.id, i.material_id, i.material_kind, i.price, i.quantity]));
    // var foundIndex = mattr.findIndex(x => x.id == item.id);
    //     items[foundIndex] = item;
    
    if(mattr.length > 0){
        for(var i = 0; i < mattr.length; i++) {
            var ThisInput = $(".featurematerials");
            var data_mat = ThisInput.data('mat');
            var data_ids = ThisInput.data('id');
            var materials_val = $('.materials_title[data-id="'+ mattr[i].id +'"]').val();//.replace(/,/g, "");
            var prince_val = $('.materials_price[data-id="'+ mattr[i].id +'"]').val();//.replace(/,/g, ""); 
            var by_val = $('.materials_by[data-id="'+ mattr[i].id +'"]').val();//.replace(/,/g, "");       
            var quantity_val = $('.materials_quantity[data-id="'+ mattr[i].id+'"]').val();
            console.log(materials_val, prince_val, quantity_val,data_mat+' id' , mattr[i].id)
            console.log("data")
                mattr[i].material_kind = materials_val;
                mattr[i].price = prince_val;
                mattr[i].material_by = by_val
                mattr[i].quantity = quantity_val;
        }
    }

    console.log(mattr);
    // mattr.forEach(function callback(value, index) {

    //     var ThisInput = $(".featurematerials");
    //     var data_mat = ThisInput.data('mat');
    //     var materials_val = $('.materials_title[data-id="'+value.id +'"]').val();//.replace(/,/g, "");
    //     var prince_val = $('.materials_price[data-id="'+value.id +'"]').val();//.replace(/,/g, "");        
    //     var quantity_val = $('.materials_quantity[data-id="'+value.id+'"]').val();
    //         // if(value === undefined) {
    //     mattr.push({id : value.id, marterial_id : data_mat, material_kind : materials_val, price : prince_val, quantity : quantity_val});
    //     console.log(mattr)
    //     console.log("mattr")
    //         // }else{
    //         //     if(value.id = value.marterial_id){
    //         //         value.material_kind = materials_val;
    //         //         value.price = prince_val;
    //         //         value.quantity = quantity_val;
    //         //     }
    //         // }
    //   });
      
    var projID = $('#projID').val(),
        projType = $('#projType').val();

    const composed = mat.map(d => {
        return {
          ...d,
          attributes_materials: mattr.filter(({material_id}) => d.id === material_id)
        }
      })

      console.log(composed)

      var   pathUrl            = base_url+"/contructor/projects/send_materials",
      method            	 = "POST",
      dtype 	             = "json",
      rdata 	             = {data:composed, projID:projID, projType:projType}; 

    $.ajax({
        type: method,  
        url: pathUrl,
        dataType: dtype,
        data: rdata,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        success: function(response){  
            if(response.status == "SUCCESS"){
                swal(
                    'Great!',
                    'Project Added Successfully!.',
                    'success'
                )
                setTimeout(() => {
                    location.reload();
                }, 1000)
                // alert(response.message);
                // $('#passwordModal').modal('hide');
                // $('#passwordchangeModal').modal('show');
                // $('#email_text_changepass').html(response.data.email)
                // setTimeout(() => {
                //     $(document.body).addClass('modal-open');
                // }, 1000)
            }else{
                // alert(response.message);
            }
            },
    });


});


function slugify(objval){
    var slugify = objval
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '_')
                    .replace(/^-+|-+$/g, '');

    return slugify;
}
})
