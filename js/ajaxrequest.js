$(document).ready(function(){
    // ajax call for already Exitsts Email verifacation
    $("#stuemail").on(" keypress blur",function(){
    var reg =/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

       var stuemail = $('#stuemail').val();
       $.ajax({
        url:'student/addstudent.php',
        method:'POST',
        data:{
            checkmail:"checkmail",
            stuemail: stuemail ,
        },
        success: function (data){
          // console.log(data);
            if(data == 0){
            $("#statusMsg2").html('<small style="color:red;">Email id Already Used !</small>');
            $("#signup").attr("disabled",true);
            }else if (data == 0 && reg.test(stuemail)){
                    $("#statusMsg2").html('<small style="color:green;">Continue!</small>');
            $("#signup").attr("disabled",false); 
            }else if(!reg.test(stuemail)){

               $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g example@gmail.com</small>');
            $("#signup").attr("disabled",false); 

            }
        },
       }); 
    });
});


function addStu(){
    console.log("hiii");
    var reg =/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $('#stuname').val() ;
    var stuemail = $('#stuemail').val();
    var stupass = $('#stupass').val();
   

   // checking form fieldes on Form Submission
    if (stuname.trim() == "") {
           $("#stuname").focus();
     $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
   
      return false;
        
    } else if(stuemail.trim() == "" ){
          $("#statusMsg2").html('<small style="color:red;">Please Enter email !</small>');
      $("#stuemail").focus();
      return false;
    }
    else if(stuemail.trim()!= "" && !reg.test(stuemail)){
               $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g example@gmail.com</small>');
        $("#stuemail").focus();
      return false;
      
    }
    else if(stupass.trim() == "" ){
          $("#statusMsg3").html('<small style="color:red;">Please Enter Password !</small>');
      $("#stupass").focus();
      return false;
    }
    else{    $.ajax({
        url:'student/addstudent.php',
        method:'POST',
        dataType:"json",
        data: {
            stusignup:"stusignup",
            stuname: stuname, 
            stuemail: stuemail,
            stupass: stupass,
        },

        success: function (data){
            
            console.log(data);
            if(data == "ok"){
                $("#sucessMsg").html("<span  class='alert alert-success' role='alert'>Registration Successful</span> ");
              clearStuRegField();
            } 
            else if(data == "Failed"){
                $("#sucessMsg").html("<span  class='alert alert-danger' role='alert'>Unable to Register</span> ");
            }
           
}} )}





}



// Empty All Fields

function clearStuRegField(){
   

   $("#stuRegForm").trigger('reset')
     $("#statusMsg1").html("<small></small> ");
    $("#statusMsg2").html("<small></small> ");
     $("#statusMsg3").html("<small></small> ");
}


// ajax call for student login verifacation
function checkStuLogin(){
    var stuLogemail = $("#stuLogemail").val();
    var stuLogpass = $("#stuLogpass").val();
    


    $.ajax({
        
        url:'student/addstudent.php',
        method: "POST",
        data:{
            checkLogemail:"checkLogemail",
            stuLogemail :stuLogemail,
            stuLogpass: stuLogpass,
        },
        success: function (data){
        
            if (data == 0){
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password ! </small>');
            }else if (data == 1){
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "index.php";
                },1000);
            }
        },

    });
}