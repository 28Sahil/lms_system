// ajax call for Admin login verifacation
function checkAdminLogin(){

    var adminLogEmail = $("#adminlogemail").val();
    var adminLogPass = $("#adminlogpass").val();


    $.ajax({

        url:'admin/admin.php',
        method: "POST",
        data:{
            checkLogemail:"checkLogemail",
            adminLogEmail :adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success: function (data){
          
            if (data == 0){
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password ! </small>');
            }else if (data == 1){
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Sucess</smal>');
                setTimeout(()=>{
                    window.location.href = "./admin/adminDashbord.php";
                },1000);
            }
        },

    });
}z