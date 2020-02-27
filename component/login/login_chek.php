<?php
session_start();
require_once('../../BaseModel/LoginModel.php');

$login = new LoginModel;
if(($_POST['Username'])==''){
    ?><script>alert("กรุณากรอกรหัสให้ครบ")</script><?php
    ?><script>window.location="../../index.php?act=login";</script><?php
}
if(isset($_POST['Username']) && isset($_POST['Password'])){
    if($_POST['Username'] != '' && $_POST['Password'] != ''){
        $data['Username']=$_POST['Username'];
        $data['Password']=$_POST['Password'];

        $login_user = $login->getLogin($data);
        foreach($login_user as $data){
            // print_r($data);
          echo $_SESSION['Id_card'] = $data['Id_card'];
          echo $_SESSION['Title_id'] = $data['Title_id'];
          echo $_SESSION['name'] = $data['name'];
          echo $_SESSION['lastname'] = $data['lastname'];
          echo $_SESSION['code'] = $data['code'];
        }

        if($_SESSION['Id_card'] > 0){
            // $_SESSION['wsd_administrator_user'] = $login_user;
            
            ?><script>window.location="../../index.php?act=tc";</script><?php
            
            
        }else{
            ?><script>alert("รหัสไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง")</script><?php

            ?><script>window.location="../../index.php?act=login";</script><?php
        }
    }else{
        ?><script>window.location="../../index.php?act=login";</script><?php
    }
}else{
    ?><script>window.location="../../index.php?act=login";</script><?php
}
?>