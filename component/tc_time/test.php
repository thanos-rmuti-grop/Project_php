<?php
require_once("BaseModel.php");
class TimeModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function check($data){
        $sql = "select * from teaching  as t 
            where 
            class_id =  '".$data["class_id"]."' and
            start_date = '".$data["start_date"]."' and 
            end_date = '".$data["end_date"]."' and 
            practical_hours = '".$data["practical_hours"]."' and
            theory_hours = '".$data["theory_hours"]."' and
            period_begin = '".$data["period_begin"]."' and 
            period_end = '".$data["period_end"]."' and
            
            day_id = '".$data["day_id"]."' and
            teacher_id = '".$data["teacher_id"]."' and 
            code = '".$data["code"]."' 
        ";
        //ใส่ไว้สำหรับ ค้นหาข้อมูล
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ
            $data = [];
            foreach($result as $row){
                $data[] = $row;
            }
            // while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                
            // }
            $num=mysqli_num_rows($result); 
            
            if($num > 0)   		
            {
            //ตรวจสอบถ้าไม่มีสมาชิกนี้ในฐานข้อมูลจะเด้งไปหน้าเพิ่มข้อมูลสมาชิก (หน้านี้ทำเพิ่มเองนะครับ ลองดู workshop ก่อนหน้าครับ)   
                 echo "<script>";
                 echo "alert('มีข้อมูลนี้แล้ว !');";
                 echo "window.history.back();";
                   echo "</script>";

                 
            }else if($num == 0){
                $sql = "INSERT INTO timetable ( timetable_id, semester, academic_year, std_id, course_id, code) VALUES ( NULL,'".$data["semester"]."', '".$data["academic_year"]."', '".$data["std_id"]."', '".$data["course_id"]."', '".$data["code"]."');

                INSERT INTO teaching( timetable_id, teacher_id, class_id, day_id, period_begin, period_end, theory_hours, practical_hours, code, start_date, end_date, std_nor, std_spc)  
                VALUES
        ( LAST_INSERT_ID(),
        '".$data["teacher_id"]."',
        '".$data["class_id"]."',
        '".$data["day_id"]."',
        '".$data["period_begin"]."',
        '".$data["period_end"]."',
        '".$data["theory_hours"]."',
        '".$data["practical_hours"]."',
        '".$data["code"]."',
        '".$data["start_date"]."',
        '".$data["end_date"]."',
            NULL,
            NULL)
            ";
        
        
                
        
        
        
        
                echo "<pre>";
                print_r($sql);
                echo "</pre>";
                if (static::$db->multi_query($sql) === TRUE) {
                    echo "1";
                } else {
                    echo "0";
                }
        
                
            
            
            }else{
                echo "....";
            }
           
            
            $result->close();
            return $data;
        }	
       
        
    }
 
function add_teaching($data = []){
        $sql = "INSERT INTO timetable ( timetable_id, semester, academic_year, std_id, course_id, code) VALUES ( NULL,'".$data["semester"]."', '".$data["academic_year"]."', '".$data["std_id"]."', '".$data["course_id"]."', '".$data["code"]."');

        INSERT INTO teaching( timetable_id, teacher_id, class_id, day_id, period_begin, period_end, theory_hours, practical_hours, code, start_date, end_date, std_nor, std_spc)  
        VALUES
( LAST_INSERT_ID(),
'".$data["teacher_id"]."',
'".$data["class_id"]."',
'".$data["day_id"]."',
'".$data["period_begin"]."',
'".$data["period_end"]."',
'".$data["theory_hours"]."',
'".$data["practical_hours"]."',
'".$data["code"]."',
'".$data["start_date"]."',
'".$data["end_date"]."',
    NULL,
    NULL)
    ";


        




        echo "<pre>";
        print_r($sql);
        echo "</pre>";
        if (static::$db->multi_query($sql) === TRUE) {
            echo "1";
        } else {
            echo "0";
        }

        
    }
function update_tc($data = []){
        $sql = "UPDATE
        `teaching`
    SET
        `timetable_id` = '".$data["timetable_id"]."',
        `class_id` = '".$data["class_id"]."',
        `day_id` = '".$data["day_id"]."',
        `period_begin` = '".$data["period_begin"]."',
        `period_end` = '".$data["period_end"]."',
        `theory_hours` = '".$data["theory_hours"]."',
        `practical_hours` = '".$data["practical_hours"]."',
        `start_date` = '".$data["start_date"]."',
        `end_date` = '".$data["end_date"]."'
      
    WHERE
    `teaching_id` = '".$data["teaching_id"]."'

    ";


        




        echo "<pre>";
        print_r($sql);
        echo "</pre>";
        if (static::$db->multi_query($sql) === TRUE) {
            echo "1";
        } else {
            echo "0";
        }

        
    }
    // DELETE FROM `user` WHERE `Id_card` = '".$id."'
    function del_tc($id){
        
        $sql = "DELETE FROM teaching WHERE teaching_id = '".$id."'
        ";

        
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    
}
    ?>
    