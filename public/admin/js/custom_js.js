$("#add_category").click(function(){
    var category_name = $.trim($("#category_name").val());
    var category_url = $.trim($("#category_url").val());
    if(category_name == ""){
        alert("Please Enter Category Name");
        $("#category_name").focus();
        return false;
    }else if(category_url == ""){
        alert("Please Enter Category Url");
        $("#category_url").focus();
        return false;
    }
    $.ajax({
        url : base_url+'admin/save_category',
        type : 'GET',
        data : { 'category_name':category_name,'category_url':category_url},
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
           location.reload();
        }
    });
});

$(".edit_category").click(function(){
    var category_id = $(this).attr('data-edit-id');
    $.ajax({
        url : base_url+'admin/get_edit_category',
        type : 'GET',
        data : { 'category_id':category_id},
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
            var result = jQuery.parseJSON(data);
           $("#category_name").val(result.Edit_Category.Category_Name);
           $("#category_url").val(result.Edit_Category.Category_Url);
           $("#update_id").val(result.Edit_Category.ID);
           $("#category_name").focus();
           $(".loading,#add_category").hide();
           $("#update_category,#back_button").show();
        }
    });
});

$("#back_button").click(function(){
    $("form").find("input").val("");
    $("#add_category").show();
    $("#update_category,#back_button").hide();
});

$("#update_category").click(function(){
    var category_id = $("#update_id").val();
    var category_name = $.trim($("#category_name").val());
    var category_url = $.trim($("#category_url").val());

    $.ajax({
        url : base_url+'admin/update_category',
        type : 'GET',
        data : { 'category_id':category_id,'category_name':category_name,'category_url':category_url},
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
            location.reload();
        }
    });
});

// var loadFile = function(event) {
// 	var image = $(event).parent().parent().find('img');
//     console.log(event.parent())
// 	image.src = URL.createObjectURL(event.target.files[0]);
// };

if($(".product_description").length > 0){
var editor = CodeMirror.fromTextArea(document.getElementsByClassName("product_description")[0], {
    mode: "htmlmixed",
    theme: "monokai"
  });
}

$("#btn_add_product").click(function(){
    var product_name = $("#add_product_name").val();
    var product_quantity = $("#add_product_quantity").val();
    var product_offer_price = $("#add_product_offer_price").val();
    var product_without_offer_price = $("#add_product_without_offer").val();
    var product_image = $(".add_product_image");
    var product_url = $("#add_product_url").val();
    var product_category = $("#add_product_category").val();
    var product_description = editor.getValue();
   
    if($.trim(product_name) == ""){
        alert("Please Enter Product Name");
        $("#add_product_name").focus();
        return false;
    }else if($.trim(product_quantity) == ""){
        alert("Please Enter Product Quantity");
        $("#add_product_quantity").focus();
        return false;
    }else if($.trim(product_offer_price) == ""){
        alert("Please Enter Product Price");
        $("#add_product_offer_price").focus();
        return false;
    }else if($.trim(product_without_offer_price) == ""){
        alert("Please Enter Product Price");
        $("#add_product_without_offer").focus();
        return false;
    }else if($.trim(product_url) == ""){
        alert("Please Enter Product Url");
        $("#add_product_url").focus();
        return false;
    }else if($.trim(product_description) == ""){
        alert("Please Enter Product Description");
        $("#add_product_category").focus();
        return false;
    }
    var form_data = new FormData();
    form_data.append('product_name',product_name)
    form_data.append('product_quantity',product_quantity)
    form_data.append('product_offer_price',product_offer_price)
    form_data.append('product_without_offer_price',product_without_offer_price)
    form_data.append('product_url',product_url)
    form_data.append('product_category',product_category)
    form_data.append('product_description',product_description)
    for (var index = 0; index < product_image.length; index++) {
        form_data.append("files[]",  $(".add_product_image")[index].files[0]);
    }
 
    $.ajax({
        url: base_url+'admin/save_product', 
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend :  function (){ $(".loading").show(); },
        success: function (response) {
            location.reload();
         }
    });
 
});

$(".update_product_image").change(function(){
    $(this).parent().find('input[type=hidden]').val($(this).val().substring($(this).val().lastIndexOf("\\") + 1, $(this).val().length));
});

$("#btn_update_product").click(function(){
    var product_id = $("#update_id").val();
    var product_name = $("#update_product_name").val();
    var product_quantity = $("#update_product_quantity").val();
    var product_offer_price = $("#update_product_offer_price").val();
    var product_without_offer_price = $("#update_product_without_offer").val();
    var product_image = $(".update_product_image");
    var product_url = $("#update_product_url").val();
    var product_category = $("#update_product_category").val();
    var product_description = editor.getValue();
    var product_image_name = [];
    $(".hidden_image").each(function(){
        product_image_name.push($(this).val());
    });
    product_image_name.join(",");
    if($.trim(product_name) == ""){
        alert("Please Enter Product Name");
        $("#update_product_name").focus();
        return false;
    }else if($.trim(product_quantity) == ""){
        alert("Please Enter Product Quantity");
        $("#update_product_quantity").focus();
        return false;
    }else if($.trim(product_offer_price) == ""){
        alert("Please Enter Product Price");
        $("#update_product_offer_price").focus();
        return false;
    }else if($.trim(product_without_offer_price) == ""){
        alert("Please Enter Product Price");
        $("#update_product_without_offer").focus();
        return false;
    }else if($.trim(product_url) == ""){
        alert("Please Enter Product Url");
        $("#update_product_url").focus();
        return false;
    }else if($.trim(product_description) == ""){
        alert("Please Enter Product Description");
        $("#update_product_category").focus();
        return false;
    }
    var form_data = new FormData();
    form_data.append('product_id',product_id)
    form_data.append('product_name',product_name)
    form_data.append('product_quantity',product_quantity)
    form_data.append('product_offer_price',product_offer_price)
    form_data.append('product_without_offer_price',product_without_offer_price)
    form_data.append('product_image_name',product_image_name)
    form_data.append('product_url',product_url)
    form_data.append('product_category',product_category)
    form_data.append('product_description',product_description)
    for (var index = 0; index < product_image.length; index++) {
        form_data.append("files[]",  $(".update_product_image")[index].files[0]);
    }
 
    $.ajax({
        url: base_url+'admin/update_product', 
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend :  function (){ $(".loading").show(); },
        success: function (response) {
           location.reload();
         }
    });
});

$(".delete_category").click(function(){
    var delete_id = $(this).attr('data-delete-id');
    $.ajax({
        url: base_url+'admin/delete_category', 
        type: 'post',
        data: { 'delete_id':delete_id },
        beforeSend :  function (){ $(".loading").show(); },
        success: function (response) {
           location.reload();
         }
    });
});


$(".delete_product").click(function(){
    var delete_id = $(this).attr('data-delete-id');
    $.ajax({
        url: base_url+'admin/delete_product', 
        type: 'post',
        data: { 'delete_id':delete_id },
        beforeSend :  function (){ $(".loading").show(); },
        success: function (response) {
           location.reload();
         }
    });
});