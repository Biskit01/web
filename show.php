
<?php require_once"connect.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/card.css" />
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
                  
                </li>
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

        

 
      <div class = "cce" >  <div class="section-header">
            <h3 class="title" >ค้นหาโครงการและโครงงาน</h3>
            <p class="text">
             
            </p>
          </div></div>


  



      <section class="blog section">
        <div class="container">
          
        
        <section class="card-container">
        <?php
                echo '<font color="red">';   
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM tbl_search
                    WHERE post_title LIKE '%$q%' OR post_conte LIKE '%$q%'
                 ORDER BY id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)) {
                                    
                ?>
                <div class="card">
        
        <div class="card-top">
            <a href=""><img width="640" height="360"src="./img/<?php echo $post_image; ?>"></a>
        </div>
        <div class="card-content">
            <h6 class="tag tag-travel"><h2><?php echo $post_title; ?></2h></h6>
            <a href=""></a>
            <p><?php echo $post_content; ?></p>
            <p class="description"><?php echo $post_content; ?></p>
               <p class="post-meta">Posted By <strong><?php echo $post_author; ?></strong> <br> Published on <strong><?php echo $post_date; ?></strong>
                <div class="ff"> 
               <a class="aaa"  href="pages.php?id=<?php echo $post_id; ?>" >Read More</a></br>
                 </div>
        </div>
    </div>
            <?php } ?>




        
       
        </div>
      </section> 
     

     
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
