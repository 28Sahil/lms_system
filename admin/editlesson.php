<?php 
include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_admin_login'])){
   $adminEmail = $_SESSION['adminLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }


// update course








if(isset($_REQUEST['requpdate'])){

    if(($_REQUEST['lesson_id'] == "") || ($_REQUEST['lesson_id'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") ){

       $msg  ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All fields</div>';
  }else{

  $id =$_REQUEST['lesson_id'];
  $name =$_REQUEST['lesson_name'];
  $ldesc =$_REQUEST['lesson_desc'];
  $cmane =$_REQUEST['course_id'];
  $cname =$_REQUEST['course_name'];


  $img =$_FILES['lesson_link']['name'];
  $course_image_temp =$_FILES['lesson_link']['tmp_name'];
  $img_folder = '../img/courseimg/'.$img;
  
  move_uploaded_file( $course_image_temp, $img_folder);
  
 
  
  
  $sql ="UPDATE course  SET ( lesson_id='$name', lesson_desc='$desc', course_id'$cmane', lesson_link'$img', course_name='$cname', course_price='$price', course_original_price='$original_price') where lesson_id = '$id'";


  $result=$conn->query($sql);
  }

if($result== TRUE){
    $msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Course update Sucesfully</div>';
}else{
    $msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
}

}
  



?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <h1>Update Lesson</h1>



</nav>






<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Lesson Details</h3>


    <?php   
             if(isset($_REQUEST['view'])){
                $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
           

             $result = $conn->query($sql);
             $row = $result->fetch_assoc();

            }
?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id"
                value=" <?php if(isset($row['lesson_id'])){echo $row['lesson_id'];} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name"
                value=" <?php if(isset($row['lesson_name'])){echo $row['lesson_name'];} ?>">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea type="text" class="form-control" id="lesson_desc" name="lesson_desc"
                row=2> <?php if(isset($row['lesson_desc'])){echo $row['lesson_desc'];} ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id"
                value=" <?php if(isset($row['course_id'])){echo $row['course_id'];} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name"
                value=" <?php if(isset($row['course_name'])){echo $row['course_name'];} ?>" readonly>
        </div>
  
   
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
         <div class="embed-responsive embed-responsive-16by9">
            <iframe src=" <?php if(isset($row['lesson_link'])){echo  $row['lesson_link'];}  ?>" frameborder="0" allowfullscreen></iframe>
         </div>
            <input type="file" class="form-control" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="requpdate" type="submit" name="requpdate">Update</button>
            <a href="lesson.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>















<?php include('./footer.php'); ?>