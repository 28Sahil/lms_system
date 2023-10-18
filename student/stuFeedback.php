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

  $sql ="SELECT * FROM student WHERE stu_email='$stu_email'";
  $result = $conn->query($sql);
  if($result->num_rows == 1){
$row =$result->fetch_assoc();
$stuId = $row["stu_id"];
  }

  if(isset($_REQUEST['submittFeedbackBtn'])){
    if(($_REQUEST['f_content'] == '')){
        // msg displayed if required fill is missing
        $msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all Fileds</div>'; 
    }else{
        $f_content=$_REQUEST['f_content'];
        $sql ="INSERT INTO feedback ( f_content,stu_id) VALUES ('$f_content','$stuId')";
        $result = $conn->query($sql);
        

    

      if($result == TRUE){
          $msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Feedback Added Sucesfully</div>';
      }else{
          $msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
      }
  
      }
    }












?>



<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <h1>Feedback</h1>



</nav>
<!-- start of Mid Content -->


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Feedback</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="stu_email"> Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" row=2   value="<?php echo $stu_email; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="f_content">New Password</label>
            <textarea type="text" class="form-control" id="f_content" name="f_content" cols="30" rows="10"></textarea>
        </div>
      
     
      
       
        <div class="text-center">
            <button class="btn btn-danger" id="submittFeedbackBtn" type="submit" name="submittFeedbackBtn">Submit Feedback</button>
            <a href="studentProfile.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>







<?php include('./footer.php'); ?>