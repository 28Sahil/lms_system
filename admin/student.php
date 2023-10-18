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

    <h1>Students</h1>



</nav>
<!-- start of Mid Content -->
.



<div class="col-sm-12 mt-5">
    <!-- table -->
    <p class="bg-dark text-white p-2"> List of Student</p>
    <?php  
    $sql = "SELECT * FROM student";

    $result =$conn->query($sql);
    if ($result->num_rows > 0){
    ?>
    <table class="table">
        <thread>
            <tr>

                <th scope="col">Student Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

            </tr>
        </thread>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){
           echo ' <tr>';
           echo '  <th scope="row">'.$row['stu_id'].'</th>';
           echo '    <td>'.$row['stu_name'].'</td>';
           echo '   <td>'.$row['stu_email'].'</td>';

           echo '   <td>
             

                    <form action method="post" class="d-inline" > 
                    <input type="hidden" name="id" value='.$row['stu_id'].'>
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
    <a href="addnewstudent.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a>
</div>
<!-- table -->


<?php  
 
 if(isset($_REQUEST['delete'])){

$sql= "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";

if($conn->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}else{
    echo " Unable to delete";
}

 }

?>


<!-- end of Mid Content -->


<?php include('./footer.php'); ?>