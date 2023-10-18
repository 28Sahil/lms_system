<?php  



// student Login verifacation
if(!isset($_SESSION['is_login'])){

    if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
    
        $stuLogEmail=$_POST['stuLogemail'];
        $stuLogPass=$_POST['stuLogpass'];
    
     
    
        $sql = "SELECT stu_email,stu_pass FROM student WHERE stu_email='".$stuLogEmail."'  AND   stu_pass= '".$stuLogPass."'";
     
    
        $result = $conn->query($sql);
    
      
    
        $row = $result->num_rows;
      
    
    
        if($row == 1 ){
    
            $_SESSION['is_login'] = true;
            $_SESSION['stuLogEmail'] = $stuLogEmail;
            header('Location:../index.php');
    
        } else{
        
    
            }
    }
       
    }



?>