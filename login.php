<?php
    session_start();
    include('connect.php'); 

?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
       <img src="img/001.png" alt="">
        <div class="text">
          <span class="text-1">เว็บไซต์ระบบสารเทศ<br> วิชาโครงงารและวิชาโครงการ<br>
         แผนกเทคโนโลยีดิจิทัล</span>
        </div>
      </div>
    </div>



    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="login_db.php" method="post">
            <div class="input-boxes">
            <div class = "sizebox">
          <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h7>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h7>
            </div>
            
        <?php endif ?>
        </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email"  name="username">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name=" password">
              </div>
              <div class="button input-box">
              <input type="submit"  name="login_user" value="login">
              </div>
              <div class="text sign-up-text">Don't have an account? <a href="register.php">Sigup now</a></div>
            </div>
        </form>
      </div>



       
        
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
