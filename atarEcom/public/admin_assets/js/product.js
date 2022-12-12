





$(document).ready(function(){
    count = 1;
    $("#add_more_weight").click(function(){
        count = count+1
        var weight_div = '<label for="exampleInputUsername1">Add Weight '+count+'</label><div class="d-flex"><input type="text" class="form-control" id="exampleInputUsername1" name ="weight'+count+'" placeholder="Enter Product Weight (E.g, 3ML, 6ML)" disabled/>'
        var weight_price = '<div class="form-group"><label for="exampleInputUsername1">Add Price for Weight '+count+'</label> <div class="d-flex"> <input type="text" class="form-control" id="exampleInputUsername1" name ="prod_price'+count+'" placeholder="Enter Product Price (E.g, 3ML, 6ML)" disabled/>'
        $(".weight_div").append(weight_div);
        $(".weight_price_div").append(weight_price);
    });

    $("#sel_cat").change(function(){
        // console.log("select");
        var cat_id = $(this).find('option:selected').val();
        $.ajax({
            url:'product/getsub/'+cat_id,
            type:'get',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // contentType: "charset=utf-8",
            success: function(response){
                // console.log((response[0]['sub_cat_name']));
                for(var i=0;i<response.length;i++){
                    console.log((response[i]['sub_cat_name']));
                    $('#select_sub').html(`<option value="${response[i]['cat_id']}">
                    ${response[i]['sub_cat_name']}
               </option>`);
                }
            }
        });
    });
});