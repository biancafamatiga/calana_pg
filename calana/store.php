<?php
    session_start();
    require("include/navbar.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Pokemon Go Calana</title>
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

    @media (min-width: 1440px) {
    html {
        zoom: 1.5;
    }
    }

    @media (min-width: 2560px) {
    html {
        zoom: 1.7;
    }
    }

    @media (min-width: 3860px) {
    html {
        zoom: 2.5;
    }
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
    background: var(--bg);
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
    padding: 4rem 0;
    }

    @media (max-width:1440px) {
    #tranding {
        padding: 7rem 0;
    }
    }

    #tranding .tranding-slider {
    height: 52rem;
    padding: 2rem 0;
    position: relative;
    }

    @media (max-width:500px) {
    #tranding .tranding-slider {
        height: 45rem;
    }
    }

    .tranding-slide {
    width: 37rem;
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
    width: 37rem;
    height: 42rem;
    border-radius: 2rem;
    object-fit: cover;
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
    }
    }

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-next {
        left: 80% !important;
        transform: translateX(-80%) !important;
    }
    }

    @media (max-width:990px) {
    .tranding-slider-control .swiper-button-prev {
        left: 30% !important;
        transform: translateX(-30%) !important;
    }
    }

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-prev {
        left: 20% !important;
        transform: translateX(-20%) !important;
    }
    }

    .tranding-slider-control .slider-arrow {
    background: var(--white);
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    left: 42%;
    transform: translateX(-42%);
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .slider-arrow ion-icon {
    font-size: 2rem;
    color: #222224;
    }

    .tranding-slider-control .slider-arrow::after {
    content: '';
    }

    .tranding-slider-control .swiper-pagination {
    position: relative;
    width: 15rem;
    bottom: 1rem;
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
    background: var(--primary);
    }


    
</style>

</head>
<body>


<section id="tranding">
      <div class="container">
        <h3 class="text-center section-subheading">- PLACEHOLDER LANG TO -</h3>
        <h1 class="text-center section-heading">STICKERS</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/328.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/06</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/327.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/07</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
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
                <h3 class="date">07/06</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/325.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/05</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/324.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/06</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/323.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/06</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="https://www.serebii.net/pokemongo/stickers/322.png">
              </div>
              <div class="tranding-slide-content">
                <h3 class="date">07/07</h3>
                <div class="tranding-slide-content-bottom">
                  <h2 class="update-name">
                  TEXT
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