<?php 
 
$con= mysqli_connect("localhost","root","","minipro2");

if(!empty($_POST["fac"]) &&$_POST["fac"] ==1500){ 

    $query = "SELECT * FROM s_organization WHERE code  not LIKE '%0'  and parent = 1520"; 
    $result = mysqli_query($con, $query); 
 
    if($result->num_rows > 0){ 
    echo '<option value="">เลือกสาขา </option>'; 
    while($row = $result->fetch_assoc()){  
    echo '<option value="'.$row['code'].'">'.$row['name'].'</option>'; 
    }
    
    }
}if(!empty($_POST["fac"]) &&$_POST["fac"] == 1700){ 

    $query = "SELECT * FROM s_organization WHERE code  not LIKE '%0' AND  parent not like '%0_' AND parent LIKE '17%'"; 
    $result = mysqli_query($con, $query); 
 
    if($result->num_rows > 0){ 
    echo '<option value="">เลือกสาขา </option>'; 
    while($row = $result->fetch_assoc()){  
    echo '<option value="'.$row['code'].'">'.$row['name'].'</option>'; 
    }
    
    }

}
if(!empty($_POST["major"])){ 

    $query = "SELECT * FROM user as u , title as t WHERE  u.title_id = t.title_id and code = ".$_POST['major']." "; 
    $result = mysqli_query($con, $query); 
    
    if($result->num_rows > 0){ 
        echo'<table = "table table-bordered " style="width: fix-content;">';
        echo "<tr>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>จัดการใบเบิก</th>
        </tr>";
    while($row = $result->fetch_assoc()){  
        echo '<tr>' ;
        echo '<td >'.$row['name'].'</td>'; 
        echo '<td >'.$row['lastname'].'</td>'; 
        echo '<td ><a href="#">ใบเบิก</a></td >';
        echo '</tr>' ;
    }
    echo '</table>' ; 
    } 
    }
else {
    
}

?>