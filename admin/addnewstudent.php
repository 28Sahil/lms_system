<?php

include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_admin_login'])){
   $adminEmail = $_SESSION['adminLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }
      
      if(isset($_REQUEST['courseSubmitBtn'])){

        if(($_REQUEST['stuname'] == "") || ($_REQUEST['stuemail'] == "") || ($_REQUEST['stupass'] == "") ){

           $msg  ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All fields</div>';
      }
      echo mysqli_error($conn);
      $stuname =$_REQUEST['stuname'];
      $stuemail =$_REQUEST['stuemail'];
      $stupass =$_REQUEST['stupass'];
   

   
      
      $sql ="INSERT INTO student (stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";
   

      $result=$conn->query($sql);

    if($result == TRUE){
        $msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Sucesfully</div>';
    }else{
        $msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
    }

    }
      
      ?>










<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



<h1>Add Student</h1>


</nav>





<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuname">Student Name</label>
            <input type="text" class="form-control" id="stuname" name="stuname">
        </div>
        <div class="form-group">
            <label for="stuemail">Student Email</label>
            <input type="email" class="form-control" id="stuemail" name="stuemail" row=2/>
        </div>
        <div class="form-group">
            <label for="stupass">Student Password</label>
            <input type="text" class="form-control" id="stupass" name="stupass">
        </div>
      
     
      
       
        <div class="text-center">
            <button class="btn btn-danger" id="courseSubmitBtn" type="submit"  name="courseSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>











<?php include('./footer.php'); ?>