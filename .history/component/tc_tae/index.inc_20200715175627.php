<?php
    require_once('BaseModel/UserModel.php');
    $user_model = new UserModel;

    $path = "component/tc_tae/";

    if(!isset($_GET['action']) ) {
        $result = $user_model -> getUser();
        $result2 = $user_model -> getUser2();
        $result3 = $user_model -> getUser3();
        $result4 = $user_model -> getUser4();
        

        $ess_cour = $user_model -> getEss_cour();
        // print_r($result4);
        require_once($path.'view.php');
    }
    else if( $_GET['action'] == "update") {
        echo  $data["Id_card"] = $_POST["Id_card"];?> <br> <?php
        echo $data["Title_id"] = $_POST["Title_id"];?> <br> <?php
        echo $data["name"] = $_POST["name"];?> <br> <?php
        echo $data["lastname"] = $_POST["lastname"];?> <br> <?php
        echo $data["password"] = $_POST["password"];?> <br> <?php
        echo $data["code"] = $_POST["code"];?> <br> <?php
     //    echo $data["positin_id"] = $_POST["positin_id"];?> <br> <?php
     //    echo $data["status_id"] = $_POST["status_id"];?> <br> <?php
     //    echo $data["allow_id"] = $_POST["allow_id"];?> <br> <?php
            
         $user_model -> upUser($data);
 
         ?><script>window.location="index.php?act=user";</script><?php
 
     
         
     }
    else if( $_GET['action'] == "add") {
        $data["Id_card"] = $_POST["Id_card"];
        $data["Title_id"] = $_POST["Title_id"];
        $data["name"] = $_POST["name"];
        $data["lastname"] = $_POST["lastname"];
        $data["passsword"] = $_POST["passsword"];
        $data["code"] = $_POST["code"];
        $data["positin_id"] = $_POST["positin_id"];
        $data["status_id"] = $_POST["status_id"];
        $data["allow_id"] = $_POST["allow_id"];

        // $data["big_name"] = $_POST["big_name"]; 
        // $data["big_lastname"] = $_POST["big_lastname"]; 
        // $data["big_call"] = $_POST["big_call"];    
            $user_model -> addUser($data);
    echo "55555555555"
           
    
        
    }
    else if( $_GET['action'] == "add_teahing") {
    echo  $data["timetable_id"] = $_POST["timetable_id"];
    echo   $data["teacher_id"] = $_POST["teacher_id"];
    echo  $data["class_id"] = $_POST["class_id"];
    echo  $data["lastday_idname"] = $_POST["day_id"];
    echo  $data["period_begin"] = $_POST["period_begin"];
    echo  $data["period_end"] = $_POST["period_end"];

    echo $data["theory_hours"] = $_POST["theory_hours"];
    echo $data["practical_hours"] = $_POST["practical_hours"];

    echo $data["code"] = $_POST["code"];
    echo $data["start_date"] = $_POST["start_date"];
    echo $data["end_date"] = $_POST["end_date"];
    echo  $data["std_nor"] = $_POST["std_nor"];
    echo  $data["std_spc"] = $_POST["std_spc"];
       echo "สำเร็จ";

    //    $user_model -> add_teahing($data);
        // $data["big_name"] = $_POST["big_name"]; 
        // $data["big_lastname"] = $_POST["big_lastname"]; 
        // $data["big_call"] = $_POST["big_call"];    
            
    
    
        
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
        ?><script>window.location="index.php?act=tc"</script><?php
        
    } 
    else if( $_GET['action'] == "teahing") {

        $Teahing = $user_model -> getTeahing();
        
        
        
       
        require_once($path.'teahing.php');
        
        
    } 

    ?>

