<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="PB.css" />
  <link rel="icon" href="image/Logo.png" />
  <title>Pusat Bantuan</title>
</head>
<style>
    body {
      background-image: url('image/Alam.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
<body>
  <header>
    <h1>
    <a href= "index.php">
      <img src="image/Logo.png" alt="" class="Logo" />
      </a>
    </h1>
    <nav>
      <ul>
        <li><a href="PB.php">Penyewa Kos</a></li>
        <li><a href="PemilikKos.php">Pemilik Kos</a></li>
        <li><a href="#Masuk">Masuk</a></li>
      </ul>
    </nav>
  </header>
  <div class ="container">
  <div class="welcome">
      <h2>Selamat datang di Pusat Bantuan Pemilik Kos!</h2>
      <p>Kami di sini untuk membantu menjawab pertanyaan Anda 
dan memberikan bantuan dalam mengelola dan 
memasarkan kos Anda. <br> Berikut adalah beberapa topik yang 
sering ditanyakan oleh pemilik kos:</p>
    </div>
    <div class="topic">
      <h3>Membuat akun </h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>    Jika Anda belum memiliki akun di 
      platform kami, Anda dapat membuat 
      akun dengan mengikuti panduan 
      yang terdapat di halaman utama 
      website kami. Pastikan untuk mengisi 
      data dengan lengkap dan akurat agar 
      akun Anda dapat diverifikasi dengan 
      mudah.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Memasang iklan kos</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p> Setelah berhasil membuat akun, Anda 
      dapat langsung memasang iklan kos di 
      platform kami. Pastikan iklan yang Anda 
      buat jelas dan informatif, serta 
      mencantumkan semua informasi 
      penting seperti biaya sewa, jangka waktu 
      sewa, dan fasilitas yang tersedia.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Mengelola pemesanan</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Jika Anda menerima pemesanan dari 
      calon penyewa kos, pastikan untuk 
      meninjau profil penyewa dengan 
      cermat sebelum menerima pesanan. 
      Jangan ragu untuk menghubungi penyewa untuk mendapatkan 
informasi tambahan jika diperlukan.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Menangani keluhan</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>
      Jika Anda menerima keluhan dari 
      penyewa kos, pastikan untuk menangani 
      masalah tersebut dengan cara yang 
      tepat dan segera. Cobalah untuk 
      memahami dan menyelesaikan masalah secara adil dan efektif.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Mengubah informasi iklan kos</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>
      Jika ada perubahan pada informasi 
      iklan kos Anda, seperti biaya sewa 
      atau fasilitas yang tersedia, pastikan 
      untuk segera mengubah informasi 
      tersebut di akun Anda di platform 
      kami.</p>
      </div>
    </div>
    <div class = "Keterangan">
    <p>Kami berharap informasi ini bermanfaat bagi Anda dalam pengalaman 
menyewa kos yang lebih baik. <br>Jika Anda memiliki pertanyaan lain atau 
memerlukan bantuan tambahan, jangan ragu untuk menghubungi <br>
kami di nomor telepon atau email yang tercantum di platform kami.<br> 
Terima kasih!</p>
  </div>
  </div>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      const showAnswerButtons = document.querySelectorAll('.show-answer');
      
      showAnswerButtons.forEach(button => {
        button.addEventListener('click', () => {
          const answer = button.nextElementSibling;
          answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
      });
    });
  </script>
  <footer class="footer">
      <p>&copy; 2023 Ada Kos. All rights reserved.</p>
    </footer>
</body>
</html>
