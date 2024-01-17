<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/Logo.png" width="300" height="200">
    <link rel="stylesheet" href="Index.css" />
    <title>AdaKos</title>
    <style>
    body {
      background-image: url('image/Alam.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
  </head>
  <body>
    <header>
      <h1>
      <a href= "index.php">
      <img src="image/Logo.png" alt="" class="Logo" />
      </a>
      </h1>
      <nav>
        <ul>
          <li><a href="PB.php">Pusat Bantuan</a></li>
          <li><a href="SK.php">Syarat dan Ketentuan</a></li>
          <li><a href="Masuk.php">Masuk</a></li>
        </ul>
      </nav>
    </header>
    <div class="hero-container">
      <h2>Cari Kamar Kos?</h2>
      <div id="search-container">
        <input
          type="text"
          id="search-input"
          placeholder="Masukkan tempat yang ingin Anda cari"
        />
        <button id="search-button">Cari</button>
      </div>
      <div id="map"></div>
      <img src="image/Hands.png" alt="" width="300" height="200">
    </div>

    <!-- Konten -->

    <div class="content-container">
      <h3>Kamar Tersedia</h3>
      <div class="slider-container">
        <div class="kamar-list">
          <div class="kamar-item">
            <h4>Kamar Kos 1</h4>
            <p>Lokasi: Jakarta</p>
            <p>Harga: Rp 1.500.000/bulan</p>
            <a href="Kos/jakarta.php">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 2</h4>
            <p>Lokasi: Bogor</p>
            <p>Harga: Rp 2.000.000/bulan</p>
            <a href="">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 3</h4>
            <p>Lokasi: Bandung</p>
            <p>Harga: Rp 1.800.000/bulan</p>
            <a href="Kos/Bandung.php">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 4</h4>
            <p>Lokasi: Surabaya</p>
            <p>Harga: Rp 1.200.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 5</h4>
            <p>Lokasi: Yogyakarta</p>
            <p>Harga: Rp 1.600.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 6</h4>
            <p>Lokasi: Semarang</p>
            <p>Harga: Rp 1.400.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 7</h4>
            <p>Lokasi: Malang</p>
            <p>Harga: Rp 1.300.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 8</h4>
            <p>Lokasi: Bali</p>
            <p>Harga: Rp 2.500.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 9</h4>
            <p>Lokasi: Medan</p>
            <p>Harga: Rp 1.100.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 10</h4>
            <p>Lokasi: Makasar</p>
            <p>Harga: Rp 1.700.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
        </div>
        <button class="prev-button"></button>
        <button class="next-button"></button>
      </div>
    </div>

    <!-- Testimoni -->
<div class="content-container">
    <h3>Testimoni</h3>
  <div class="slider-container1">
    <div class="testimoni-list">
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 1.jpg" alt="Avatar Testimoni 1">
        </div>
        <h4>John Doe</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Pelayanan sangat memuaskan. Kamar yang disediakan bersih dan nyaman. Saya sangat puas!"</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 2.jpg" alt="Avatar Testimoni 2">
        </div>
        <h4>Jane Smith</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Sangat mudah melakukan reservasi. Harganya juga terjangkau. Sangat direkomendasikan!"</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 3.jpg" alt="Avatar Testimoni 3">
        </div>
        <h4>Michael Johnson</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Lokasinya strategis, dekat dengan pusat kota. Fasilitas lengkap dan harga yang sesuai dengan kualitas."</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 1.jpg" alt="Avatar Testimoni 4">
        </div>
        <h4>Sarah Anderson</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Tempat yang nyaman dan tenang untuk tinggal. Dekat dengan fasilitas umum. Sangat direkomendasikan!"</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 2.jpg" alt="Avatar Testimoni 5">
        </div>
        <h4>David Brown</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Staf yang ramah dan membantu. Semua kebutuhan saya terpenuhi dengan baik. Saya sangat puas!"</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 3.jpg" alt="Avatar Testimoni 6">
        </div>
        <h4>Emily Wilson</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Lingkungan yang aman dan nyaman. Suasana yang tenang cocok untuk belajar dan beristirahat."</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 1.jpg" alt="Avatar Testimoni 7">
        </div>
        <h4>Daniel Lee</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Harga yang terjangkau dengan fasilitas yang bagus. Pelayanan yang ramah membuat saya merasa di rumah."</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 2.jpg" alt="Avatar Testimoni 8">
        </div>
        <h4>Megan Taylor</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Tempat yang bersih dan rapi. Lokasinya juga strategis, dekat dengan pusat perbelanjaan."</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 3.jpg" alt="Avatar Testimoni 9">
        </div>
        <h4>Andrew Clark</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Fasilitas lengkap dengan harga yang terjangkau. Saya merasa senang tinggal di sini."</p>
      </div>
      <div class="testimoni-item">
        <div class="avatar">
          <img src="image/Avatar 1.jpg" alt="Avatar Testimoni 10">
        </div>
        <h4>Olivia White</h4>
        <p>Lokasi: Jakarta Selatan</p>
        <p>"Pelayanan yang profesional dan efisien. Saya merasa nyaman selama tinggal di sini."</p>
      </div>
    </div>
    <button class="prev-button1"></button>
    <button class="next-button1"></button>
  </div>
</div>
<!-- fungsi button -->
<script>
  var kamarSliderContainer = document.querySelector(".slider-container");
  var testimoniSliderContainer = document.querySelector(".slider-container1");
  var kamarList = document.querySelector(".kamar-list");
  var testimoniList = document.querySelector(".testimoni-list");
  var kamarItems = document.querySelectorAll(".kamar-item");
  var testimoniItems = document.querySelectorAll(".testimoni-item");
  var prevButton = document.querySelector(".prev-button");
  var nextButton = document.querySelector(".next-button");
  var prevButton1 = document.querySelector(".prev-button1");
  var nextButton1 = document.querySelector(".next-button1");
  var kamarCurrentIndex = 0;
  var testimoniCurrentIndex = 0;

  function showNextKamarSlide() {
    kamarCurrentIndex++;
    if (kamarCurrentIndex >= kamarItems.length) {
      kamarCurrentIndex = 0;
    }
    updateKamarSlider();
  }

  function showPreviousKamarSlide() {
    kamarCurrentIndex--;
    if (kamarCurrentIndex < 0) {
      kamarCurrentIndex = kamarItems.length - 1;
    }
    updateKamarSlider();
  }

  function showNextTestimoniSlide() {
    testimoniCurrentIndex++;
    if (testimoniCurrentIndex >= testimoniItems.length) {
      testimoniCurrentIndex = 0;
    }
    updateTestimoniSlider();
  }

  function showPreviousTestimoniSlide() {
    testimoniCurrentIndex--;
    if (testimoniCurrentIndex < 0) {
      testimoniCurrentIndex = testimoniItems.length - 1;
    }
    updateTestimoniSlider();
  }

  function updateKamarSlider() {
    kamarList.style.transform = "translateX(-" + kamarCurrentIndex * 100 + "%)";
  }

  function updateTestimoniSlider() {
    testimoniList.style.transform =
      "translateX(-" + testimoniCurrentIndex * 100 + "%)";
  }

  prevButton.addEventListener("click", showPreviousKamarSlide);
  nextButton.addEventListener("click", showNextKamarSlide);
  prevButton1.addEventListener("click", showPreviousTestimoniSlide);
  nextButton1.addEventListener("click", showNextTestimoniSlide);
</script>

    <footer class="footer">
      <p>&copy; 2023 Ada Kos. All rights reserved.</p>
    </footer>
  </body>
</html>