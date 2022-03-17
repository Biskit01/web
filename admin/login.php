<?php

    require_once "connect.php";
   
    session_start();

    if (isset($_POST['login'])) {

        $username = mysqli_real_escape_string($conn, $_POST['username'] );
        $password = mysqli_real_escape_string($conn, $_POST['password'] );

        $query = "SELECT *  FROM admin WHERE username = '$username' AND password = '$password'"; 
        
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successfully');</script>";
            header("location: index.php");
        } else {
          echo "<script>alert('Username or Password is incorrect!');</script>";
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Page</title>
    
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/fff2.css">

</head>
<body>
   
<form action="login.php" method="post">
      <section class="user">
    
      
            <div class="user_options-registered">
             
            </div>
      
          <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
              <h2 class="forms_title">Login</h2>
              <form class="forms_form">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                    <input type="text" name="username" class="forms_field-input" required autofocus />
                  </div>
                  <div class="forms_field">
                  <input type="password" name="password" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <button type="button" class="forms_buttons-forgot"></button>
                  <input type="submit"  name="login"value="login" class="forms_buttons-action">
                </div>
              </form>
            </div>
            <div class="user_forms-signup">
              <h2 class="forms_title">Sign Up</h2>
              <form class="forms_form">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                    <input type="text" placeholder="Full Name" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="email" placeholder="Email" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="password" placeholder="Password" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <input type="submit" value="Sign up" class="forms_buttons-action">
                </div>
              </form>
            </div>
          </div>
        </div>
        <script src="fff.js"></script>
   
      </section>
    </form>
 </body>
 </html> 