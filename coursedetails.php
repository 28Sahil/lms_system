<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php include('./maininclude/header.php');
  include('dbConnection.php'); 

?> 

<div class="continer-fluid">
    <img src="./img/b3.jpg" alt="" style=width:100%;>
</div>



<div class="container mt-5">
<?php 

if (isset($_GET['course_id'])){
   $course_id = $_GET['course_id'];
   $_SESSION['course_id'] = $course_id;
$sql = "SELECT * FROM course WHERE course_id = '$course_id'";
$result =$conn->query($sql);
$row = $result->fetch_assoc();
}

?>
    <div class="row">
        <div class="col-md-4">
            <img src="img/courseimg/<?php echo $row['course_img']; ?>" class="card-img-top" alt=" python">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: <?php echo $row['course_name']; ?> </h5>
                <p class=" card-text"> Description: <?php echo $row['course_desc']; ?></p>
                <p class="card-text">Duration: <?php echo $row['course_duration']; ?></p>
                <form action="checkout.php" method="POST">
                    <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_original_price']; ?></del> </small><span class="font-weight-bolder"> &#8377 <?php echo $row['course_price']; ?></span> </p>
                   
                   <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy Now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"> Lesson No.</th>
                    <th scope="col"> Lesson Name</th>
                </tr>
            </thead>
            <tbody>
    <?php 
    $sql = "SELECT * FROM lesson WHERE course_id =$course_id";
    $result =$conn->query($sql);
 if($result->num_rows > 0) {
    $count=0;
     while($row = $result->fetch_assoc()) {
        $count=$count+1 ;
     echo '
     <tr>
     <th scope="row">'.$count.'</th>
     <td>'.$row['lesson_name'].'</td>
 </tr>';


     }

    }
    
    ?>
        
               
            </tbody>
        </table>
    </div>
</div>


<?php

      include('./maininclude/footer.php'); ?>
</body>
</html>