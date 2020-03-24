<?php
    require_once('BaseModel/ClassModel.php');
    $classroom = new UserModel;

    $path = "component/classroom/";

    if(!isset($_GET['action']) ) {
      $building=$classroom -> getBuilding();
      $organizations = $classroom ->  getorganization();
      $kind  = $classroom->getKind();
      $fac = $classroom->faculty();
      $class = $classroom->getClass();
      
        

    
        require_once($path.'insert_room.php');
    }
    else if( $_GET['action'] == "add") {

      $data["class_id"] = $_POST["class_id"]; 
      $data["class_name"] = $_POST["class_name"];
      $data["keeper"] = $_POST["keeper"];
      $data["amount"] = $_POST["amount"];
      $data["kind_id"] = $_POST["kind_id"];
      $data["code"] = $_POST["code"];
      $data["building_id"] = $_POST["building_id"];
      $classroom->insertclass($data);
      ?><script>window.location="index.php?act=classroom&action=showroom";</script><?php

         
     }
     else if( $_GET['action'] == "showroom") {
      $class = $classroom->getClass();
       
     
      require_once($path.'showclassroom.php');

         
     }
     else if($_GET['action'] == "delete"){
      $id =  $_GET['id'];
       $classroom-> delete_classroom($id);
    
       ?><script>window.location="index.php?act=classroom&action=showroom";</script><?php
     
     }

  
    ?>

