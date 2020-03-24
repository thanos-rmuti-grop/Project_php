<?php
require_once("BaseModel.php");
class TimeModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }
    function getUser(){
        $sql = "SELECT * FROM `user` ORDER BY `Id_card` ASC
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
        $sql = "INSERT INTO `teaching`(
            `teaching_id`,
            `timetable_id`,
            `teacher_id`,
            `class_id`,
            `day_id`,
            `period_begin`,
            `period_end`,
            `theory_hours`,
            `practical_hours`,
            `code`,
            `start_date`,
            `end_date`,
            `std_nor`,
            `std_spc`
        )
        VALUES(
            NULL,
            '".$data["timetable_id"]."',
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
            '1',
            '1'
        );
        ";
        echo "<pre>";
        print_r($sql);
        echo "</pre>";
         if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    function upUser($data = []){
            $sql = "UPDATE
            `user`
        SET
            `Title_id` = '".$data["Title_id"]."',
            `name` = '".$data["name"]."',
            `lastname` = '".$data["lastname"]."',
            `password` = '". $data["password"]."',
            `code` = '".$data["code"]."',
            `allow_id` = '".$data["allow_id"]."'
        WHERE
        `Id_card` = '".$data["Id_card"]."'
            ";
            //ใส่ไว้สำหรับ ค้นหาข้อมูล
            if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
                return 1;
            }else {
                return 0;
            }
            
    }
    function delUser($id){
        
        $sql = "DELETE FROM `user` WHERE `Id_card` = '".$id."'
        ";

        
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

}
    ?>
    