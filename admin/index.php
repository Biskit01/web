<?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header("location: login.php");
        
    } else {
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
 
    <link rel="stylesheet" href="css/ggg.css">

 
</head>
<body>
  

    <header>
        <div class="container">
            <h1>Welcome to Admin Page Mr. <?php echo $_SESSION['username']; ?> </h1>
        </div>
    </header>

    <section class="content">
        <div class="content_grid">
       
            <div class="sidebar">
                <h1>Welcome : </h1>
                <div class ="aaa">
                   <button class="ll" <input type="button" onclick="window.location.href='index.php'" value="link_text">Home</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='view_posts.php'" value="link_text">view Posts</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='insert_post.php'" value="link_text">Insert Post</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='index2.php'" value="link_text">Index</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='Logout.php'" value="link_text">Log out</button>
                </div>

            </div>
        
            <div class="showinfo">
                <h1>Welcome to Admin Panel</h1>

                <img width="640"  height="360" src="img/admin22.png" alt="">
            </div>
        </div>
    </section>
</body>
</html>
<?php } ?>