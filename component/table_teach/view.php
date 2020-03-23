<div class="container">
    <br><br>
        <table class="table table-bordered">


            
            <tr bgcolor="#f45b69">
                <td align="right">ภาคเรียน/ปีการศึกษา :</td>
                <td width="70%">
                    ภาคเรียนที่ <select name="Faculty" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>

                    </select>
                    ปีการศึกษา <select name="Faculty" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>2560</option>
                        <option>2561</option>
                        <option>2562</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"> คณะ :</td>
                <td width="70%">
                    <select name="Faculty" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="name1">วิศวกรรมศาสตร์</option>
                        <option value="name2">บริหาร</option>

                    </select>
                </td>
            </tr>
            <tr bgcolor="#f45b69">
                <td align="right">สาขาวิชา :</td>
                <td width="70%">
                    <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>วิศวกรรมคอมพิวเตอร์</option>
                        <option>วิศวกรรมไฟฟ้า</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">อาจารย์ผู้สอน :</td>
                <td width="70%">
                    <select class="select-cos">
                        <option>-- กรุณาเลือก --</option>
                        <option></option>
                        <option></option>

                    </select>

                </td>
            </tr>
            <tr bgcolor="#f45b69">
                <td align="right">วิชา :</td>
                <td width="70%">
                    <select class="select-cos">
                        <option>-- กรุณาเลือก --</option>
                        <option></option>
                        <option></option>

                    </select>
                </td>
            </tr>

            <tr>
                <td align="right">กลุ่มนักศึกษา :</td>
                <td width="70%">
                    <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option></option>
                        <option></option>

                    </select>
                </td>
            </tr>

            <tr bgcolor="#f45b69">
                <td align="right">วัน/เวลา :</td>
                <td width="70%">
                    วัน <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>จันทร์</option>
                        <option>อังคาร</option>
                        <option>พุธ</option>
                        <option>พฤหัสบดี</option>
                        <option>ศุกร์</option>
                        <option>เสาร์</option>
                        <option>อาทิตย์</option>

                    </select>
                    คาบเรียนเริ่มต้น <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>

                    คาบเรียนสิ้นสุด <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"> ชั่วโมง ทฤษฏี/ปฏิบัติ :</td>
                <td width="70%">

                    ชั่วโมงทฤษฏี <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>

                    ชั่วโมงปฏิบัติ <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                </td>
            </tr>
            <tr bgcolor="#f45b69">
                <td align="right">ห้องเรียน :</td>
                <td width="70%">
                    <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>36-403</option>
                        <option>36-803</option>

                    </select>
                </td>
        </table>
        <div align="center">
        <input type="submit" name="btnsubmit " id="btnsubmit" value="เพิ่มตารางสอน">
    </div>
        <div style="margin-top:  3%; margin-left: 20px; margin-right: 20px;">

            
ิ<br>
</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$mysqli = new mysqli("localhost","root","","minipro2");


//
$datalenght = 0;
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($result = $mysqli -> query("SELECT * FROM `teaching` WHERE 1 order by `day_id`,period_begin asc")) {
    foreach($result as $data){
        $teaching[$datalenght]  = $data['teaching_id'];
        $starttime[$datalenght]  =  $data['period_begin'];
        $endtime[$datalenght]    =  $data['period_end'];
        $stday[$datalenght]    = $data['day_id'];
        $col[$datalenght] = $endtime[$datalenght] - $starttime[$datalenght]+1;
     
        echo $starttime[$datalenght]." start<br>";
        echo $endtime[$datalenght]." end<br>";
        echo $stday[$datalenght]." std<br>";
        echo $col[$datalenght]." time<br>";
        $datalenght++;

    }
}
?>

<?php $days = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
    //$time = array("08.00","09.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00","17.00","18.00","19.00","20.00","21.00");
    $countdays = 0;
    $counttime =1;
  
    
    ?>
    
    <table border="1">
    <tr >
    <td>วัน</td>
    <td value="1">08.00</td>
    <td value="2">09.00</td>
    <td value="3">10.00</td>
    <td value="4">11.00</td>
    <td value="5">12.00</td>
    <td value="6">13.00</td>
    <td value="7">14.00</td>
    <td value="8">15.00</td>
    <td value="9">16.00</td>
    <td value="10">17.00</td>
    <td value="10">18.00</td>
    <td value="11">19.00</td>
    <td value="12">20.00</td>
    <td value="13">21.00</td>  
    </tr>
    
    <br>
    <?php /* foreach($stday as $countdays){
        
        if(($countdays[$i]) == $stday[$i+1]){
            echo $stday[$i]." stday<br>";
            echo $countdays.
            echo $i." in if  i <br>";
            
        }

        ?>
   
     <tr>
        <td>
            <?php echo $countdays; ?>
            
        </td>
    
                 <?php  echo $i." is i <br>";
                        echo $starttime[$i]." startime<br>";
                        echo $stday[$i]." stday<br>";
                        echo $time[$i]." time<br>";
                        echo $counttime." countime<br>";
                        echo $endtime[$i]." end<br>";
                        
                        while($counttime < 15 ){ echo $i." is i <br>";  ?>

                       <?php 
                       if($starttime[$i] < $endtime[$i]  && $starttime[$i] == $counttime){
                           ?>
                        
                        <td colspan="<?php echo $time[$i]; ?>">รวมมม</td>
                        
                        <?php  
                        echo "...".$counttime."...<br>";
                        echo "value of time is ".$time[$i]."<br>";
                        
                        $counttime = $endtime[$i]+1; 
                        echo $countdays." counday before if<br>";
                        echo $stday[$i]." stday befor if<br>";
                       
                        if(($countdays[$i]) == $stday[$i+1]){
                            
                            $starttime[$i] = $starttime[$i+1];
                            $endtime[$i] = $endtime[$i+1];
                            $time[$i] = $endtime[$i] - $starttime[$i]+1;
                            
                          
                }       
                
                       }
                       
                       
                       
                       ?>
                    
                            
                            
                        <td>
                            <?php echo $counttime; 
                            
                            ?>
                        </td>
                    <?php  
                    
                        $counttime++;
                        
                    }
                    
                    
                    $counttime = 1;//เริ่มนับเวลาใหม่
                   
       
    $i++;

   
}*/?>
<table class="table table-bordered">
   

    <tr >
    <td>วัน</td>
    <td value="1">08.00</td>
    <td value="2">09.00</td>
    <td value="3">10.00</td>
    <td value="4">11.00</td>
    <td value="5">12.00</td>
    <td value="6">13.00</td>
    <td value="7">14.00</td>
    <td value="8">15.00</td>
    <td value="9">16.00</td>
    <td value="10">17.00</td>
    <td value="10">18.00</td>
    <td value="11">19.00</td>
    <td value="12">20.00</td>
    <td value="13">21.00</td>  
    </tr>
    
    <br>
<?php 
//for($i = 0; $i < $datalenght ; $i++ ){
   // echo " This is I ".$i." <br>";
    
    for($day = 0 ; $day < 7 ; $day++){
           
       ?> <tr>    <td> <?php echo $days[$day];?> </td>  <?php 

            
  
        for($time = 0 ; $time < 14 ; $time++){
           
           ?> <td>
            <?php           
                            for($i = 0; $i < $datalenght ; $i++ ) {
                                
                                if($day == $stday[$i] && $starttime[$i] == $time){
                                   
                                    ?> 
                                            
                                      <td colspan="<?php echo $col[$i] ?> "><?php
                                       echo $teaching[$i];
                                        if($time == $starttime[$i+1] && $day == $stday[$i+1]){
                                      echo " ".$teaching[$i+1];
                                    }
                                    error_reporting (E_ALL ^ E_NOTICE);
                                     
                                              
                                
                                           
                                            
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
           
           </td> <?php
        }
       ?> </tr><?php 
    }
//}
?>
</table>

</tr>
     </table>
   
</body>
</html>