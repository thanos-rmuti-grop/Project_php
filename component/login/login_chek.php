<?php
session_start();

$_POST['Username'];
$_POST['Password'];
    // $username = $username;

        if(($_POST['Username'])=="tae"){
				echo "เข้ามา";
                                    //   include("../../BaseModel/UserModel.php");
                                    //   $user_model = new UserModel;
                                    
                                    // $Username = $_POST['Username'];
                                    // $Password = $_POST['Password'];
                                    
                                    //   $login_user = $user_model->getLogin($_POST['username'],$_POST['password']);

                    
                                    // $login = $user_model->login($_POST['Username'],$_POST['Password']);
                    
                                    //   $result = mysqli_query($conn,$sql);
                                    // print_r($login);
                                //    echo "login";
                                //     if(!isset($_POST['Username'])){
                                //     //   if(mysqli_num_rows($login)==1)
                                //         // echo "55555";
                                //           $row = mysqli_fetch_array($result);
                                //            $_SESSION["UserID"] = $row["ID"];
                                //           $_SESSION["user"] = $row["fname"]." ";
                                        
                                //           $_SESSION["company"] = $row["company"];
                                //           $_SESSION["Userlevel"] = $row["Userlevel"];
                    
                                //         //   if($_SESSION["Userlevel"]=="A"){ 
                    
                                            Header("Location: ./../../index.php?act=home");
                    
                                //         //   }
                    
                                //         //   if ($_SESSION["Userlevel"]=="M"){  
                    
                                //         //     Header("Location: Mini_project_Web/../index_user/index_user.php");
                    
                                //         //   }
                    
                                //         //   }else{
                                            
                                //             // echo "<script>";
                                //             //     echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                                //             //     echo "window.history.back()";
                                //             // echo "</script>";
                    
                                //       }
 
             } else{
                echo "55555555555555555555555555555555555555555555555555555555555555555555555555555";
 
             Header("Location: ./../../index.php?act=login"); 
 
        }
    
        
?>