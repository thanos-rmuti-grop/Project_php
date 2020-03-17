
<?php
session_start();
require_once('../../BaseModel/LoginModel.php');
            $login = new LoginModel;

 
 if($_GET['act'] == "signin") {
  $_POST['Username'];
  $_POST['Password'];
        if(isset($_POST['Username'])){
				
            
				
                  $data['Username'] = $Username = $_POST['Username'];
                  $data['Password'] = $Password = $_POST['Password'];
                //query 
                
                $login_user = $login->getLogin($data);
                foreach($login_user as $data){
                    $_SESSION['Id_card'] = $data['Id_card'];
                    $_SESSION['Title_id'] = $data['Title_id'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['lastname'] = $data['lastname'];
                    $_SESSION['password'] = $data['password'];
                    $_SESSION['code'] = $data['code'];
                    $_SESSION['position_id'] = $data['position_id'];
                    $_SESSION['status_id'] = $data['status_id'];
                    $_SESSION['allow_id'] = $data['allow_id'];
                    $_SESSION['title_name'] = $data['title_name'];
                    $_SESSION['position_name'] = $data['position_name'];
                }
 
                //   $sql="SELECT * FROM user WHERE username ='$Username' AND password ='$Password' ";
 
                //   $result = mysqli_query($conn,$sql);
				
                  if($_SESSION['allow_id']=='1'){
                      
 
                            //   $row = mysqli_fetch_array($login_user);
                            // $_SESSION["UserID"] = $row["ID"];
                            //   $_SESSION["user"] = $row["fname"]." ";
                            //   $_SESSION["Userlevel"] = $row["Userlevel"];
        
                               if($_SESSION['position_id']=="291"){ //admin
                                   
       
                                Header("Location: ../../index.php?act=home");
        
                              }
        
                               if ($_SESSION['position_id']=="292"){  //user
                                

                                Header("Location: ../../index.php?act=home");
        
                                }

                               if ($_SESSION['position_id']=="293"){  //officer
                                

                                Header("Location: ../../index.php?act=home");
        
                                }
 
                  }else{
                    
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
               }
 
         }else{
 
 
             Header("Location: ../../index.php?act=login"); 
 
        }}
      
        
        else if($_GET['act'] == "signup") {
        
          echo  $data["Id_card"] = $_POST["Id_card"];?> <br> <?php
          echo $data["Title_id"] = $_POST["Title_id"];?> <br> <?php
          echo $data["name"] = $_POST["name"];?> <br> <?php
          echo $data["lastname"] = $_POST["lastname"];?> <br> <?php
          echo $data["password"] = $_POST["password"];?> <br> <?php
          echo $data["code"] = $_POST["code"];?> <br> <?php
     
          $login->addlogin($data);
          echo "<script>";
                        echo "alert(\" สมัครสำเร็จ\");"; 
                        echo "window.history.back()";
                    echo "</script>";
          
   
          
        }
       
?>

