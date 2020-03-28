<?php 
 
$con= mysqli_connect("localhost","root","","minipro2");
if(!empty($_POST["major"])){ 

$query = "SELECT * FROM user as u , title as t WHERE  u.title_id = t.title_id and code = ".$_POST['major']." "; 
$result = mysqli_query($con, $query); 

if($result->num_rows > 0){ 
echo '<option value="">เลือกผู้ดูแล </option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['Id_card'].'">'.$row['title_short'].' '.$row['name'].' '.$row['lastname'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่พบผู้ดูแล</option>'; 
} 
}
if(isset($_POST["selecmonth"]) && $_POST["selecmonth"] ==2){ 

    echo '<option value="">เลือกเดือน</option>'; 
    echo '<option value="11">พฤศจิกายน</option>'; 
    echo '<option value="12">ธันวาคม</option>'; 
    echo '<option value="1">มกราคม</option>'; 
    echo '<option value="2">กุมภาพันธ์</option>'; 
    echo '<option value="3">มีนาคม</option>'; 
    
    }
   else if(isset($_POST["selecmonth"]) &&$_POST["selecmonth"] ==1){ 
        echo '<option value="">เลือกเดือน</option>'; 
        echo '<option value="6">มิถุนายน</option>'; 
        echo '<option value="7">กรกฎาคม</option>'; 
        echo '<option value="8">สิงหาคม</option>'; 
        echo '<option value="9">กันยายน</option>'; 
        echo '<option value="10">ตุลาคม</option>'; 
    }else {
        echo '<option value="">ไม่พบผู้ดูแล</option>'; 
    }

?>