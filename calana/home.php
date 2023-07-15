<?php
    session_start();
    require("include/navbar.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />  
    <title>Pokemon GO Calana</title>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap');
    *,
    *::before,
    *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    }

    .btn-container {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
    } 

    :root {
    --primary: #ec994b;
    --white: #ffffff;
    --bg: #f5f5f5;
    }


    html {
    font-size: 50.5%;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
    width: 1.3rem;
    }

    ::-webkit-scrollbar-thumb {
    border-radius: 1rem;
    background: #797979;
    transition: all 0.5s ease-in-out;
    }

    ::-webkit-scrollbar-thumb:hover {
    background: #222224;
    }

    ::-webkit-scrollbar-track {
    background: #f9f9f9;
    }

    body {
    font-size: 1.0rem;
    }

    .container {
    max-width: 200rem;
    padding: 0 1rem;
    margin: 0 auto;
    }

    .text-center {
    text-align: center;
    font-size:14px;
    }

    .section-heading {
    font-size: 3rem;
    color: var(--primary);
    padding: 2rem 0;
    }

    #tranding {
    padding-top: 4rem;
    padding-bottom: 4rem; 
    }

    @media (max-width:1440px) {
    #tranding {
        padding: 7rem 0;
    }
    }

    #tranding .tranding-slider {
    height: 60rem;
    padding: 7rem 0;
    }


    @media (max-width: 500px) {
    #tranding .tranding-slider {
    height: 45rem;
    padding: 1rem 0;
    }
    }

    .tranding-slide {
    width: 50rem;
    height: 42rem;
    position: relative;
    }

    @media (max-width:500px) {
    .tranding-slide {
    width: 28rem !important;
    height: 36rem !important;
    }

    .tranding-slide .tranding-slide-img img {
    width: 80rem !important;
    height: 36rem !important;
    }
    }

    .tranding-slide .tranding-slide-img img {
        width: 50rem;
        height: 42rem;
        border-radius: 2rem;
        object-fit: contain;
    } 

    .tranding-slide .tranding-slide-content {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    }

    .tranding-slide-content .date {
    position: absolute;
    top: 2rem;
    right: 2rem;
    color: var(--white);
    }

    .tranding-slide-content .tranding-slide-content-bottom {
    position: absolute;
    bottom: 2rem;
    left: 2rem;
    color: var(--white);
    font-size: 3rem;
    }

    .swiper-slide-shadow-left,
    .swiper-slide-shadow-right {
    display: none;
    }

    .tranding-slider-control {
    position: relative;
    bottom: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .tranding-slider-control .swiper-button-next {
    left: 58% !important;
    transform: translateX(-58%) !important;
    }

    @media (max-width:990px) {
    .tranding-slider-control .swiper-button-next {
        left: 70% !important;
        transform: translateX(-70%) !important;
    }}

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-next {
        left: 80% !important;
        transform: translateX(-80%) !important;
    }}

    @media (max-width:990px) {
    .tranding-slider-control .swiper-button-prev {
        left: 30% !important;
        transform: translateX(-30%) !important;
    }}

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-prev {
        left: 20% !important;
        transform: translateX(-20%) !important;
    }}

    .tranding-slider-control .slider-arrow {
    background: var(--white);
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    left: 42%;
    transform: translateX(-42%);
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));}

    .tranding-slider-control .slider-arrow ion-icon {
    font-size: 2rem;
    color: #222224;}

    .tranding-slider-control .slider-arrow::after {
    content: '';}

    .tranding-slider-control .swiper-pagination {
    position: relative;
    width: 15rem;
    bottom: 1rem;}

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));}

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
    background: var(--primary);}

    .btn-center{
    margin: 0 auto;
    position: relative;
    text-align: center;
    padding:10px;
    font-size: 20px;
    background-color:#0066b2;
    color:white;
    border-radius:25px;
    border: none;}

    .tranding-section {
    background-image: url(https://pm1.aminoapps.com/6389/942f4db22a4c0f7a7682c43d21c0728ac7f28674_hq.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding: 4rem 0;}


    h2 {
    font-size: 3rem;
    color: white;
    -webkit-text-stroke-width: 0.8px;
    -webkit-text-stroke-color: black;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    }

    #shop_btn{
    border-radius: 30px;
    float:right;
    border-color:white;
    border-style: solid;
    color:white;
    background-color:transparent;
    font-weight:700;
    width:20%;
    font-size:15px;
    }

     #shop_btn:hover{
    border-radius: 30px;
    float:right;
    background-color:white;
    color:#166483;
    font-weight:700;
    font-size:15px;
    width:20%;
    }


</style>
</head>
<body>


<section id="tranding" class="tranding-section">
  <div class="container">
    <div class="btn-container">
      <input type="submit" id="shop_btn" class="btn-center" value="SHOP NOW" onclick="location='store.php' ">
    </div>

  </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/0/03/Max_Potion.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Max Potion
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/8/8d/Premier_Ball.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Premier Ball
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/326.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Sticker
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/d/d0/Max_Revive.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Max Revive
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/4/44/Silver_Pinap_Berry.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Silver Pinap Berry
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/d/d5/Super_Incubator.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Super Incubator
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://static.wikia.nocookie.net/pokemongo/images/2/2e/Adventure_Box.png">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  Adventure Box
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>  
      </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php 
    require("include/footer.php");
?>