<?php require_once"connect.php" ?>
<!doctype html>
<html>

<head>
  <title>Business computer department</title>
<link rel="stylesheet" href="css/stelynew2.css">
<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">

</head>
<body>
<div class="menuba">
        
        <div class="container">
         <div class="container222">
          <div class="LOGO">
            <h1> Business computer department </h1>
          </div>
          <ul class="menu">
          <li>
          <a href="http://localhost/web/index.php">Home</a>
        </li>
        <li>
          <a href="http://localhost/web/new.php">News</a>
        </li>
        <li>
          <a href="http://localhost/web/tether.php">Personnel</a>
        </li>
        <li>
          <a href="http://localhost/web/login.php">Log in</a>
        </li>
      </ul>
        </div>
      </div>      
      
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
      <div class="row three-column">
      
        <div class="container">
          <div class="ss">
           <div class="info">
            <h1>ข่าวสารและกิจกรรม</h1>
            <h2>ในแผนกคอมพิวเตอร์ธุรกิจ</h2>
            </div>
         </div>
         <form  class="ac" action="search.php" method="get" enctype="multipart/form-data">
          <div class="div1">
          <div class="wrap">
          <div class="search">
          <input type="text" name="value" class="searchTerm" placeholder="What are you looking for?">
          <button type="submit" name="search" value="search" class="searchButton">
          <i class="fa fa-search"></i>
          <p3>SEARCH</p3>
          </button>
          </div>
          </div>
          </div>
          </div>

        </div>
        </form>
    </header>
      <div class="ddd"></div>
    <session class="content">
        <div class="container">

            <?php 
            
                $select_posts = "SELECT * FROM posts";

                $run_posts = mysqli_query($conn, $select_posts);

                while ($row = mysqli_fetch_array($run_posts)) {
                    $post_id = $row['post_id'];
                    $post_date = $row['post_date'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 300);               
            ?>
        <!-- Normal Demo-->
          <div class="column">
            <!-- Post-->
            <div class="post-module">
              <!-- Thumbnail-->
              <div class="thumbnail">
                <div class="date">
                  <div class="day"></div>
                  <div class="month"></div>
                </div><img width="640" height="360" src="img/<?php echo $post_image; ?>" alt="">
              </div>
              
              <div class="post-content">
                <div class="category">Photos</div>
                <figcaption>
                 <p class="title"><?php echo $post_title; ?></p>
                  <p class="description"><?php echo $post_content; ?></p>
                   <p class="post-meta">Posted By <strong><?php echo $post_author; ?></strong> | Published on <strong><?php echo $post_date; ?></strong>
                   <a class="sw"  href="pages.php?id=<?php echo $post_id; ?>" >Read More</a></p>
                   
                </figcaption>
                  </div>
            </div>
        </div>
                <?php } ?>

        </div>
      </section> 

    </body>      

        

