<?php
require_once("BaseModel.php");
class UserModel extends BaseModel{
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
    function getUser2(){
        $sql = "SELECT * FROM `s_position`
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
    function getUser3(){
        $sql = "SELECT * FROM `title`
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
    function getUser4(){
        $sql = "SELECT CODE,name FROM `s_organization` WHERE 1
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
    function getUser5(){
        $sql = "SELECT * FROM `s_organization`
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
    function getTeahing(){
        $sql = "SELECT * FROM `teaching` ORDER BY `teacher_id` DESC
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
    function getEss_cour(){
        $sql = "SELECT * FROM `ess_course`
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
    function add_teahing($data = []){
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
             '".$data["std_nor"]."',
             '".$data["std_spc"]."'
         )
        ";
        // $sql = "CALL
        // addUser(
        //     '".$data["Id_card"]."',
        //     '".$data["Title_id"]."',
        //     '".$data["name"]."',
        //     '".$data["lastname"]."',
        //     '".$data["passsword"]."',
        //     '".$data["code"]."',
        //     '".$data["positin_id"]."',
        //     '".$data["status_id"]."',
        //     '".$data["allow_id"]."'
        // )
        // ";
        echo "<pre>";
        print_r($sql);
        echo "</pre>";
         if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    function addUser($data = []){
        $sql = "INSERT INTO `user`(`Id_card`, `Title_id`, `name`, `lastname`, `password`, `code`, `position_id`, `status_id`, `allow_id`) VALUESr(
            '".$data["Id_card"]."',
            '".$data["Title_id"]."',
            '".$data["name"]."',
            '".$data["lastname"]."',
            '".$data["passsword"]."',
            '".$data["code"]."',
            '".$data["positin_id"]."',
            '".$data["status_id"]."',
            '".$data["allow_id"]."'
        )
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
    function add_cannot($data = []){
        $sql = "INSERT INTO `cannot_teach`(
            `cannot_teach_id`,
            `Date_begin`,
            `Date_end`,
            `Note`,
            `code`,
            `Teacher_id`,
            `Semester`,
            `Academic_year`
        )
        VALUES(
            NULL,
            '".$data["start"]."',
            '".$data["end"]."',
            '".$data["Note"]."',
            '1733',
            '6851',
            '2',
            '2562'
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
    