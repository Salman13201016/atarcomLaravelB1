





$(document).ready(function(){
    count = 1;
    $("#add_more_weight").click(function(){
        
        // else{
            count = count+1
            var weight_div = '<label for="exampleInputUsername1">Add Weight '+count+'</label><div class="d-flex"><input type="text" class="form-control enable_tag" id="exampleInputUsername1" name ="weight[]" placeholder="Enter Product Weight (E.g, 3ML, 6ML)" disabled/>'

            var weight_price = '<div class="form-group" ><label for="exampleInputUsername1">Add Price for Weight '+count+'</label> <div class="d-flex"> <input type="text" class="form-control enable_tag" id="exampleInputUsername1" name ="prod_price[]" placeholder="Enter Product Price (E.g, 3ML, 6ML)" disabled/>'
            $(".weight_div").append(weight_div);
            $(".weight_price_div").append(weight_price);
        // }

        if($("#sel_cat option:selected").val()=='zero'){
            $('.enable_tag').prop("disabled", true);
        }
        else{
            $('.enable_tag').prop("disabled", false);
        }
        
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
        var cat_id = $('#sel_cat option:selected').val();
        var sub_cat_id = $('#select_sub option:selected').val();
        prod_name = $("#prod_name").val()
        prod_image = $("#prod_image").val()
        prod_desc = $("#prod_desc").val()
        prod_price = $('input[name="prod_price[]"]').map(function() {
            return this.value
        }).get()
        var prod_weight = $('input[name="weight[]"]').map(function() {
            return this.value
        }).get()
        // console.log(prod_weight.toString())

        weight_value = prod_weight.toString()
        weight_value = weight_value.replaceAll(",", "/");
        price_value = prod_price.toString()
        price_value = price_value.replaceAll(",", "/");
        console.log(typeof weight_value);
        console.log( typeof price_value);

        $.ajax({
            url:'product',
            
            data:{
                'cat_id':cat_id,
                'sub_cat_id':sub_cat_id,
                'prod_name':prod_name,
                'prod_image':prod_image,
                'prod_desc':prod_desc,
                'prod_image':prod_image,
                'weight_value':weight_value,
                'price_value':price_value
            },
            type:'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // contentType: "charset=utf-8",
            success: function(response){
                
               console.log(response);
            }
        });

        // for(var i = 0 ; i<values.toString().length;i++){
        //     weight_val = values.toString()[i];
        //     if(weight_val==','){
        //         values.toString()[i] = ";"
        //     }
        // }
    });

});