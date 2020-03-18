<?php include('../BaseModel/condb.php'); ?>

  <?php 
 $_POST["employee_id"];
 if(isset($_POST["employee_id"]))  
 {  
     //  echo $_POST["employee_id"];
      $output = '';  
      $query = "SELECT ess_course.course_title AS 'name'
      FROM teaching,timetable,ess_course
      WHERE teaching.timetable_id = timetable.timetable_id
      AND ess_course.COURSE_ID =timetable.course_id
      AND teaching.teacher_id = '".$_POST["employee_id"]."'";  

     //  $query = "SELECT * FROM `user` WHERE `Id_card` = '".$_POST["employee_id"]."'";  

      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result)>=1){
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">'; 
    
      while($row = mysqli_fetch_array($result))  
      {  
           
          
           $output .= '  
                    
                <tr>  
                     <td width="30%"><label>วิชา</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                     
                </tr>  
               
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
     }else{
          echo "ไม่มีสอน";
     }
}
 ?>