<?php
    require_once('BaseModel/RequestModel.php');
    $Request_Model = new UserModel;
 
    $path = "component/requst/";

    if(!isset($_GET['action']) ) {
        $fac = $Request_Model->faculty();
        $organizations = $Request_Model -> getorganization();
        $user =  $Request_Model -> getuser();
      
        
        require_once($path.'view.php');
    }
    else if ($_GET['action']=="requst"){
       $user =  $Request_Model-> getReport();
        require_once($path.'requst.php');
    }
    ?>