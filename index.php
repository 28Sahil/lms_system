<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_Project</title>


    <!--bootstrap-------------------------->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--fontawosom-------------------------->
    <link rel="stylesheet" href="css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Roboto:wght@500&family=Ubuntu&display=swap"
        rel="stylesheet">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css">




</head>

<body>

    <!-- navbar start--------------------------------------------------------------->

    <?php include('./maininclude/header.php');
    
    include('dbConnection.php');
    
    ?>


    <!-- navbar end--------------------------------------------------------------->








    <!-- slider start--------------------------------------------------------------->

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="./img/b1.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./img/b2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./img/b3.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- slider end---------------------------------- ----------------------------->




<!--student regertration form -->


<?php include('studentRegistration.php');?> 


<!--student- regertration form -->







    <!-- login form -->



    <!-- Modal -->
    <div class="modal fade " id="stulogmodelcenter" tabindex="-1" aria-labelledby="stulogmodelcenterLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stulogmodelcenterLabel">Student Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">







                    <form action="" method="">


                        <div class="mb-3">


                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  font-weight-bold"> <i
                                    class="fa-solid fa-envelope "></i> Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" for="stuLogemail"
                                id="stuLogemail" name="stuLogemail" placeholder="Enter your E-mail">


                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label  font-weight-bold"><i
                                    class="fa-solid fa-key "></i>Password</label>
                            <input type="password" class="form-control" for="sstuLogpass" id="stuLogpass"
                                name="stuLogpass" placeholder="Enter your password">
                        </div>


                    </form>












                </div>
                <div class="modal-footer">
                    <small id="statusLogMsg"></small>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="checkStuLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>




    <!-- login form -->







    <!-- admin form -->



    <!-- Modal -->
    <div class="modal fade " id="adminlogmodelcenter" tabindex="-1" aria-labelledby="adminlogmodelcenterLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    
                    
                    <h5 class="modal-title" id="adminlogmodelcenterLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">







                    <form action="" method="">


                        <div class="mb-3">


                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  font-weight-bold"> <i
                                    class="fa-solid fa-envelope "></i> Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" for="adminlogemail"
                                id="adminlogemail" name="adminlogemail" placeholder="Enter your E-mail">


                        </div>
                        <div class="mb-3">

                            <label for="exampleInputPassword1" class="form-label  font-weight-bold"><i
                                    class="fa-solid fa-key "></i>Password</label>
                            <input type="password" class="form-control" for="adminlogpass" id="adminlogpass"
                                name="adminlogpass" placeholder="Enter your password">
                        </div>


                    </form>












                </div>
                <div class="modal-footer">
                    <small id="statusAdminLogMsg"></small>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="checkAdminLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>




    <!-- admin form -->









    <!-- start  ---------------------------------- ----------------------------->
    <div class=" vid-content">
        <h1 class="my-content"> Welcome to ABCD </h1>
        <h4 class="my-content">Best E-Learing Platform</h4><br />
         
        <?php 
        if(!isset($_SESSION['is_login'])){

            echo '<button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#sturegmodelcenter">Get
            Started</button>';
        }else{
            echo '<a href="student/studentProfile.php"class="btn btn-primary mt-3">MY Profile</a>';
        }
        ?>

      
    </div>
    <!-- end  ---------------------------------- ----------------------------->


    <!-- start text banner  ---------------------------------- ----------------------------->
    <div class="continer-fluid bg-danger txt-banner mt-3  p-3 ">

        <div class="row bottom-banner">
            <div class="col-sm">
                <h5> <i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-users mr-3"></i> Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee</h5>
            </div>
        </div>
    </div>



    <!-- end text banner  --------------------------------------------------------------->

    <!-- start popular courses  --------------------------------------------------------------->

    <div class="container row m-5  d-flex justify-content-around">
      
        <h1 class="text-center"> Popular Course</h1>
    
        <!-- most popular card 1 courses -->

        <?php     
        
        $sql = "SELECT * FROM  course LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
             
                
                echo'  
               <div class="card-deck mt-4  m-2 ms-5" style="width: 21rem;">
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
                            </p><a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
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



    <div class="container d-flex justify-content-evenly  row m-5 ">

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
                            </p><a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
                
                ';
        }
    }
        ?>


        

    </div>
















    <div class="text-center m-2">
        <a href="./courses.php" class="btn btn-danger btn-sm"> View All Course</a>
    </div>


    <!-- end popular courses  --------------------------------------------------------------->




    <!-- contact us start -->

 <contact id="contact">   <?php include('./maininclude/contact.php');?></contact>

    <!-- contact us end -->



    <!-- feedback slider start -->

    <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4 " id="feedback">
            <button class="carousel-control-prev position-relative" type="button"
                data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next position-relative" type="button"
                data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Anna Deynah</h5>
                            <p>UX Designer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                                officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">John Doe</h5>
                            <p>Web Developer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid commodi.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Maria Kate</h5>
                            <p>Photographer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">John Doe</h5>
                            <p>UX Designer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                                officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Alex Rey</h5>
                            <p>Web Developer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid commodi.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Maria Kate</h5>
                            <p>Photographer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Anna Deynah</h5>
                            <p>UX Designer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                                officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">John Doe</h5>
                            <p>Web Developer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid commodi.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/user.png" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Maria Kate</h5>
                            <p>Photographer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti.
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->

    <!-- feedback slider end -->








    <!-- footerstart -->

    <?php include('./maininclude/footer.php'); ?>

    <!-- footerstart -->










</body>

</html>