<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/estilos.css">


</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(img/chicago.png)"></div>
      <div class="swiper-slide" style="background-image:url(img/aleman.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/barberia.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/barba.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/Logob.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/damian.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/bebe.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/wallper.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/lugarBarbería.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/aleman.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

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
        depth: 100,
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