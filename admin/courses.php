<?php
if(!isset($_SESSION)){
    session_start();
}

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

    <h1>Courses</h1>



</nav>
<!-- start of Mid Content -->
.



<div class="col-sm-12 mt-5">
    <!-- table -->
    <p class="bg-dark text-white p-2"> List of Courses</p>
    <?php  
    $sql = "SELECT * FROM course";

    $result =$conn->query($sql);
    if ($result->num_rows > 0){
    ?>
    <table class="table">
        <thread>
            <tr>

                <th scope="col">Course Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>

            </tr>
        </thread>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){
           echo ' <tr>';
           echo '  <th scope="row">'.$row['course_id'].'</th>';
           echo '    <td>'.$row['course_name'].'</td>';
           echo '   <td>'.$row['course_author'].'</td>';

           echo '   <td>
                    <form action="editcourse.php" method="post" class="d-inline" > 
                    <input type="hidden" name="id" value='.$row['course_id'].'>
                   
              <button type="submit" class="btn btn-secondary" name="view" value="View"><i
                    class="fas fa-pen"></i></button> </form>

                    <form action method="post" class="d-inline" > 
                    <input type="hidden" name="id" value='.$row['course_id'].'>
           <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i
                      class="far fa-trash-alt"></i></button> </form>
               </td>
            </tr>';

             }?>

        </tbody>
    </table>
    <?php } else {echo "0 Result ";}?>
</div>
<hr>
<div class="box">
    <a href="addCourse.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a>
</div>
<!-- table -->


<?php  
 
 if(isset($_REQUEST['delete'])){

$sql= "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";

if($conn->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}else{
    echo " Unable to delete";
}

 }

?>


<!-- end of Mid Content -->


<?php include('./footer.php'); ?>