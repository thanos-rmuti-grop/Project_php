<?php 
// Include the database config file 
$con= mysqli_connect("localhost","root","","mini_project_database_compelete");
if(!empty($_POST["subject"])){ 
// Fetch state data based on the specific country 



$query = "SELECT *
FROM USER AS u , teaching AS tc , timetable AS t, ess_course AS c
WHERE u.id_card = tc.teacher_id  AND  tc.timetable_id = t.timetable_id AND  t.course_id = c.course_id
AND c.course_id = ".$_POST['subject'].""; 

// $query = "SELECT * FROM states WHERE subject = ".$_POST['subject']." AND status = 1 ORDER BY state_name ASC"; 
$result = mysqli_query($con, $query); 
// Generate HTML of state options list 
if($result->num_rows > 0){ 
echo '<option value="">กรุณาเลือก</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['Id_card'].'">'.$row['name'].'</option>'; 
} 
}else{ 
echo '<option value="">State not available</option>'; 
} 
}























elseif(!empty($_POST["state_id"])){ 
// Fetch city data based on the specific state 
$query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
$result = mysqli_query($con, $query); 
// Generate HTML of city options list 
if($result->num_rows > 0){ 
echo '<option value="">Select city</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
} 
}else{ 
echo '<option value="">City not available</option>'; 
} 
} 
?>