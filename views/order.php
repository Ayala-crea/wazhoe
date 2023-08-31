<?php
require_once '../database/functions.php';

if (isset($_POST["submit"])) {
    $result = pemesanan($_POST);
    if (($result) > 0) {
        echo "
        <script>
            alert('Data berhasil dimasukkan');
            document.location.href = 'pay.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'forum_input_data.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h2>Pemesanan Laundry Sepatu</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" name="kategori" id="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="3">deep clean</option>
                <option value="1">fast clean</option>
                <option value="5">repaint</option>
                <option value="4">deep cleaning express</option>
                <option value="6">whitening</option>
            </select>
        </div>
        <div class="form-group">
            <label for="brand">Brand Sepatu:</label>
            <input type="text" class="form-control" name="brand" id="brand" required>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah Sepatu:</label>
            <input type="number" class="form-control" name="quantity" id="quantity" min="1" required>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" min="1" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <select class="form-control" name="keterangan" id="keterangan" required>
                <option value="">Pilih Kategori</option>
                <option value="antar">antar</option>
                <option value="jemput">jemput</option>
            </select>
        </div>        <button type="submit" class="btn btn-primary" name="submit">Pesan Laundry</button>
    </form>
</div>
<br>
<br>
<br>
<br>