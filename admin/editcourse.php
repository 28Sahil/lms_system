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

    if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){

       $msg  ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All fields</div>';
  }else{

  $id =$_REQUEST['course_id'];
  $name =$_REQUEST['course_name'];
  $desc =$_REQUEST['course_desc'];
  $author =$_REQUEST['course_author'];
  $duration =$_REQUEST['course_duration'];
  $price =$_REQUEST['course_price'];
  $original_price =$_REQUEST['course_original_price'];

  $img =$_FILES['course_img']['name'];
  $course_image_temp =$_FILES['course_img']['tmp_name'];
  $img_folder = '../img/courseimg/'.$img;
  
  move_uploaded_file( $course_image_temp, $img_folder);
  
 
  
  
  $sql ="UPDATE course  SET ( course_name='$name', course_desc='$desc', course_author'$author', course_img'$img', course_duration='$duration', course_price='$price', course_original_price='$original_price') where course_id = '$id'";


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

    <h1>Update Course</h1>



</nav>






<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course Details</h3>


    <?php   
             if(isset($_REQUEST['view'])){
                $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
           

             $result = $conn->query($sql);
             $row = $result->fetch_assoc();

            }
?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id"
                value=" <?php if(isset($row['course_id'])){echo $row['course_id'];} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name"
                value=" <?php if(isset($row['course_name'])){echo $row['course_name'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea type="text" class="form-control" id="course_desc" name="course_desc"
                row=2> <?php if(isset($row['course_desc'])){echo $row['course_desc'];} ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author"
                value=" <?php if(isset($row['course_author'])){echo $row['course_author'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration"
                value=" <?php if(isset($row['course_duration'])){echo $row['course_duration'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price"
                value=" <?php if(isset($row['course_original_price'])){echo $row['course_original_price'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price"
                value=" <?php if(isset($row['course_price'])){echo $row['course_price'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src=" <?php if(isset($row['course_img'])){echo  '../img/courseimg/'.$row['course_img'];}  ?>"
                alt=" <?php if(isset($row['course_img'])){echo $row['course_img'];}  ?>" class=" img-fluid">
            <input type="file" class="form-control" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="requpdate" type="submit" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
















<?php include('./footer.php'); ?>