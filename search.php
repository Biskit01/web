<?php require_once "connect.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Page</title>
    <link rel="stylesheet" href="css/search2.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
 
</head>
<body>
<div class="menuba">
    <div class="container">
      <div class="LOGO">
        <h1> Business computer department </h1>
      </div>
      <ul class="menu">
        <li>
          <a href="http://localhost/exd/index.php">Home</a>
        </li>
        <li>
          <a href="http://localhost/exd/new.php">News</a>
        </li>
        <li>
          <a href="http://localhost/exd/tether.php">Personnel</a>
        </li>
        <li>
          <a href="http://localhost/exd/admin/login.php">Log in</a>
        </li>
      </ul>
    </div>
  </div>
    <header>
    <form action="search.php" method="get" enctype="multipart/form-data">
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

    <session class="content">
        <div class="container">

           <h1>Search Result :</h1>
        <?php 
           
           if (isset($_GET['search'])) {
                $search_value = $_REQUEST['value'];
            }

            if (empty($search_value)) {
                echo "<h3 style='margin-top: 2rem; text-align: center; color: red;'>Oops!!, can not find any data</h3>";
            } else {
                $search_query = "SELECT * FROM posts WHERE post_keywords LIKE '%$search_value%'";

                $run_query = mysqli_query($conn, $search_query);

                while ($search_row = mysqli_fetch_array($run_query)) {
                    $post_id = $search_row['post_id'];
                    $post_author = $search_row['post_author'];
                    $post_date = date('y-m-d');
                    $post_title = $search_row['post_title'];
                    $post_image = $search_row['post_image'];
                    $post_content = substr($search_row['post_content'], 0, 150);




              
        
        
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
            <?php 
                }
            }
            
            ?>
      
        </div>
    </section> 

</body>
</html>