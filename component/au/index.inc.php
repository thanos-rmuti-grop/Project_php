<?php
    require_once('BaseModel/RequestModel.php');
    $time_model = new TimeModel;

    $path = "component/au/";

    if(!isset($_GET['action']) ) {
      
        
        require_once($path.'view.php');
    }
    ?>