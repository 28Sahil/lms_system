<?php


include('./header.php');
  include('../dbConnection.php'); 


  if(isset($_SESSION['is_admin_login'])){
   $adminEmail = $_SESSION['adminLogEmail'];
  }else{
    echo "<script>location.href='../index.php';</script>";
  }
?>



<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <h1>Lesson</h1>

  


</nav>
<!-- start of Mid Content -->


<div  class="col-sm-9 mt-5 mx-3 mb-5">
    <form action=""  class="mt-3 form-inline d-print-none ">
        <div class="form-group mr-3 ">
            <label for="checkid">Enter Course ID:</label>
            <input type="text" class="form-control ml-3 " id="checkid" name="checkid">
            
        </div>

        <button class="btn btn-danger col-sm-"  type="submit" >Search</button>
      
    </form>


<?php


$sql = "SELECT course_id FROM course";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

while ($row = $result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
        $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($row['course_id'] == $_REQUEST['checkid'] ){
         $_SESSION['course_id'] = $row['course_id'];   
        $_SESSION['course_name'] = $row['course_name']; 
         ?>
         
         <h3 class="mt-5 bg-dark text-white p-2">Course Id: <?php if(isset($row['course_id'])){ echo $row['course_id'];} ?>  Course Name: <?php if(isset($row['course_name'])){ echo $row['course_name'];}?></h3>  
         <?php
        }
    
    }
}
?>

<!-- table -->





    <?php  
  

if(isset($_GET["checkid"])){
    $sql = "SELECT * FROM lesson WHERE course_id ={$_REQUEST['checkid']}";

    $result =$conn->query($sql); 
  echo  '
  
  
  
<div class="col-sm-12 mt-5">
<!-- table -->
<p class="bg-dark text-white p-2"> List of Lessons</p>
  
  
  <table class="table">
        <thread>
            <tr>

                <th scope="col">Lesson Id</th>
                <th scope="col">Lesson Name</th>
                <th scope="col">lesson Link</th>
                <th scope="col">Action</th>

            </tr>
        </thread>
        <tbody>';
        
            while($row = $result->fetch_assoc()){
           echo ' <tr>';
           echo '  <th scope="row">'.$row['lesson_id'].'</th>';
           echo '    <td>'.$row['lesson_name'].'</td>';
           echo '   <td>'.$row['lesson_link'].'</td>';

           echo '   <td>
                    <form action="editlesson.php" method="post" class="d-inline" > 
                    <input type="hidden" name="id" value='.$row['lesson_id'].'>
                   
              <button type="submit" class="btn btn-secondary" name="view" value="View"><i
                    class="fas fa-pen"></i></button> </form>

                    <form action method="post" class="d-inline" > 
                    <input type="hidden" name="id" value='.$row['lesson_id'].'>
           <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i
                      class="far fa-trash-alt"></i></button> </form>
               </td>
            </tr>';

             }
 echo '
        </tbody>
    </table>';



}else{
    echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Add lessons</div>";
}

?>
</div>





<!-- table -->






<?php  
 
 if(isset($_POST['delete'])){

$sql= "DELETE FROM lesson WHERE lesson_id = {$_POST['id']}";

if($conn->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}else{
    echo " Unable to delete";
}

 }

?>







<?php 
if(isset($_SESSION['course_id']) ){
    echo '<div class="box">
    <a href="addlesson.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a>
</div>
';
}


include('./footer.php'); 

?>
</div>


