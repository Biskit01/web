<?php require_once "connect.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
    <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
<div class="menuba">
    <div class="container">
      <div class="LOGO">
        <h1> Business computer department </h1>
      </div>
      <ul class="menu">
        <li>
          <a href="http://localhost/เล่นๆ/index.php">Home</a>
        </li>
        <li>
          <a href="http://localhost/เล่นๆ/new.php">News</a>
        </li>
        <li>
          <a href="http://localhost/เล่นๆ/tether.php">Personnel</a>
        </li>
        <li>
          <a href="http://localhost/เล่นๆ/admin/login.php">Log in</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="clearfix"></div>

    <header>
    <div id="the-future-of-wysiwyg" class="row-container card">
        <linearGradient id="gradient-2" gradientTransform="rotate(90)">
        <stop offset="5%" stop-color="rgba(233,244,255,0)"></stop>
        <stop offset="95%" stop-color="rgba(233,244,255,.5)"></stop>
        </linearGradient>
        </defs>
        </svg>
        <div class="row">
        <div class="column-container">
        <div class="column centered">
        </div>
        </div>
    </div>
    
    <div class="container">
                <div class="logo">
                    <h1><a href="index.php">Businesscomputer</a><h1>
                </div>

        </div>
    </header>

    <session class="content">
        <div class="container">

            <?php 
                if (isset($_GET['id'])) {
                    $page_id = $_GET['id'];
                    
                    $select_posts = "SELECT * FROM posts WHERE post_id = '$page_id'";

                    $run_posts = mysqli_query($conn, $select_posts);
                    
                    while ($row = mysqli_fetch_array($run_posts)) {

                        $post_id = $row['post_id'];
                        $post_date = $row['post_date'];
                        $post_author = $row['post_author'];
                        $post_title = $row['post_title'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];

             ?>
             <header11>
              <div id="the-future-of-wysiwyg" class="row-container card">
              <linearGradient id="gradient-2" gradientTransform="rotate(90)">
             <stop offset="5%" stop-color="rgba(233,244,255,0)"></stop>
             <stop offset="95%" stop-color="rgba(233,244,255,.5)"></stop>
              </linearGradient>
               </defs>
             </svg>
              <div class="row">
                 <div class="column-container">
                <div class="column centered">
                </div>
                  </div>
                 </div>     
            <figure>
                <h1><?php echo $post_title; ?></h1>
                <img width="640" height="360" src="img/<?php echo $post_image; ?>" alt="">
                <figcaption>
                    <p>Posted By <strong><?php echo $post_author; ?></strong> | Published on <strong><?php $post_date; ?></strong></p>
                    <p><?php echo $post_content; ?></p>
               </figcaption>
            </figure>
            <div class="loading">
            <img src="http://a.top4top.net/p_1990j031.gif" alt="Loading">
        </div>
        <div class="mouse original"></div>
        <?php
                    }
                }
        ?>
      
        </div>
    </section> 
            </header11>
    <script src="fff.js"></script>
</body>
</html>
