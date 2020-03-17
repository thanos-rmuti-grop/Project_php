<?php include('../BaseModel/condb.php'); ?>
<?php  
 //fetch.php  

 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT *
      FROM `user`,`title`
      WHERE user.title_id = title.title_id
      AND `Id_card` = '".$_POST["employee_id"]."'
      ";  
     //  $query = "SELECT * FROM `user` WHERE `Id_card` = '".$_POST["employee_id"]."'";  
     //  $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }
 ?>
 