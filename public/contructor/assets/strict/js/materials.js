$(document).ready(function(){


    var inputs = [];

    $('.insertMaterialRow').on('click', function(e){
        e.preventDefault();

        var newInput = document.createElement("input");
        // var newDiv = document.createElement("div");
        // newDiv.setAttribute("class","col-4")
        newInput.setAttribute("type", "text");
        newInput.setAttribute("name", "myInput[][first]");
        newInput.setAttribute("class", "form-control");
        // newInput.innerHTML = '<br> <div class="form-group row"><div class="col-4"><label>Material</label><input class="form-control materials_title featurematerials" required /></div>';
        document.getElementById("inputs").appendChild(newInput);
        inputs.push(newInput);
    })

    $('#myForm').on('submit', function(e){
        e.preventDefault();
        var values = [];
        for (var i = 0; i < inputs.length; i++) {
          values.push(inputs[i]);
        }
        console.log(values);
    })
});