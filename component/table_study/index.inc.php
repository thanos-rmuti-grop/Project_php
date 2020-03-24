<?php
    require_once('BaseModel/TimeModel.php');
    $time_model = new TimeModel;

    $path = "component/tc_time/";

    if(!isset($_GET['action']) ) {
        // $result = $user_model -> getUser();
        
        require_once($path.'view.php');
    }
    else if( $_GET['action'] == "update_time") {
       
           echo "5555555555";

        // $time_model -> upUser($data);



    
        
    }
    else if( $_GET['action'] == "add") {
        $data["Id_card"] = $_POST["Id_card"];
       

        // $data["big_name"] = $_POST["big_name"]; 
        // $data["big_lastname"] = $_POST["big_lastname"]; 
        // $data["big_call"] = $_POST["big_call"];    
            $time_model -> addUser($data);
    
            ?><script>window.location="index.php?act=user";</script><?php

    
        
    }
    else if( $_GET['action'] == "add_cannot") {
        


        $data["Note"] = $_POST["Note"]; 
        $data["date_teach"] = $_POST["date_teach"]; 
        $data["subject"] = $_POST["subject"]; 
        $data["Teacher_replace_id"] = $_POST["Teacher_replace_id"];

            $data["date_teach"] = $_POST["date_teach"];
      
            $date = new DateTime($data["date_teach"]);
             echo $date->format('Y-m-d');

       $result = $_POST['daterange'];  // value ที่ส่งมา
            $result_explode = explode('-', $result);
            
           
            
          
        
             $data["start"] = $result_explode[0];  // 0 คือค่าก่อน '-'
             $data["end"] = $result_explode[1]; // 1 ค่าหลัง '-'
 
        // $data["big_call"] = $_POST["big_call"];    
           
        $user_model -> add_cannot($data);
           
    
        
    }
    else if( $_GET['action'] == "delete") {

        $id = $_GET['id'];
        
        
        
       
        $user_model -> delUser($id);
        ?><script>window.location="index.php?act=user"</script><?php

        
    } 

    ?>

