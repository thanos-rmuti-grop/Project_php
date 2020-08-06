<?php
require_once("BaseModel.php");
class TimeModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function check(){
        $sql = "SELECT * FROM teaching,timetable WHERE 1
        ";
        //ใส่ไว้สำหรับ ค้นหาข้อมูล
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ
            $data = [];
            foreach($result as $row){
                $data[] = $row;
            }
            // while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                
            // }
           
           
        
            $result->close();
            return $data;
        }	
       
        
    }
 
function add_teaching($data = []){
        $sql = "INSERT INTO timetable ( timetable_id, semester, academic_year, std_id, course_id, code) VALUES ( NULL,'".$data["semester"]."', '".$data["academic_year"]."', '".$data["std_id"]."', '".$data["course_id"]."', '".$data["code"]."');

        INSERT INTO teaching( timetable_id, 
        teacher_id, 
        class_id, 
        day_id, 
        period_begin, 
        period_end, theory_hours, practical_hours, code, start_date, end_date, std_nor, std_spc)  
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
    