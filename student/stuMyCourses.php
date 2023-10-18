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

<div class="continer mt-5 ml-4">
  <div class="row">
    <div class="jumbotron">
      <h4 class="text-center">All Courses</h4>
      <?php 
          
      if(isset($stu_email)){
        $sql = "
        SELECT * FROM checkout AS ce JOIN course AS c ON c.course_id = ce.course_id WHERE ce.stu_email ='$stu_email'";

        $result =$conn->query($sql);
   
        if($result->num_rows>0){
    
          while($row = $result->fetch_assoc()){?>

<div class="bg-light mb-3">
  <h5 class="card-header"><?php echo $row['course_name']; ?></h5>
  <div class="row">
    <div class="col-sm-3">
      <img class="card-img-top mt-4" src="../img/courseimg/<?php echo $row['course_img']; ?>" alt="">
    </div>

    <div class="col-sm-6 mb-3">
      <div class="card-body">
        <p class="card-title"><?php echo $row['course_desc']; ?></p>
        <small class="card-text">Instrustor: <?php echo $row['course_author']; ?></small></br>
        <p class="card-text d-inline">Price: <small><del>&#8377<?php echo $row['course_price']; ?></del></small></p>
        <a href=" watchcourse.php?course_id=<?php echo $row['course_id']; ?>" class="btn btn-primary mt-5 float-right">Watch Course</a>
      </div>
    </div>
  </div>
</div>

<?php


          }

        }
      }
      
      ?>
    </div>
  </div>
</div>














<?php 

include('footer.php');


?>