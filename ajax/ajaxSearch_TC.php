
<?php 
session_start();
$_SESSION["code"] = $_POST["country_id"];
$_SESSION["course"] = $_POST["state_id"];
// Include the database config file 
include_once '../BaseModel/condb.php'; 
if(!empty($_POST["country_id"])){ 
// Fetch state data based on the specific country 



    $query = "SELECT name,u.id_card 
    FROM teaching as t NATURAL JOIN user as u NATURAL JOIN title NATURAL JOIN timetable as ti NATURAL JOIN ess_course  as cr
    WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id 
    and  t.code = ".$_POST['country_id']." 

GROUP BY name
order by t.day_id ,t.period_begin ASC"; 

// $query = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC"; 
$result = mysqli_query($connect, $query); 
// Generate HTML of state options list 
if($result->num_rows > 0){ 
echo '<option value="">อาจารย์</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['id_card'].'">'.$row['name'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่มีอาจารย์</option>'; 
}
}




















/*


elseif(!empty($_POST["state_id"])){ 
// Fetch city data based on the specific state 
$query = "SELECT *
FROM teaching as t NATURAL JOIN user as u NATURAL JOIN title NATURAL JOIN timetable as ti NATURAL JOIN ess_course  as cr
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id 

and ti.timetable_id =".$_POST['state_id']."


order by t.day_id ,t.period_begin ASC"; 
// $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
$result = mysqli_query($connect, $query); 
// Generate HTML of city options list 
if($result->num_rows > 0){ 
echo '<option value="">เลือกอาจารย์</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['city_id'].'">'.$row['name'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่มีอาจารย์</option>'; 
} 
} 
elseif(!empty($_POST["city_id"])){ 
// Fetch city data based on the specific state 
$query = "SELECT *
FROM teaching as t NATURAL JOIN user as u NATURAL JOIN title NATURAL JOIN timetable as ti NATURAL JOIN ess_course  as cr
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id 

and u.name =".$_POST['city_id']."


order by t.day_id ,t.period_begin ASC"; 
// $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
$result = mysqli_query($connect, $query); 
// Generate HTML of city options list 
if($result->num_rows > 0){ 
echo '<option value="">เลือกอาจารย์</option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['city_id'].'">'.$row['name'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่มีอาจารย์</option>'; 
} 
} */
?>