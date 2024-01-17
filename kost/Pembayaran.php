<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
  margin: 0;
  padding: 20px;
}

.pembayaran-container {
  max-width: 600px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 40px;
}

.pembayaran-title {
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

.pembayaran-info {
  margin-bottom: 20px;
}

.pembayaran-label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #555;
}

.pembayaran-field {
  padding: 10px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 14px;
}

.pembayaran-field:focus {
  outline: none;
  border-color: #007bff;
}

.pembayaran-button {
  padding: 12px 24px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  text-align: center;
  border-radius: 5px;
  display: inline-block;
  width: 92%;
  margin-top: 20px;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.pembayaran-button:hover {
  background-color: #0056b3;
}

.whatsapp-link {
  margin-top: 30px;
  text-align: center;
  color: #666;
  font-size: 14px;
}

.whatsapp-link a {
  color: #007bff;
  text-decoration: none;
  font-weight: bold;
}

.whatsapp-link a:hover {
  text-decoration: underline;
}
</style>

</head>
<body>
  <div class="pembayaran-container">
    <h2 class="pembayaran-title">Pembayaran</h2>
    
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="id_pelanggan">ID Pelanggan:</label>
      <input class="pembayaran-field" type="text" id="id_pelanggan" name="id_pelanggan" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="nama_pelanggan">Nama Pelanggan:</label>
      <input class="pembayaran-field" type="text" id="nama_pelanggan" name="nama_pelanggan" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="tanggal_pemesanan">Tanggal Pemesanan:</label>
      <input class="pembayaran-field" type="date" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="jumlah_kamar">Jumlah Kamar:</label>
      <input class="pembayaran-field" type="number" id="jumlah_kamar" name="jumlah_kamar" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="durasi_menginap">Durasi Menginap:</label>
      <input class="pembayaran-field" type="number" id="durasi_menginap" name="durasi_menginap" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="total_biaya">Total Biaya:</label>
      <input class="pembayaran-field" type="text" id="total_biaya" name="total_biaya" required>
    </div>
    <div class="pembayaran-info">
      <label class="pembayaran-label" for="status_pembayaran">Status Pembayaran:</label>
      <select class="pembayaran-field" id="status_pembayaran" name="status_pembayaran" required>
        <option value="Belum Dibayar">Belum Dibayar</option>
        <option value="Sudah Dibayar">Sudah Dibayar</option>
      </select>
    </div>
    <a class="pembayaran-button" href="https://wa.me/6281285948099" target="_blank">Bayar Sekarang</a>
    <div class="whatsapp-link">
      <p>Jika ada pertanyaan atau ingin melakukan pembayaran melalui metode lain, silahkan hubungi kami melalui WhatsApp:</p>
      <a href="https://wa.me/6281285948099" target="_blank">Hubungi Kami</a>
    </div>
  </div>
</body>
</html>