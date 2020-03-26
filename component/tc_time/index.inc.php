<?php
    require_once('BaseModel/TimeModel.php');
    $time_model = new TimeModel;

    $path = "component/tc_time/";

    if(!isset($_GET['action']) ) {
        // $result = $user_model -> getUser();
        
        require_once($path.'view.php');
    }
    else if( $_GET['action'] == "add_teaching") {
        

      echo  $data["class_id"] = $_POST["class_id"]; 
      
      echo  $data["start_date"] = $_POST["start_date"]; 
      echo $data["end_date"] = $_POST["end_date"];
      echo $data["practical_hours"] = $_POST["practical_hours"];
      echo $data["theory_hours"] = $_POST["theory_hours"];
      echo $data["period_end"] = $_POST["period_end"];
      echo $data["period_begin"] = $_POST["period_begin"];
      echo $data["day_id"] = $_POST["day_id"];
      echo $data["teacher_id"] = $_POST["teacher_id"];
      echo $data["code"] = $_POST["code"];

      echo $data["course_id"] = $_POST["course_id"];
      echo $data["std_id"] = $_POST["std_id"];
      echo $data["academic_year"] = $_POST["academic_year"];
      echo $data["semester"] = $_POST["semester"];

        $time_model -> add_teaching($data);



        
    }


    ?>

