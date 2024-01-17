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
      <h2>Selamat datang di Pusat Bantuan Penyewa Kos!</h2>
      <p>Kami di sini untuk membantu menjawab pertanyaan Anda 
dan memberikan bantuan dalam pengalaman menyewa kos 
yang lebih baik. <br> Berikut adalah beberapa topik yang sering
ditanyakan oleh penyewa kos:</p>
    </div>
    <div class="topic">
      <h3>Cara mencari kos yang sesuai</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Kami dapat membantu Anda dalam mencari kos yang sesuai dengan kebutuhan dan anggaran Anda. Anda dapat menggunakan fitur pencarian pada platform kami atau menghubungi kami untuk mendapatkan saran lebih lanjut.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Persyaratan penyewaan</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Sebelum menyewa kos, pastikan Anda memahami persyaratan penyewaan yang ditetapkan oleh pemilik kos. Persyaratan ini dapat mencakup biaya sewa, jangka waktu sewa, dan persyaratan lainnya.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Cara membayar sewa</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Pastikan Anda memahami cara membayar sewa dan tenggat waktu pembayaran. Sebagian besar pemilik kos menerima pembayaran melalui transfer bank atau tunai.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Masalah dalam kamar kos</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Jika Anda mengalami masalah dalam kamar kos, seperti kerusakan atau kebersihan yang buruk, hubungi pemilik kos secepat mungkin untuk memperbaiki masalah tersebut.</p>
      </div>
    </div>

    <div class="topic">
      <h3>Keluhan tentang tetangga kos</h3>
      <button class="show-answer"></button>
      <div class="answer">
        <p>Jika Anda memiliki keluhan tentang tetangga kos, sebaiknya segera hubungi pemilik kos atau pengelola kos untuk menyelesaikan masalah tersebut.</p>
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
