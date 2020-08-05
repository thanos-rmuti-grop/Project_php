<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);


$mysqli = new mysqli("localhost","root","","minipro2");
error_reporting (E_ALL ^ E_NOTICE);
                                     
$datalenght = 0;
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($result = $mysqli -> query("SELECT *
FROM teaching as t , user as u , title , timetable as ti , ess_course  as cr , classroom as c
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id and t.class_id = c.class_id
and  U.id_card = '".$q."'



order by t.day_id ,t.period_begin asc"))    {
    foreach($result as $data){
        $title[$datalenght] = $data['title_short'];
        $tcfname[$datalenght]  = $data['name'];
        $tclname[$datalenght]  = $data['lastname'];
        $teaching[$datalenght]  = $data['teaching_id'];
        $starttime[$datalenght]  =  $data['period_begin'];
        $endtime[$datalenght]    =  $data['period_end'];
        $stday[$datalenght]    = $data['day_id'];
        $crouse[$datalenght]  = $data['COURSE_TITLE'];
        $crouse_code[$datalenght]  = $data['COURSE_CODE'];
        $std[$datalenght]  = $data['std_id'];
        $class[$datalenght]  = $data['class_id'];
        $id[$datalenght] = $data['teacher_id'];
        $col[$datalenght] = $endtime[$datalenght] - $starttime[$datalenght]+1;
        $datalenght++;

    }
}
?>

<?php $days = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
    //$time = array("08.00","09.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00","17.00","18.00","19.00","20.00","21.00");
    $countdays = 0;
    $counttime =1;
    
    ?>


<div class="row">
<table class="table table-bordered";>
   

   <thead bgcolor="#CCFFCC">
       <th >วัน</th>
  
       <th scope="col" value="1">08.00</th>
       <th scope="col" value="2">09.00</th>
       <th scope="col" value="3">10.00</th>
       <th scope="col" value="4">11.00</th>
       <th scope="col" value="5">12.00</th>
       <th scope="col" value="6">13.00</th>
       <th scope="col" value="7">14.00</th>
       <th scope="col" value="8">15.00</th>
       <th scope="col" value="9">16.00</th>
       <th scope="col" value="10">17.00</th>
       <th scope="col" value="10">18.00</th>
       <th scope="col" value="11">19.00</th>
       <th scope="col" value="12">20.00</th>
       <th scope="col" value="13">21.00</th>
       
   </thead> 
    <br>
<?php 
//for($i = 0; $i < $datalenght ; $i++ ){
   // echo " This is I ".$i." <br>";
    
    for($day = 0 ; $day < 7 ; $day++){
           
       ?> <tr>    <th  scope="row"> <?php echo $days[$day];?> </th>  <?php 

            
  
        for($time = 1 ; $time <= 14 ; $time++){
           
           ?> 
            <?php           
                            for($i = 0; $i < $datalenght ; $i++ ) {
                                
                                if($day == $stday[$i] && $starttime[$i] == $time){
                                   
                                    ?> 
                                            
                                            <td align="left" bgcolor="#F6FF33" colspan="<?php echo $col[$i] ?> "><?php
                                       echo "[".$crouse_code[$i]."] ".$crouse[$i]."<br>";
                                       echo  "(".$std[$i].") ห้อง ".$class[$i]."<br>".$title[$i]." ".$tcfname[$i]." ".$tclname[$i]."<br>";
                                            $tid =  $teaching[$i]; ?>

<div align="right" ><a class="edit_tc" id="<?php echo $tid ?>" href="#"><?php echo $tid ?> <i class="fas fa-user-edit edit_tc"></i></a>

<a class="" onclick="return confirm('กรุณากด ยืนยัน เพื่อลบข้อมูล รหัสการสอน <?php echo $tid ?>')" " href="index.php?act=tc_time&action=del_tc&id=<?php echo $tid ?>"> <i class="fas fa-user-slash"></i> </a></div> 

<?php
                                        if($time == $starttime[$i+1] && $day == $stday[$i+1]){
                                      echo " ".$title[$i+1]." ".$tcfname[$i+1]." ".$tclname[$i+1]."<br>";
                                    }
                                   
                                              
                                
                                           
                                            
                                       /* foreach($stday as $value){
                                            if($day == $value){
                                                    foreach($teaching as $tec){
                                                        if($starttime[$i] == $time){
                                                        echo $tec." ";
                                                            }
                                                    }
                                                
                                                
                                            }
                                        }*/
                                      ?>
                                      
                                      
                                       </td> 
                                        <?php $time = $endtime[$i]+1?>
                                        
                                    <?php
                                }
                            }
                        
               ?> 
           
           <td>  </td> <?php
        }
       ?> </tr><?php 
    }
//}
?>
 
 
</body>
</html>



