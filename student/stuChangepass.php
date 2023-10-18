<?php
if(!isset($_SESSION)){
    session_start();
}

include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_login'])){
   $stu_email = $_SESSION['stuLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }

$stu_email = $_SESSION['stuLogEmail'];
if(isset($_REQUEST['stuPassUpdatebtn'])){
    if(($_REQUEST['stu_pass'] == '')){
        // msg displayed if required fill is missing
        $msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all Fileds</div>'; 
    }else{
        $sql ="SELECT * FROM student WHERE stu_email='$stu_email'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $stu_pass = $_REQUEST['stu_pass'];
            $sql = "UPDATE student SET stu_pass = '$stu_pass' WHERE stu_email='$stu_email'";
            if($conn->query($sql)== TRUE){
                $msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Password update Sucesfully</div>';
            }else{
                $msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
            }

        }
    }
}




?>



<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <h1>Change Password</h1>



</nav>
<!-- start of Mid Content -->


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Password</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="stu_email"> Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" row=2   value="<?php echo $stu_email; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_pass">New Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass">
        </div>
      
     
      
       
        <div class="text-center">
            <button class="btn btn-danger" id="stuPassUpdatebtn" type="submit" name="stuPassUpdatebtn">Update</button>
            <a href="studentProfile.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>







<?php include('./footer.php'); ?>