<?php

include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_admin_login'])){
   $adminEmail = $_SESSION['adminLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }
      
      if(isset($_REQUEST['courseSubmitBtn'])){

        if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){

           $msg  ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All fields</div>';
      }
      echo mysqli_error($conn);
      $course_name =$_REQUEST['course_name'];
      $course_desc =$_REQUEST['course_desc'];
      $course_author =$_REQUEST['course_author'];
      $course_duration =$_REQUEST['course_duration'];
      $course_price =$_REQUEST['course_price'];
      $course_original_price =$_REQUEST['course_original_price'];

      $course_img =$_FILES['course_img']['name'];
      $course_image_temp =$_FILES['course_img']['tmp_name'];
      $img_folder = '../img/courseimg/'.$course_img;
      
      move_uploaded_file( $course_image_temp, $img_folder);
      
     
      
      
      $sql ="INSERT INTO course (course_id, course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price) VALUES (NULL, '$course_name', '$course_desc', '$course_author', '$course_img', '$course_duration', '$course_price', '$course_original_price')";
   

      $result=$conn->query($sql);

    if($result == TRUE){
        $msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Sucesfully</div>';
    }else{
        $msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
    }

    }
      
      ?>










<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



<h1>Add Course</h1>


</nav>





<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea type="text" class="form-control" id="course_desc" name="course_desc" row=2></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="courseSubmitBtn" type="submit" name="courseSubmitBtn">Submit</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>











<?php include('./footer.php'); ?>