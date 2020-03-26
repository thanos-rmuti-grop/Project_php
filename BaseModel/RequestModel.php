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
  
   
   
}
    ?>
    