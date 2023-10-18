<?php
  include('dbConnection.php'); 

  session_start();
 $stuEmail=$_SESSION['stuLogEmail'];
 $id = $_SESSION['course_id'];



  if(!isset($_SESSION['stuLogEmail'])){

    echo "<script>location.href='loginorsignup.php';</script>";
  }else{




$sql = "INSERT INTO checkout (stu_email ,course_id )VALUES('$stuEmail','$id')";

if($conn->query($sql) ==TRUE){  
  echo "<script>location.href='student/stuMyCourses.php';</script>";


}


  }
 ?>