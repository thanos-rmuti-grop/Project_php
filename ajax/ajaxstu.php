


<?php 
session_start();
 $_SESSION["code"] = $_POST["country_id"];
 echo $state_id = $_POST["state_id"];
echo $semester =  $_POST["semester"]."<br>";
 echo $academic_year =  $_POST["academic_year"];
// Include the database config file 
include_once '../BaseModel/condb.php'; 
if(!empty($_POST["country_id"])){ 
// Fetch state data based on the specific country 


$god = $_POST['country_id'];
$rest = substr($god, 0, 2);
$query = "SELECT * FROM `s_organization` WHERE code LIKE '$rest%'"; 

// $query = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC"; 
$result = mysqli_query($connect, $query); 
// Generate HTML of state options list 
if($result->num_rows > 0){ 
echo '<option value="">เลือกสาขา</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['code'].'">'.$row['name'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่มีอาจารย์</option>'; 
}
}



elseif(!empty($_POST["state_id"])){ 
// Fetch city data based on the specific state 

$query ="SELECT st.std_id
FROM teaching as t , user as u , title , timetable as ti , ess_course  as cr , student as st 
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id  and st.std_id = ti.std_id 
and  st.code_id = $state_id 


GROUP BY name
order by t.day_id ,t.period_begin ASC"; 
// $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
$result = mysqli_query($connect, $query); 
// Generate HTML of city options list 
if($result->num_rows > 0){ 
echo '<option value="">เลือกกลุ่มเรียน</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['std_id'].'">'.$row['std_id'].'</option>'; 

} 
}else{ 
  
echo '<option value="">ไม่พบกลุ่มเรียน</option>'; 
} 
} 

?>