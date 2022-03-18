
<?php 
    session_start();
    include('connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register Page</title>

    <link rel="stylesheet" href="login.css">
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
            <div class="title">Register</div>
          <form action="register_db.php" method="post">
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
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="username">
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name=" password_1">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm  password" name=" password_2">
              </div>
              <div class="button input-box">
              <input type="submit" name="reg_user"value="register">
              </div>
              <div class="text sign-up-text">Already have an account? <a href="Login.php">Login now</a></div>
            </div>
        </form>
      </div>


</body>