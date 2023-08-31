<?php
require_once '../../database/functions.php';

$data = []; // Inisialisasi $data dengan array kosong
$totalHarga = 0; // Inisialisasi total harga

// Perbaiki query untuk mengambil semua data dari tabel pemesanan dan JOIN dengan kategori
$sql = "SELECT pemesanan.*, kategori.Harga AS kategori_harga 
        FROM pemesanan 
        LEFT JOIN kategori ON pemesanan.kategori = kategori.id_kategori";

$getData = mysqli_query($db, $sql);
if ($getData) {
    // Menggunakan fetch_assoc untuk mengambil satu baris hasil kueri dalam bentuk array asosiatif
    while ($row = mysqli_fetch_assoc($getData)) {
        $data[] = $row;

        // Menghitung total harga berdasarkan data yang diambil
        $totalHarga += $row['kategori_harga'] * $row['quantity'];
    }
} else {
    echo "Error: " . mysqli_error($db);
}

// Perbaiki query untuk mengambil total harga
$query_total = "SELECT SUM(kategori.Harga * pemesanan.quantity) AS total_harga
                FROM pemesanan 
                LEFT JOIN kategori ON pemesanan.kategori = kategori.id_kategori";
$result_total = mysqli_query($db, $query_total);
$row_total = mysqli_fetch_assoc($result_total);
$totalHargaFromQuery = $row_total['total_harga'];

?>

<div class="container mt-5">
    <h2>Data Pesanan</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['brand'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td>Rp <?= number_format($row['kategori_harga']) ?>.000</td>
                    <td>Rp <?= number_format($row['kategori_harga'] * $row['quantity']) ?>.000</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" class="text-right">Total:</th>
                <th>Rp <?= number_format($totalHargaFromQuery) ?>.000</th>
            </tr>
        </tfoot>
    </table>
</div>
