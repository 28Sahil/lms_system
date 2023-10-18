<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php include('./maininclude/header.php');?> 

<div class="continer-fluid">
    <img src="./img/b2.jpg" alt="" style=width:100%;>
</div>

<div class="container">
    <h2 class=" text-center my-4"> Payment Status</h2>
    <form action="" method="post">
    <label class="offset-sm-3 col-form-lable  ">Order ID:</label>
        <div  class="container d-flex justify-content-center" >
       
            <input type="text" class="form-control mx-3 " style="width:500px">
   
        </div>
        <div  class="container d-flex justify-content-center p-2">
       

       <input type="submit" class="btn btn-primary mx-4 " value="view">
   </div>
    </form>
</div>








<?php include('./maininclude/contact.php');

      include('./maininclude/footer.php'); ?>
</body>
</html>