<?php
require_once("BaseModel.php");
class UserModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getorganization(){
        $sql = "SELECT * FROM `s_organization` WHERE code  not LIKE '%0'
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
    }function faculty(){
        $sql  = "SELECT * FROM s_organization WHERE code = 1500 OR code = 1700 ";
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
    } function getCode(){
       
        $sql  = "SELECT * FROM `s_organization` WHERE code  not LIKE '%0'";
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
    function getuser(){
        $sql  = "SELECT * FROM `user`";
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
    function getReport(){
       
        $sql  = "SELECT * FROM teaching as te ,timetable as ti,user as u ,ess_course as ess WHERE MONTH(te.start_date) =2 AND te.teacher_id= 3249900298946 AND te.std_nor = 1 AND ti.timetable_id = te.timetable_id AND u.Id_card = te.teacher_id and ti.course_id  = ess.COURSE_ID";
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
  
  
   
   
}
    ?>
    