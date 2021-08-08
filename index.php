<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEMU VPS | Web based VPS</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
</head>
<body>
  <section>
    <ul>
      <li><a href="https://api.whatsapp.com/send?phone=994553751223"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
      <li><a href="https://t.me/memuvps"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/memu_vps/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="http://memu-vps.tk/"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
    </ul>
  </section>
  <section>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="vps-info">
            <a href="images/vubuntu.png">
              <img src="images/vubuntu.png" style="width:200px;height:100px;padding:10px;">
            </a>
            <h1>V-Ubuntu</h1>
            <h3>Memory --> 60 gb</h3>
            <h3>Storage -- > 300 gb</h3>
            <h3>Lifetime</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="vps-info">
            <a href="images/gnome-ubuntu.png">
              <img src="images/gnome-ubuntu.png" style="width:200px;height:100px;padding:10px;">
            </a>
            <h1>Gnome Ubuntu</h1>
            <h3>Memory --> 60 gb</h3>
            <h3>Storage -- > 230 gb</h3>
            <h3>Lifetime</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="vps-info">
            <a href="images/ubuntu-VPS.png">
              <img src="images/ubuntu-VPS.png" style="width:200px;height:100px;padding:10px;">
            </a>
            <h1>Ubuntu 20.04</h1>
            <h3>Memory --> 1 gb</h3>
            <h3>Storage -- > 16 gb</h3>
            <h3>3 hours / 25 min.</h3>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section>
    <div class="typewriter">
      <h1>MEMU VPS | Web based VPS</h1>
    </div>
  </section>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <div id="particles-js"></div>
  <script type="text/javascript" src="scripts/particles.min.js"></script>
  <script type="text/javascript" src="scripts/app.js"></script>
</body>
</html>
