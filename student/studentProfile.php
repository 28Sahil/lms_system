<?php
if(!isset($_SESSION)){
    session_start();
    
}

include('header.php');
include_once('../dbConnection.php');


if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
}else{

    echo "<script>location.href='../index.php';</script>";
}


$sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail'";

$result =$conn->query($sql);
if($result->num_rows == 1 ){
    $row = $result->fetch_assoc();
    $stu_id= $row['stu_id'];
    $stu_name= $row['stu_name'];
    $stu_occ= $row['stu_occ'];
    $stu_img = $row['stu_img'];
}

?>







<?php




if(isset($_REQUEST['requpdate'])){

if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_occ'] == "")){

   $msg  ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All fields</div>';
}else{


$name =$_REQUEST['stu_name'];
$desc =$_REQUEST['stu_occ'];



$course_img =$_FILES['course_img']['name'];
$course_image_temp =$_FILES['course_img']['tmp_name'];
$img_folder = '../img/courseimg/'.$course_img;

move_uploaded_file( $course_image_temp, $img_folder);


$sql ="UPDATE student  SET  stu_name='$name', stu_occ='$desc',stu_img='$course_img' WHERE stu_id = '$stu_id'";


$result=$conn->query($sql);
}

if($result== TRUE){
$msg  ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Profile update Sucesfully</div>';
}else{
$msg  ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error</div>';
}

}







?>





<div class="col-sm-6 mt-5 mx-3 jumbotron">


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id"
                value=" <?php if(isset($row['stu_id'])){echo $row['stu_id'];} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email"
                value=" <?php if(isset($row['stu_email'])){echo $row['stu_email'];} ?>" readonly>
        </div>

        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name"
                value=" <?php if(isset($row['stu_name'])){echo $row['stu_name'];} ?>">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ"
                value=" <?php if(isset($row['stu_occ'])){echo $row['stu_occ'];} ?>">
        </div>


        <div class="form-group">
            <label for="stu_img">Profile Image</label>

            <input type="file" class="form-control" id="course_img" name="course_img">

        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="requpdate" type="submit" name="requpdate">Update</button>

        </div>

        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>














<?php 

include('footer.php');


?>