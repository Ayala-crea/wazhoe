<?php
require_once './database/functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'SELECT * FROM pemesanan LEFT JOIN kategori on pemesanan.kategori = pemesanan.id WHERE kategori.id';

    $getData = $mysqli->query($sql) ;
    $data = mysqli_fetch_assoc($getData);
    // var_dump($data);
}else {
    header('location:index.php');
    exit();
}
?>
    <div class="container mt-5">
        <h2>Cart Pembayaran</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['kategori']?></td>
                    <td><?= $data['banyak']?></td>
                    <td>Rp<?= number_format($data['harga'] * $data['banyak'], 0, ',', '.'); ?></td>
                </tr>
                <!-- You can add more rows for other products here -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total:</th>
                    <th>$35</th>
                </tr>
            </tfoot>
        </table>

        <div class="row">
            <div class="col-md-6">
                <h3>Customer Information</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Payment Information</h3>
                <form>
                    <div class="form-group">
                        <label for="card_number">Card Number:</label>
                        <input type="text" class="form-control" id="card_number" required>
                    </div>
                    <div class="form-group">
                        <label for="expiration">Expiration Date:</label>
                        <input type="text" class="form-control" id="expiration" required>
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV:</label>
                        <input type="text" class="form-control" id="cvv" required>
                    </div>
                </form>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Pay Now</button>
    </div>
