<?php


include('../dbConnection.php');

// Admin Login verifacation
if(!isset($_SESSION['is_admin_login'])){

if(isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])){

    $adminLogEmail=$_POST['adminLogEmail'];
    $adminLogPass=$_POST['adminLogPass'];

 

    $sql = "SELECT admin_email,admin_pass FROM admin WHERE admin_email= '".$adminLogEmail."' AND admin_pass= '".$adminLogPass."' ";
  
 

    $result = $conn->query($sql);

    $row = $result->num_rows;
  
 

    if($row == 1 ){
        echo json_encode($row);
        $_SESSION['is_admin_login'] = true;
        $_SESSION['adminLogEmail'] = $adminLogEmail;

    } else if($row == 0 ){
        echo json_encode($row);

        }
}
   
}