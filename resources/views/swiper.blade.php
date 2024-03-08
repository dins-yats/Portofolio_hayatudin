<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Responsive Slider with Swiper.js</title>
</head>
<body>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <!-- Mobile version (1 image) -->
      <div class="swiper-slide">
        <img src="path/to/mobile-image.jpg" alt="Mobile Image">
      </div>
      <!-- Desktop version (4 images) -->
      <div class="swiper-slide">
        <img src="path/to/desktop-image1.jpg" alt="Desktop Image 1">
      </div>
      <div class="swiper-slide">
        <img src="path/to/desktop-image2.jpg" alt="Desktop Image 2">
      </div>
      <div class="swiper-slide">
        <img src="path/to/desktop-image3.jpg" alt="Desktop Image 3">
      </div>
      <div class="swiper-slide">
        <img src="path/to/desktop-image4.jpg" alt="Desktop Image 4">
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>


// script.js
import Swiper from 'swiper';

document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
});