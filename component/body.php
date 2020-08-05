<?php

                $act = $_GET['act'];
				  if($act=='tc'){
                    require_once("component/tc_tae/index.inc.php"); 
				  	
				  }
				  else if ($act=='insert') {
					  require_once("component/tc_tae/create.php");
				  	
				  }
				  else if ($act=='test') {
					  require_once("component/tc_tae/test.php");
				  	
				  }
				  
				  else if ($act=='home') {
					  require_once("component/home/view.php");
				  	
				  }
				  else if ($act=='tc_kim') {
					  require_once("component/tc_kim/view.php");
				  	
				  }
				  else if ($act=='requisition') {
					  require_once("component/requst/index.inc.php");
				  	
				  }
				  
				  else if ($act=='cannot') {
					  require_once("component/tc_tae/cannot.php");
				  	
				  }
				  else if ($act=='insert_tc') {
					  require_once("component/tc_time/tc.php");
				  	
				  }
				  else if ($act=='tc_time') {
					  require_once("component/tc_time/index.inc.php");
				  	
				  }

				  else if ($act=='login') {
					  ?><script>window.location="component/login/login.php";</script><?php
				  	
				  }
				 
				  else if ($act=='model') {
					?><script>window.location="component/login/login_chek.php";</script><?php
				  	
				  }
				  else if ($act=='logout') {
					session_unset();
					?><script>window.location="component/login/logout.php";</script><?php
				  	
				  }
				   else if ($act=='classroom') {
					    require_once("component/classroom/index.inc.php");
					 
				  	
				  }
				  
				   else if ($act=='home') {
					    require_once("component/home.php");
					 
				  	
				  }
				   else if ($act=='user') {
					    require_once("component/user/index.inc.php");
					 
				  	
				  }
				   else if ($act=='teahing') {
					    require_once("component/tc_tae/teahing.php");
					 
				  	
				  }
				   else if ($act=='use') {
					    require_once("component/tc_tae/user.php");
					 
				  	
				  }
				   else if ($act=='manage') {
					    require_once("component/manage/view.php");
					 
				  	
				  }
				   else if ($act=='table_study') {
					    require_once("component/table_study/view.php");
					 
				  	
				  }
				   else if ($act=='search_study') {
					    require_once("component/table_study/search.php");
					 
				  	
				  }