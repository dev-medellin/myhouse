$(document).ready(function(){
    var base_url = $('#url').val();
var     projID = $('#projID').val(),
        projType = $('#projType').val();

var input_count = 0,
    attr_count = 0,
    material_fetch = null;
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
var input = input_count;
var attrs = attr_count;
let mat = (material_fetch ? material_fetch : []),
    mattr = (attr_count ? material_fetch : []),;

    console.log(mat)
    console.log(mattr)

$('.insertMaterialRow').on('click',function(e){
    e.preventDefault()

    input++;
    var objval = document.getElementById('materials_input').value;
    var new_title = titleCase(objval);
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
        mat.push({id : input, title : new_title})
        var objTo = document.getElementById('material_list')
        // var btndisplay = document.getElementById('BtnDisplay')
        // var btntest = document.createElement("div");
        var divtest = document.createElement("div");
        divtest.setAttribute("class", " mb-3 form-group");
        divtest.setAttribute("id","removeclass"+input);
        divtest.innerHTML = '<h4 class="card-title">'+new_title+'  <span><a href="javascript:void(0);" class="text-danger font-weight-bold">[Remove Material]</a></span><div class="float-right"><span><a href="javascript:void(0);" class="text-success font-weight-bold" onclick="insert_attr('+input+');">[Insert Attribute]</a></span></div></h4>';
        objTo.appendChild(divtest)
        insert_attr(input);
        // btntest.innerHTML = '<button type="submit" class="btn btn-primary mr-2">Submit</button><button class="btn btn-light">Cancel</button>';
        // btndisplay.appendChild(btntest)

});


function titleCase(str) {
    var splitStr = str.toLowerCase().split(' ');
    for (var i = 0; i < splitStr.length; i++) {
        // You do not need to check if i is larger than splitStr length, as your for does that for you
        // Assign it back to the array
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
    }
    // Directly return the joined string
    return splitStr.join(' '); 
}

function insert_attr(ruid){
    attrs++;
    var objval = document.getElementById('materials_input').value;
    var new_title = titleCase(objval);
    mattr.push({id : attrs, marterial_id : ruid, material_kind : '', price : '', quantity : ''});
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

    // mattr.push({matertials : new_title,price : '',quantity : ''});
    var ojtest = document.getElementById('removeclass'+ruid);
    var ojdivtest = document.createElement("div");
    var slugifys = slugify(objval);
    ojdivtest.setAttribute("class", " mb-3 form-group removeData"+attrs);
    ojdivtest.innerHTML = '<br> <div class="form-group row"><div class="col-4"><label>Material</label><input class="form-control materials_title featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /></div><div class="col-4"><label>Price</label><input class="form-control materials_price featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /></div><div class="col-4"><label>Quantity</label><input class="form-control materials_quantity featurematerials" data-id="'+attrs+'" data-mat="'+ruid+'" required /><span class="float-right"><a href="javascript:void(0);" class="text-danger font-weight-bold" onclick="remove_data_fields('+ attrs +');">[Remove Attribute]</a></span></div></div> ';
    // <label for="exampleInputEmail1" class="form-label">Attribute No'+attrs+'</label><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_price" aria-describedby="emailHelp"></div><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_quant" aria-describedby="emailHelp"></div><button class="btn btn-danger" type="button" onclick="remove_data_fields('+ attrs +');">-</button>
    ojtest.appendChild(ojdivtest);
    console.log(mat)

}


function remove_education_fields(rid) {
    $('.removeclass'+rid).remove();
    --input;

    var btndisplay = document.getElementById('BtnDisplay')
    btntest.innerHTML = '';
    btndisplay.appendChild(btntest)

    ojtest.appendChild(ojdivtest);
}

function remove_data_fields(rid) {
    $('.removeData'+rid).remove();
    --attrs;

    var btndisplay = document.getElementById('BtnDisplay')
    btntest.innerHTML = '';
    btndisplay.appendChild(btntest)

    ojtest.appendChild(ojdivtest);
}


$('#materials_form').on('submit', function(e){
    e.preventDefault();

    // let result = [...mattr].map(([id, marterial_id, material_kind, price, quantity]) => ({ id, marterial_id, material_kind, price, quantity}))
    var result = new Map(mattr.map(i => [i.id, i.marterial_id, i.material_kind, i.price, i.quantity]));
    // var foundIndex = mattr.findIndex(x => x.id == item.id);
    //     items[foundIndex] = item;
    console.log(mattr)
    mattr.forEach(function callback(value, index) {

        var ThisInput = $(".featurematerials");
        var data_mat = ThisInput.data('mat');
        var materials_val = $('.materials_title[data-id="'+value.id +'"]').val();//.replace(/,/g, "");
        var prince_val = $('.materials_price[data-id="'+value.id +'"]').val();//.replace(/,/g, "");        
        var quantity_val = $('.materials_quantity[data-id="'+value.id+'"]').val();
            if(value === undefined) {
                mattr.push({id : value.id, marterial_id : data_mat, material_kind : materials_val, price : prince_val, quantity : quantity_val});
            }else{
                value.material_kind = materials_val;
                value.price = prince_val;
                value.quantity = quantity_val;
            }
      });

    var projID = $('#projID').val(),
        projType = $('#projType').val();

    const composed = mat.map(d => {
        return {
          ...d,
          attributes_materials: mattr.filter(({marterial_id}) => d.id === marterial_id)
        }
      })

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
                // setTimeout(() => {
                //     $('#insertProdMod').modal('hide'); 
                //     location.reload();
                // }, 1000)
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


      console.log(composed)

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
