var input = 0;
var attrs = 0;
let mat = [],
    mattr = [];

$('.insertMaterialRow').on('click',function(){

    input++;
    var objval = document.getElementById('materials_input').value;
    var new_title = titleCase(objval);
    if(mat.indexOf(new_title) != -1){
        console.log('Already Exist')
        return;
    }
        mat.push(new_title)
        var objTo = document.getElementById('material_list')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", " mb-3 form-group");
        divtest.setAttribute("id","removeclass"+input);
        divtest.innerHTML = '<h4 class="card-title">'+new_title+'  <span><a href="javascript:void(0);" class="text-danger font-weight-bold">[Remove Material]</a></span><div class="float-right"><span><a href="javascript:void(0);" class="text-success font-weight-bold" onclick="insert_attr('+input+');">[Insert Attribute]</a></span></div></h4>';
        objTo.appendChild(divtest)

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
    ojdivtest.innerHTML = '<br><label for="exampleInputEmail1" class="form-label">Attribute No'+attrs+'</label><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_price" aria-describedby="emailHelp"></div><div class="col-4"><input type="text" class="form-control" name="'+slugifys+'_quant" aria-describedby="emailHelp"></div><button class="btn btn-danger" type="button" onclick="remove_data_fields('+ attrs +');">-</button>';
    ojtest.appendChild(ojdivtest);
    console.log(mattr)

}

function slugify(objval){
    var slugify = objval
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '_')
                    .replace(/^-+|-+$/g, '');

    return slugify;
}