<?php
require_once '../database/functions.php';

$data = query('SELECT * FROM pemesanan LEFT JOIN kategori ON pemesanan.kategori = kategori.id_kategori');

// Memastikan bahwa variabel $data berisi data sebelum digunakan
if ($data) {
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Struk Pembayaran</h4>
                    </div>
                    <?php foreach ($data as $key): ?>
                        <div class="card-body">
                            <p><strong>Username:</strong>
                                <?= $key["username"]; ?>
                            </p>
                            <p><strong>Email:</strong>
                                <?= $key["email"]; ?>
                            </p>
                            <p><strong>Total:</strong>
                                <?= $key["harga"]; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" onclick="printPage()">Cetak Struk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printPage() {
            window.print(); // Menggunakan fungsi print bawaan browser untuk mencetak halaman
        }
    </script>
    <?php
} else {
    echo '<p>Tidak ada data pemesanan yang ditemukan.</p>';
}
?>