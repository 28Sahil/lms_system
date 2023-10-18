<?php


include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_admin_login'])){
   $adminEmail = $_SESSION['adminLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }

$adminEmail = $_SESSION['adminLogEmail'];
if(isset($_REQUEST['adminPassUpdatebtn'])){
    if(($_REQUEST['adminPass'] == '')){
        // msg displayed if required fill is missing
        $msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all Fileds</div>'; 
    }else{
        $sql ="SELECT * FROM admin WHERE admin_email='$adminEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $adminPass = $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email='$adminEmail'";
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
            <label for="stuemail">Admin Email</label>
            <input type="email" class="form-control" id="stuemail" name="stuemail" row=2   value="<?php echo $adminEmail; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="adminPass">New Password</label>
            <input type="text" class="form-control" id="adminPass" name="adminPass">
        </div>
      
     
      
       
        <div class="text-center">
            <button class="btn btn-danger" id="adminPassUpdatebtn" type="submit" name="adminPassUpdatebtn">Update</button>
            <a href="admindashbord.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>







<?php include('./footer.php'); ?>