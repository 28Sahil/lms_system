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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watchcourse</title>
</head>
<body>



<div class="container-fluid bg-success p-2">
    <h3>Welcome to Course </h3>
    <a href="./stuMyCourses.php" class="btn btn-danger">My Courses</a>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 border-right">
            <h4 class="text-center">Lessons</h4>
            <ul class="nav flex-column">
                <?php 
        
                
                if(isset($_GET['course_id'])){
          
                    $course_id = $_GET['course_id'];
                    $sql = "SELECT * FROM lesson  WHERE course_id ='$course_id'";
            
                    $result = $conn->query($sql);
                    
                    if($result->num_rows > 0){
                 
                        while($row = $result->fetch_assoc()) {
                            echo " <div class='embed-responsive embed-responsive-16by9'>
                            <iframe src='". $row['lesson_link']." ' frameborder='0' allowfullscreen></iframe>
                         </div>";

                            echo '<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style="cursor: pointer;">'.$row['lesson_name'].'</li>';
                    }
                }
            }
                ?>
            </ul>
        </div>
        <div class="col-sm-8">
            <video src="" id="videoarea" class="mt-5 w-75 ml-2" controls></video>
        </div>
    </div>
</div>



<script src="js/custom.js"></script>
    
</body>
</html>



<?php

include('./footer.php');
?>