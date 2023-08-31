<div class="container mt-5">
    <h2>Shopping Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Kategori</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../database/functions.php';

            // Rename the id column to pemesanan_id
            // Set the $id variable
            // Get the data from the pemesanan table
            $query_payment = query('SELECT 
            pemesanan.id,
            pemesanan.brand,
            pemesanan.kategori,
            pemesanan.quantity,
            pemesanan.Alamat,
            pemesanan.keterangan,
            kategori.harga * pemesanan.quantity AS total_harga
        FROM 
            pemesanan
        LEFT JOIN 
            kategori ON pemesanan.kategori = kategori.id_kategori;
        
            ');
            $query_total = query('SELECT kategori.Harga * pemesanan.quantity AS total_harga
            FROM kategori
            INNER JOIN pemesanan ON kategori.id_kategori = pemesanan.id');

            // Loop through the data and display it in the table
            foreach ($query_payment as $row): ?>

                <tr>
                    <td>
                        <?= $row['brand']; ?>
                    </td>
                    <td>
                        <?= $row['kategori']; ?>
                    </td>
                    <td>
                        <?= $row['quantity']; ?>
                    </td>
                    <td>Rp
                        <?= number_format($row['total_harga']); ?>000
                    </td>
                    <td>
                        <?= $row['Alamat']; ?>
                    </td>
                    <td>
                        <?= $row['keterangan']; ?>
                    </td>
                    <td>
                    <a href="hapus_pesanan.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
    <p>Silakan pilih metode pembayaran:</p>
    <form action="" method="post">
        <div class="form-check">
            <input class="form-check-input" id="transfer" type="radio" name="payment_method" value="transfer" checked>
            <label class="form-check-label">
                Transfer Bank
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="cash" type="radio" name="payment_method" value="cash">
            <label class="form-check-label">
                Dana
            </label>
        </div>
        <!-- Pass the product and quantity data as hidden inputs to process_payment.php -->
        <input type="hidden" name="produk" value="<?php echo $produk; ?>">
        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
        <button type="submit" class="btn btn-primary mt-3">Bayar</button>
    </form>

    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
            if (paymentMethod === 'cash') {
                window.location.href = 'cash.php';
            } else if (paymentMethod === 'transfer') {
                window.location.href = 'transfer.php'; // Submit the form to process_payment.php for transfer payment
            }
        });
    </script>

</div>