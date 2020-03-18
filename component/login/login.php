<?php
require_once('../../BaseModel/UserModel.php');
$tc = new UserModel;

$tc_show = $tc->getUser3();
$organization = $tc->getUser5();

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active" id="login-box-link" href="#"> เข้าระบบ </h2>
          <h2 class="inactive underlineHover" id="signup-box-link" href="#">สมัครสมาชิก </h2>
      
          <!-- Icon -->
          <div class="">
      <img src="https://webs.rmutl.ac.th/assets/upload/files/2018/11/20181114113020_50956.png" id="icon" alt="User Icon" />
    </div>
      
          <!-- Login Form -->
          <form class="email-login" action="login_chek.php?act=signin" method="POST">
            <input type="text" id="login" class="fadeIn second" name="Username" placeholder="เลขบัตรประชาชน">
            <input type="text" id="password" class="fadeIn third" name="Password" placeholder="รหัสผ่าน">
            <input type="submit" class="fadeIn fourth" value="เข้าสู่ระบบ">
          </form>
          
           <form class="email-signup" action="login_chek.php?act=signup" method="POST">
            <input type="text" id="" class="fadeIn second" name="Id_card" pattern="[0-9].{12,}" title="รหัสบัตรประชาชนไม่ถูกต้อง" placeholder="เลขบัตรประจำตัวประชาชน" required>
            
            <select style="background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  border-bottom: 2px solid #5fbae9;
  "  name="Title_id" id="" class="fadeIn second tae" id="exampleFormControlSelect1" pattern="" title="ไม่มีข้อมูล">
                <option  align="center" value="">กรุณาเลือก</option>

            <?php foreach($tc_show as $data){ ?>
              <option value="<?php echo $data['title_id']; ?>"><?php echo $data['title_name']; ?></option>
              <?php } ?>
            </select>


<!-- <input type="text" id="" class="fadeIn third" name="Title_id" placeholder="คำนำหน้าชื่อ" value="" required> -->

            <input type="text" id="" class="fadeIn second" name="name"   placeholder="ชื่อ" required>
            <input type="text" id="" class="fadeIn third" name="lastname" placeholder="นามสกุล" required>
            <input type="text" id="" class="fadeIn second" name="password" pattern="{8,}" title="รหัสบัตรประชาชนไม่ถูกต้อง" placeholder="รหัสผ่าน" required>
            <div align="center"><select style="background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  border-bottom: 2px solid #5fbae9;" name="code" id="" class="fadeIn second tae" id="exampleFormControlSelect1" required>
                  <option value="">กรุณาเลือก</option>

            <?php foreach($organization as $data){ ?>
              <option value="<?php echo $data['code']; ?>"><?php echo $data['name']; ?></option>

            <?php } ?>
            </select></div>
            <!-- <input type="text" id="" class="fadeIn third" name="code" placeholder="สาขา" required> -->

            <input type="submit" class="fadeIn fourth" value="สมัคร">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
      <script >
    const $btn = $('#login-box-link');
    const $btg = $('#signup-box-link');
    $('.email-signup').hide();

$btg.on('click', function(){
    $(".email-login").fadeOut(100);
    $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$btn.on('click', function(){
    $('.email-login').delay(100).fadeIn(100);
    $('.email-signup').fadeOut(100);
    $('#login-box-link').addClass('active');
    $('#signup-box-link').removeClass('active');
});

      </script>
</body>
</html>