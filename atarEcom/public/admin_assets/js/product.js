





$(document).ready(function(){
    count = 1;
    $("#add_more_weight").click(function(){
        count = count+1
        var weight_div = '<label for="exampleInputUsername1">Add Weight '+count+'</label><div class="d-flex"><input type="text" class="form-control" id="exampleInputUsername1" name ="add_sub_cat" placeholder="Enter Product Weight (E.g, 3ML, 6ML)"/>'
        var weight_price = '<div class="form-group"><label for="exampleInputUsername1">Add Price for Weight '+count+'</label> <div class="d-flex"> <input type="text" class="form-control" id="exampleInputUsername1" name ="add_sub_cat" placeholder="Enter Product Price (E.g, 3ML, 6ML)"/>'
        $(".weight_div").append(weight_div);
        $(".weight_price_div").append(weight_price);
    });
});