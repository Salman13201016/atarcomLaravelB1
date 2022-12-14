





$(document).ready(function(){
    count = 1;
    $("#add_more_weight").click(function(){
        // if($("#sel_cat").attr('disabled')){
        //     dummy = 0;
        // }
        // else{
            count = count+1
            var weight_div = '<label for="exampleInputUsername1">Add Weight '+count+'</label><div class="d-flex"><input type="text" class="form-control" id="exampleInputUsername1" name ="weight[]" placeholder="Enter Product Weight (E.g, 3ML, 6ML)"/>'
            var weight_price = '<div class="form-group"><label for="exampleInputUsername1">Add Price for Weight '+count+'</label> <div class="d-flex"> <input type="text" class="form-control " id="exampleInputUsername1" name ="prod_price[]" placeholder="Enter Product Price (E.g, 3ML, 6ML)"/>'
            $(".weight_div").append(weight_div);
            $(".weight_price_div").append(weight_price);
        // }
        
    });

    // select Subcat ajax
    $("#sel_cat").change(function(){
        // console.log("select");
        var cat_id = $(this).find('option:selected').val();
        
        if(cat_id=="zero"){
            console.log(cat_id);
            $('.enable_tag').prop("disabled", true);
        }
        else{
            $('.enable_tag').prop("disabled",false);
        
        $.ajax({
            url:'product/getsub/'+cat_id,
            type:'get',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // contentType: "charset=utf-8",
            success: function(response){
                
                // console.log((response[0]['sub_cat_name']));
                $('#select_sub')
                .find('option')
                .remove()
                .end()
                .append('<option>Select Sub Category</option>')
                .val('whatever')
            ;
                for(var i=0;i<response.length;i++){
                    console.log((response[i]['sub_cat_name']));
                    $('#select_sub').append(`<option value="${response[i]['cat_id']}">
                    ${response[i]['sub_cat_name']}
               </option>`);
                }
            }
        });
    }
    });



    // insert data
    $("#sub_prod").click(function(e){
        e.preventDefault()
        console.log("yes");
        prod_name = $("#prod_name").val()
        prod_image = $("#prod_image").val()
        prod_desc = $("#prod_desc").val()
        prod_price = $('input[name="price[]"]').map(function() {
            return this.value
        }).get()
        var prod_weight = $('input[name="weight[]"]').map(function() {
            return this.value
        }).get()
        console.log(prod_weight.toString())

        weight_value = prod_weight.toString()
        weight_value = weight_value.replace(",", ";");
        price_value = prod_price.toString()
        price_value = price_value.replace(",", ";");
        console.log(weight_value);

        // for(var i = 0 ; i<values.toString().length;i++){
        //     weight_val = values.toString()[i];
        //     if(weight_val==','){
        //         values.toString()[i] = ";"
        //     }
        // }
    });

});