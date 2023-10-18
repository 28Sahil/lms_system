<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php include('./maininclude/header.php');


include('dbConnection.php')?>





<div class="continer-fluid">
    <img src="./img/b3.jpg" alt="" style=width:100%;>
</div>








<div class="container row m-5  d-flex justify-content-evenly">
        <h1 class="text-center"> Web Design Courses</h1>
        <!-- most popular card 1 courses -->

        <?php     
        
        $sql = "SELECT * FROM  course LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
             
                
                echo'  <div class="card-deck mt-4  m-2 ms-5" style="width: 21rem;">
                <a href="./coursedetails.php" class="btn" style="text-align: left; padding:0px; margin:0px">
                    <div class="card">
                        <img src="img/courseimg/'.$row['course_img'].'" alt="" class="card-img-top " style="width:200px;">
                        <div class="card-body">
                            <h5 class="card-title ">'.$row['course_name'].'</h5>
                            <p class="card-text"> '.$row['course_desc'].' </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                    class="font-weight-bolder"> &nbsp   &#8377 '.$row['course_price'].'</span>
                            </p><a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
                
                ';
        }
    }
        ?>

        <!--end card 1 most popular courses -->

    </div>



    <div class="container row m-5  d-flex justify-content-evenly">
        <h1 class="text-center"> Web Development Courses</h1>
        <!-- most popular card 1 courses -->

        <?php     
        
        $sql = "SELECT * FROM  course LIMIT 3,6";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
             
                
                echo'  <div class="card-deck mt-4  m-2 ms-5" style="width: 21rem;">
                <a href="./coursedetails.php" class="btn" style="text-align: left; padding:0px; margin:0px">
                    <div class="card">
                        <img src="img/courseimg/'.$row['course_img'].'" alt="" class="card-img-top " style="width:200px;">
                        <div class="card-body">
                            <h5 class="card-title ">'.$row['course_name'].'</h5>
                            <p class="card-text"> '.$row['course_desc'].' </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                    class="font-weight-bolder"> &nbsp   &#8377 '.$row['course_price'].'</span>
                            </p><a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
                
                ';
        }
    }
        ?>

        <!--end card 1 most popular courses -->

    </div>



    
<div class="container row m-5  d-flex justify-content-evenly">
      
        <!-- most popular card 1 courses -->

        <?php     
        
        $sql = "SELECT * FROM  course LIMIT 6,9";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
             
                
                echo'  <div class="card-deck mt-4  m-2 ms-5" style="width: 21rem;">
                <a href="./coursedetails.php" class="btn" style="text-align: left; padding:0px; margin:0px">
                    <div class="card">
                        <img src="img/courseimg/'.$row['course_img'].'" alt="" class="card-img-top " style="width:200px;">
                        <div class="card-body">
                            <h5 class="card-title ">'.$row['course_name'].'</h5>
                            <p class="card-text"> '.$row['course_desc'].' </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                    class="font-weight-bolder"> &nbsp   &#8377 '.$row['course_price'].'</span>
                            </p><a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
                
                ';
        }
    }
        ?>

        <!--end card 1 most popular courses -->

    </div>



    
<div class="container row m-5  d-flex justify-content-evenly">

        <!-- most popular card 1 courses -->

        <?php     
        
        $sql = "SELECT * FROM  course LIMIT 9,12";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
             
                
                echo'  <div class="card-deck mt-4  m-2 ms-5" style="width: 21rem;">
                <a href="./coursedetails.php" class="btn" style="text-align: left; padding:0px; margin:0px">
                    <div class="card">
                        <img src="img/courseimg/'.$row['course_img'].'" alt="" class="card-img-top " style="width:200px;">
                        <div class="card-body">
                            <h5 class="card-title ">'.$row['course_name'].'</h5>
                            <p class="card-text"> '.$row['course_desc'].' </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                    class="font-weight-bolder"> &nbsp   &#8377 '.$row['course_price'].'</span>
                            </p><a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
                
                ';
        }
    }
        ?>

        <!--end card 1 most popular courses -->

    </div>








    <?php include('./maininclude/contact.php');?>

<?php include('./maininclude/footer.php'); ?>



</body>
</html>