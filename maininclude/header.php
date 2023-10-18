<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-5 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ABCd</a>
            <span class="navbar-text ps-5">Start to Learn</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custon-nav ps-5">
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" href="paymentstatus.php">Payment</a>
                    </li>
                    <?php 
                    session_start();
                     if(isset($_SESSION['is_login'])){

                       echo ' <li class="nav-item custom-nav-item">
                       <a class="nav-link active ps-3" href="student/studentProfile.php">My Profile</a>
                   </li>
                   <li class="nav-item custom-nav-item">
                       <a class="nav-link active ps-3" href="logout.php">Logout</a>
                   </li>';
                     }else{
                        echo ' <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" data-bs-toggle="modal" data-bs-target="#stulogmodelcenter"
                            href="#">Login</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3 " data-bs-toggle="modal" data-bs-target="#sturegmodelcenter"
                            href="#" >signup</a>
                    </li>';
                     }
                    ?>


                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" href="#feedback">feedback</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active ps-3" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>




</body>

</html>

<!-- navbar start---------------------------------------------------------- -->