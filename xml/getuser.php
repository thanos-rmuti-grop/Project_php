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
FROM teaching as t NATURAL JOIN user as u NATURAL JOIN title NATURAL JOIN timetable as ti NATURAL JOIN ess_course  as cr NATURAL JOIN classroom as c
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id and t.class_id = c.class_id
and  t.teacher_id = '".$q."'



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
                                            $tid =  $id[$i]; ?>

<div align="right" ><a class="edit_data" id="<?php echo $tid ?>" href="#"> <i class="fas fa-user-edit "></i></a>

<a class="edit_data" id="<?php echo $tid ?>" href="#"> <i class="fas fa-user-slash"></i> </a></div> 

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
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">แก้ไขข้อมูล</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" action="index.php?act=tc_time&action=update_time">  

                          <label>รหัสบัตรประชาชน</label>  
                          <input type="text" name="Id_card" id="Id_card" class="form-control" />  
                          <br />  
                          <label>คำนำหน้า</label>  
                          <textarea name="Title_id" id="Title_id" class="form-control"></textarea>  
                          <br />  
                          <label>ชื่อ</label>  
                          <input type="text" name="name" id="name" class="form-control" />  

                          <br />  
                          <label>นามสกุล</label>  
                          <input type="text" name="lastname" id="lastname" class="form-control" />  
                          <br />  
                          <label>รหัสผ่าน</label>  
                          <input type="text" name="password" id="password" class="form-control" />  
                          <br />  
                          <label>สาขา</label>  
                          <input type="text" name="code" id="code" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />   -->

                      
                </div>  
                <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="insert" id="insert" value="Insert" type="submit" class="btn btn-primary" data="modal" 
                onclick="return confirm('กรุณากด ยืนยัน เพื่อเพิ่ม')">ยืนยัน
                </button>
</form> 
                </div>  
           </div>  
      </div>  
 </div> 
 <script>
   $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"ajax/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#Id_card').val(data.Id_card);  
                     $('#Title_id').val(data.Title_id);  
                     $('#name').val(data.name);  
                     $('#lastname').val(data.lastname);  
                     $('#password').val(data.password);  
                     $('#code').val(data.code);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"ajax/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
  </script>
</body>
</html>



