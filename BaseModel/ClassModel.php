<?php
require_once("BaseModel.php");
class UserModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }


    function insertclass($data = []){
        $sql = "INSERT INTO `classroom`(
            `class_id`,
            `class_name`,
            `keeper`,
            `amount`,
            `kind_id`,
            `building_id`,
            `code`
           
        )
        VALUES(
            '".$data["class_id"]."',
            '".$data["class_name"]."',
            '".$data["keeper"]."',
            '".$data["amount"]."',
            '".$data["kind_id"]."',
            '".$data["building_id"]."',
            '".$data["code"]."'
           
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
    function edit_classroom($data = []){
        $sql = "UPDATE
        `classroom`
    SET
        `class_name` = '".$data["class_name"]."',
        `keeper` = '".$data["keeper"]."',
        `amount` = '".$data["amount"]."',
        `kind_id` = '".$data["kind_id"]."',
        `building_id` = '".$data["building_id"]."',
        `code` = '".$data["code"]."'
    WHERE
     `class_id` = '".$data["class_id"]."'
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
    function delete_classroom($id){
        $sql = "DELETE FROM `classroom` WHERE `class_id`='".$id."'
        
        ";
    
        
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    function getBuilding(){
        $sql = "SELECT * FROM `building`
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
    function getClass(){
        $sql = "SELECT b.building_id,b.building_name,c.class_id,c.class_name,o.name,k.kind_name, concat(b.building_id,".'" "'.",b.building_name) as building,concat(u.name,".'" "'.",u.lastname) as fname,c.amount FROM classroom as c,kind as k,building as b,user as u ,s_organization as o WHERE c.keeper =  u.Id_card AND c.kind_id =k.kind_id AND c.building_id = b.building_id AND c.code = o.code 
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
    }
    function faculty(){
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
    }
    
    function getKind(){
        $sql  = "SELECT * FROM kind ";
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
    function getCode(){
       
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
    function getKeeper($id){
        $sql = "SELECT * FROM `user` WHERE `code`='".$id."'";
        
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
    