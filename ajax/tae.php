<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "minipro2");  
 if(isset($_POST["employee_id"]))  
 {  
    $query = "SELECT teaching.*,user.name AS name 
    FROM teaching,user WHERE teacher_id = Id_card
    AND teaching_id='".$_POST["employee_id"]."'
    ";  
        //   $query = "SELECT * FROM `teaching` WHERE `teaching_id`='".$_POST["employee_id"]."'";  
     //  $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 