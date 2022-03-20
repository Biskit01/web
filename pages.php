
<?php require_once"connect.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/page.css" />
    <link rel="stylesheet" href="./css/grid.css" />
  </head>
  <body>
  <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/letters.png" class="letters" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>


        <nav>
          <div class="container">
            <div class="logo">
              <img src="img/logo.png" alt="" />
            </div>
           
            <div class="links">
              
              <ul>
                
                <li>
                <a href="http://localhost/web/2index.ph">home</a>
                </li>
               
                <li>
                  <a href="http://localhost/web/login.php">login</a>
                </li>
                <li>
                  <a href="http://localhost/web/register.php" class="active">register</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>


        <body>
        
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

        <div class="siz">
               <div class ="sdd">
         <div class="card-top">
                <a href=""><img width="640" height="360" src="./img/<?php echo $post_image; ?>"></a>
                </div>
</div>
          <div class ="conner">
          <div class="box">
                <div class="box-header">
                <h1><?php echo $post_title; ?></h1>
                </div>
                <figcaption>
                    <p>Posted By <strong><?php echo $post_author; ?></strong> | Published on <strong><?php $post_date; ?></strong></p>
                    
               </figcaption>
                <div class="product-detail-description">
                   
                    <div class="product-detail-description-content active">
                    <p><?php echo $post_content; ?></p>
                    </div>
                </div>
            </div>
                </div>
                </div>
                </div>
                </div>
        </body>
    
        <?php
                    }
                }
        ?>
      
        </div>
    </section> 
            </header11>
    <script src="fff.js"></script>
</body>
    </main>

    
    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm"></h3>
            <p class="text">
             
            </p>
          </div>

          <div class="grid-4-col footer-links">
           
            </ul>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm"></h3>
            
          </div>

          <div class="grid-4-col footer-newstletter">
            
            
            <div class="footssser-input-wrap">
              <input type="email" class="footer-input"  />
              <a href="#" class="input-arrow">
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
           
          </div>

          <div class="followme-wrap">
            <div class="followme">
             
              <span class="footer-line"></span>
              
            </div>

            <div class="back-btn-wrap">
              
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>






