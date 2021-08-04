
$(document).on('click','#btn_submit_reg_user',function(){
   
    var Reg_User_Name = $('#reg_user_name');
    var Reg_User_Mobile = $('#reg_user_mobile');
    var Reg_User_Password = $('#reg_user_password');
  
    if($.trim(Reg_User_Name.val())==""){
       alert("Please Enter Name");
       $("#reg_user_name").focus();
       return false;
    }
    else if($.trim(Reg_User_Mobile.val())==""){
        alert("Please Enter Mobile Number");
        $("#reg_user_mobile").focus();
        return false;
    }
    else if($.trim(Reg_User_Mobile.val())!="" && !$.trim(Reg_User_Mobile.val()).match(/^\d{10}$/))
    {
       alert("Please Enter Valid Mobile Number");
       $("#reg_user_mobile").focus();
       return false;
    }
    else if($.trim(Reg_User_Password.val())==""){
        alert("Please Enter Password");
        $("#reg_user_password").focus();
        return false;
    }

    $.ajax({
        url : base_url+'save_registration',
        type : 'POST',
        dataType : 'json',
        data : { 'Reg_User_Name':Reg_User_Name.val(),'Reg_User_Mobile':Reg_User_Mobile.val(),'Reg_User_Password':Reg_User_Password.val() },
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
          if(data.message == "Mobile_Exist"){
            alert("Mobile Number Exist");
            $("#reg_user_mobile").focus();
            $(".loading").hide();
            return false;
          }else{
            location.reload();
          }
        }
    });

    
});


$(document).on('click','#btn_submit_reg_user',function(){
   
    var Reg_User_Name = $('#reg_user_name');
    var Reg_User_Mobile = $('#reg_user_mobile');
    var Reg_User_Password = $('#reg_user_password');
  
    if($.trim(Reg_User_Name.val())==""){
       alert("Please Enter Name");
       $("#reg_user_name").focus();
       return false;
    }
    else if($.trim(Reg_User_Mobile.val())==""){
        alert("Please Enter Mobile Number");
        $("#reg_user_mobile").focus();
        return false;
    }
    else if($.trim(Reg_User_Mobile.val())!="" && !$.trim(Reg_User_Mobile.val()).match(/^\d{10}$/))
    {
       alert("Please Enter Valid Mobile Number");
       $("#reg_user_mobile").focus();
       return false;
    }
    else if($.trim(Reg_User_Password.val())==""){
        alert("Please Enter Password");
        $("#reg_user_password").focus();
        return false;
    }

    $.ajax({
        url : base_url+'save_registration',
        type : 'POST',
        dataType : 'json',
        data : { 'Reg_User_Name':Reg_User_Name.val(),'Reg_User_Mobile':Reg_User_Mobile.val(),'Reg_User_Password':Reg_User_Password.val() },
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
          if(data.message == "Mobile_Exist"){
            alert("Mobile Number Exist");
            $("#reg_user_mobile").focus();
            $(".loading").hide();
            return false;
          }else{
            location.reload();
          }
        }
    });

    
});



$(document).on('click','#btn_submit_login_user',function(){
   
    var Login_User_Mobile = $('#login_user_mobile');
    var Login_User_Password = $('#login_user_password');
  
    if($.trim(Login_User_Mobile.val())==""){
        alert("Please Enter Mobile Number");
        $("#login_user_mobile").focus();
        return false;
    }
    else if($.trim(Login_User_Mobile.val())!="" && !$.trim(Login_User_Mobile.val()).match(/^\d{10}$/))
    {
       alert("Please Enter Valid Mobile Number");
       $("#login_user_mobile").focus();
       return false;
    }
    else if($.trim(Login_User_Password.val())==""){
        alert("Please Enter Password");
        $("#login_user_password").focus();
        return false;
    }

    $.ajax({
        url : base_url+'check_login',
        type : 'POST',
        dataType : 'json',
        data : { 'Login_User_Mobile':Login_User_Mobile.val(),'Login_User_Password':Login_User_Password.val() },
        beforeSend :  function (){ $(".loading").show(); },
        success : function(data){
          if(data.message == "Account_Not_Exist"){
            alert("Account Not Exist");
            $("#login_user_mobile").focus();
            $(".loading").hide();
            return false;
          }else{
            location.reload();
          }
        }
    });

    
});

$(".add_to_cart").click(function(){
  var product_id = $(this).attr('data-product-id');
  $.ajax({
    url : base_url+"add_to_cart",
    type : 'Get',
    data : { 'product_id':product_id},
    dataType : 'json',
    beforeSend :  function (){ $(".loading").show(); },
    success : function(data){
      if(data.message == "Added"){
        alert("Product_Added");
        $("#login_user_mobile").focus();
        $(".loading").hide();
        return false;
      }
    }
  });
});