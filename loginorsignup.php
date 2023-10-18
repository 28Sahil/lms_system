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



    <div class="container jumbotron mb-5">

        <div class="row">
            <div class="col-md-4">
                <h4>If Already Registered !! Login</h4>



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
                        
                        <button type="button" class="btn btn-primary" onclick="checkStuLogin()">Login</button>
                    </div>
                </div>




            </div>
        </div>


    </div>





    <div class="container jumbotron mb-5">

<div class="row">
    <div class="col-md-4">
        <h4>If Not Registered !! Register</h4>






                        <div class="modal-body p-4">







                    <form  method="">


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold"> <i
                                    class="fa-solid fa-user "></i> Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" for="stuname"
                                id="stuname" name="stuname" placeholder="Enter your name">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  font-weight-bold"> <i
                                    class="fa-solid fa-envelope "></i> Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" for="stuemail"
                                id="stuemail" name="stuemail" placeholder="Enter your E-mail">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label  font-weight-bold"><i
                                    class="fa-solid fa-key "></i> New Password</label>
                            <input type="password" class="form-control" for="stupass" id="stupass" name="stupass"
                                placeholder="Enter your password">
                                
                        </div>

                       
                    </form>












                </div>
                <div class="modal-footer">
                    <span id="sucessMsg"></span>
                <button type="button"  onclick="addStu()"  class="btn btn-primary" >Sign In</button>
              
                   
                </div>


</div>










    <?php include('./maininclude/contact.php');?>

    <?php include('./maininclude/footer.php'); ?>



</body>

</html>