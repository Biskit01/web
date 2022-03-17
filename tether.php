<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Business computer department</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper.min.css">
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">


  <!-- Demo styles -->
  <style>
  body {
      background: #ffffff;
      text-align: center;
      font-size: 14px;
      font-family: 'Prompt', sans-serif;
      margin: 0;
      padding: 0;
     }

.clearfix{
    clear: both;
}
.container{
    width: 1200px;
    margin: 0% auto ;
}

.header {
    width: 100%;
    margin-top: -7%;
    height: 794px;
    background-image: url(./รูปภาพ/bg11.png);
    background-size: cover;
    background-position: center;
    text-align: center;
    background-position: top;
}
.menuba{
height:50px;
width: 100%;
background:#ffffff;
box-shadow: 0 0 10px #666;
}
.menuba ul.menu li{
    box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
    outline-color: rgba(255, 255, 255, .5);
    text-shadow: none;
    transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
  } 
  
.menuba .LOGO {
   float: left ;
}
.menuba h1{
    margin: 0;
    font-size: 24px;
    font-weight: bolder;
    padding-top: 10px
}
.menuba ul.menu{
     list-style: none;
     float: right ;
    
}
.menuba ul.menu li{
    float: left;
    margin-left: 50px;
}
.menuba ul.menu li a{
    text-decoration: none;
    color: rgb(61, 61, 61);
    border-bottom: 2px solid transparent;
    padding-bottom: 20px;
    transition: all 0.3S ease;
}
.menuba ul.menu li a:hover{
    border-bottom: 2px solid rgb(5, 21, 54);
}
.header {
  width: 100%;
}

.header_area {
  padding-top: 576px;
  text-align: center;
  margin-left:176px;
  color: #0d14ff;
  width: 660px;
}
.header_area h1 {
  margin: 0;
  font-size: 60px;
  padding-right: 7%;
  font-weight: normal;
}
.header_area h4 {
  margin-top:10% ;
  margin-top: 15px;
  width: 480px;
  font-size: 30px;
  color: #fbff00;
}
.header_area h1{
  white-space: nowrap;
  --item-percent: calc(
    var(--item-index) / var(--item-total)
  );
  
  color: hsl(
      calc(320 * var(--item-percent)
    ), 
    90%, 
    65%
  );
  
  animation: slide-in 1.2s cubic-bezier(.4,.0,.2,1) both;
  animation-delay: calc(.1s * var(--item-index));
}

@keyframes slide-in {
  from {
    transform: scale(.8) translateY(1em);
    opacity: 0;
  }
}

.header_area h4{
  white-space: nowrap;
  --item-percent: calc(
    var(--item-index) / var(--item-total)
  );
  
  color: hsl(
      calc(320 * var(--item-percent)
    ), 
    90%, 
    65%
  );
  
  animation: slide-in 1.4s cubic-bezier(.4,.0,.2,1) both;
  animation-delay: calc(.2s * var(--item-index));
}

@keyframes slide-in {
  from {
    transform: scale(.8) translateY(1em);
    opacity: 0;
  }
}

    .swiper-container {
      width: 100%;
      padding-top: 200px;
      padding-bottom: 50px;
      background-color: #0d14ff;
     
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 380px;
      background-color:#fff;

    }
    .swiper-slide .imgBx{
      width: 100%;
      height: 300px;
      overflow:hidden;
    }
    .swiper-slide.imgBx img{
      width: 100%; 
    }
    .swiper-slide.details{
      box-sizing: border-box;
      font-size : 20px;
      padding :20px;
    }
    .swiper-slide.details h3{
      margin:100px;
      padding:0;
      font-size:20px;
      line-height: 20px;
    }
  

  </style>
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
  <header class="header">
    <div class="container">
      <div class="header_area">
        <h1>บุคลากรในแผนกคอมพิวเตอร์ธุรกิจ</h1>
      </div>
  </div></header>
  
 </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/01.jpg">
         </div>
        <div class="details" >
         <h3 >นางสาวนฤมล ตรีตรง<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/02.jpg">
         </div>
        <div class="details">
         <h3>นางนันทารัตน์ ทองธวัช<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/03.jpg">
         </div>
        <div class="details">
         <h3>นางสาคร ศรีสุวรรณ<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/04.jpg">
         </div>
        <div class="details">
         <h3>นายปิยวิทย์ หนุมาศ<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/05.jpg">
         </div>
        <div class="details">
         <h3>นายรพีพัฒน์ พรหมดนตรี<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/06.jpg">
         </div>
        <div class="details">
         <h3>นางสาวจตุพร ตรีตรง<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/07.jpg">
         </div>
        <div class="details">
         <h3>นายทัศน์พงศ์ พงศ์สมัคร<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/08.jpg">
         </div>
        <div class="details">
         <h3>นายธีระพงศ์ แก้วทอง<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/09.jpg">
         </div>
        <div class="details">
         <h3>นางวรรณรัตน์ ทองกลาง<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/10.jpg">
         </div>
        <div class="details">
         <h3>นายอรรถวุฒิ รักษ์วงศ์ <br><span>ครูอัตราจ้าง</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/11.jpg">
         </div>
        <div class="details">
         <h3>นางสาวสกาวรัตน์ เห็นพร้อม<br><span>ครูอัตราจ้าง</span></h3>
         </div>
       </div>
       <div class="swiper-slide">
        <div class="imgBx">
         <img src ="รูปภาพ/12.jpg">
         </div>
        <div class="details">
         <h3>นางสาวดนุภา จิตรามวงศ์<br><span>ข้าราชการครู</span></h3>
         </div>
       </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>
