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
          <h2 class="active" id="login-box-link" href="#"> Sign In </h2>
          <h2 class="inactive underlineHover" id="signup-box-link" href="#">Sign Up </h2>
      
          <!-- Icon -->
          <div class="">
      <img src="https://webs.rmutl.ac.th/assets/upload/files/2018/11/20181114113020_50956.png" id="icon" alt="User Icon" />
    </div>
      
          <!-- Login Form -->
          <form class="email-login" action="login_chek.php?act=signin" method="POST">
            <input type="text" id="login" class="fadeIn second" name="Username" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="Password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
          

           <form class="email-signup" action="login_chek.php?act=signup" method="POST">
            <input type="text" id="" class="fadeIn second" name="Id_card" placeholder="เลขบัตรประจำตัวประชาชน">

            <input type="text" id="" class="fadeIn third" name="Title_id" placeholder="คำนำหน้าชื่อ">
            <select class="fadeIn third" id="country" name='subject'   required>
                                    <option  value="">กรุณาเลือกวิชา</option>
                                    <?php 

                                     ?>
                                        <option   value="">222222222</option>
                                        
                                        
                                   
                                      </select>

            <input type="text" id="" class="fadeIn second" name="name" placeholder="ชื่อ">
            <input type="text" id="" class="fadeIn third" name="lastname" placeholder="นามสกุล">
            <input type="text" id="" class="fadeIn second" name="password" placeholder="รหัสผ่าน">
            
            <input type="text" id="" class="fadeIn third" name="code" placeholder="สาขา">


           <form class="email-signup">
            <input type="text" id="login" class="fadeIn second" name="เลขบัตรประจำตัวประชาชน" placeholder="เลขบัตรประจำตัวประชาชน">
            <input type="text" id="password" class="fadeIn third" name="คำนำหน้าชื่อ" placeholder="คำนำหน้าชื่อ">
            <input type="text" id="login" class="fadeIn second" name="ชื่อ" placeholder="ชื่อ">
            <input type="text" id="password" class="fadeIn third" name="นามสกุล" placeholder="นามสกุล">
            <input type="text" id="login" class="fadeIn second" name="" placeholder="รหัสผ่าน">
            <input type="text" id="password" class="fadeIn third" name="" placeholder="รหัสผ่านยืนยัน">
            <input type="text" id="password" class="fadeIn third" name="" placeholder="สาขา">
            <input type="text" id="password" class="fadeIn third" name="" placeholder="ตำแหน่ง">
            <input type="text" id="password" class="fadeIn third" name="" placeholder="ตำแหน่งพิเศษ">

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