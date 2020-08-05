<?php

    require_once('BaseModel/TimeModel.php');
    $time_model = new TimeModel;

    $path = "component/tc_time/";

  
   
    if(!isset($_GET['action']) ) {
        // $result = $user_model -> getUser();
        
        require_once($path.'view.php');
    }
    else if( $_GET['action'] == "add_teaching") {


     echo  $data["class_id"] = $_POST["class_id"]; ?> <br> <?php
     echo  $data["start_date"] = $_POST["start_date"]; ?> <br> <?php
     echo $data["end_date"] = $_POST["end_date"];?> <br> <?php
     echo $data["practical_hours"] = $_POST["practical_hours"];?> <br> <?php
     echo $data["theory_hours"] = $_POST["theory_hours"];?> <br> <?php
     echo $data["period_end"] = $_POST["period_end"];?> <br> <?php
     echo $data["period_begin"] = $_POST["period_begin"];?> <br> <?php
       echo $data["day_id"] = $_POST["day_id"];?> <br> <?php
     echo $data["teacher_id"] = $_POST["teacher_id"];?> <br> <?php
     echo $data["code"] = $_POST["code"];?> <br> <?php
     echo $data["course_id"] = $_POST["course_id"];?> <br> <?php
     echo $data["std_id"] = $_POST["std_id"];?> <br> <?php
     echo $data["academic_year"] = $_POST["academic_year"];?> <br> <?php
     echo $data["semester"] = $_POST["semester"];?> <br> <?php

          $check  = $time_model -> check();
          if($check >1){
            
              foreach($check as $show){
               $_SESSION["day_id"] = $show['day_id'];
               $_SESSION["class_id"] = $show['class_id'];
               $_SESSION["start_date"] = $show['start_date'];
               $_SESSION["end_date"] = $show['end_date'];
               $_SESSION["practical_hours"] = $show['practical_hours'];
               $_SESSION["theory_hours"] = $show['theory_hours'];
               $_SESSION["period_end"] = $show['period_end'];
               $_SESSION["period_begin"] = $show['period_begin'];
               $_SESSION["teacher_id"] = $show['teacher_id'];
               $_SESSION["code"] = $show['code'];

                }

                if(
                    $_SESSION["day_id"] = $_POST["day_id"] &&
                    $_SESSION["class_id"] = $_POST["class_id"] &&
                    $_SESSION["start_date"] = $_POST["start_date"] &&
                    $_SESSION["end_date"] = $_POST["end_date"] &&
                    $_SESSION["practical_hours"] = $_POST["practical_hours"] &&
                    $_SESSION["theory_hours"] = $_POST["theory_hours"] &&
                    $_SESSION["period_begin"] = $_POST["period_begin"] &&
                    $_SESSION["period_end"] = $_POST["period_end"] &&
                    $_SESSION["teacher_id"] = $_POST["teacher_id"] &&
                    $_SESSION["code"] = $_POST["code"]
                
                ){
                    echo "555555";
                    // เพิ่มข้อมูล
                    ?> <script>alert("เพิ่มข้อมูลไม่สำเร็จ");</script> <?php


                   
              }else if(
                $_SESSION["day_id"] != $_POST["day_id"] &&
                $_SESSION["class_id"] != $_POST["class_id"] &&
                $_SESSION["start_date"] != $_POST["start_date"] &&
                $_SESSION["end_date"] != $_POST["end_date"] &&
                $_SESSION["practical_hours"] != $_POST["practical_hours"] &&
                $_SESSION["theory_hours"] != $_POST["theory_hours"] &&
                $_SESSION["period_begin"] != $_POST["period_begin"] &&
                $_SESSION["period_end"] != $_POST["period_end"] &&
                $_SESSION["teacher_id"] != $_POST["teacher_id"] &&
                $_SESSION["code"] != $_POST["code"]
              ){
                  echo "9999999999";
                  echo $data["class_id"] = $_POST["class_id"]; 
                    echo $data["start_date"] = $_POST["start_date"]; 
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
                    ?> <script>alert("เพิ่มข้อมูลสำเร็จ");</script> <?php
              }
              
          }else{
              echo "ไม่พบข้อมูล";
          }



  
    }
    else if( $_GET['action'] == "update_tc") {

      echo $data["teaching_id"] = $_POST["teaching_id"];
      echo $data["timetable_id"] = $_POST["timetable_id"];
      echo $data["teacher_id"] = $_POST["teacher_id"];
      echo  $data["class_id"] = $_POST["class_id"]; 
      echo  $data["start_date"] = $_POST["start_date"]; 
      echo $data["end_date"] = $_POST["end_date"];
      echo $data["practical_hours"] = $_POST["practical_hours"];
      echo $data["theory_hours"] = $_POST["theory_hours"];
      echo $data["period_end"] = $_POST["period_end"];
      echo $data["period_begin"] = $_POST["period_begin"];
      echo $data["day_id"] = $_POST["day_id"];
      echo $data["code"] = $_POST["code"];
      
          $time_model -> update_tc($data);
          ?><script>window.location="index.php?act=tc_time";</script><?php


        
  
    }
    else if( $_GET['action'] == "del_tc") {
    echo $id = $_GET['id'];

          $time_model -> del_tc($id);

          ?><script>window.location="index.php?act=tc_time";</script><?php

        
  
    }
  

    ?>